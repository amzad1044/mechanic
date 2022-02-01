<?php

namespace App\Http\Controllers;
use App\Area;
use App\Category;
use App\Mechanic;
use Image;
use DB;
use Session;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

class MechanicController extends Controller
{
        public function Mechanic()
    {
        $mechs = DB::table('mechanics')
                    ->join('categories','mechanics.cat_id','=','categories.id')
                    ->join('areas','mechanics.area_id','=','areas.id')
                    ->select('mechanics.*','categories.name','areas.area_name')
                    ->orderBy('id','desc')
                    ->get();
        $cats = Category::orderBy('id','desc')->where('status',1)->get();
        $areas = Area::orderBy('id','desc')->where('status',1)->get();
        return view('admin.mechanic.mechanic',[
            'cats'=>$cats,
            'areas'=>$areas,
            'mechs'=>$mechs
        ]);
    }
    public function MechSave(Request $request)
    {
        
        $this->validate($request,[
            'mech_name' => 'required|max:30|min:2',
            'nid' => 'required|min:2|unique:mechanics',
            'phone' => 'required|size:11',
            'email' => 'required|email',
            'cat_id' => 'required',
            'area_id' => 'required',
            'rate' => 'required|numeric|min:2',
            'img' => 'required|image',
            'status' => 'required'
        ]);
        $img = $request->file('img');
        $imageName = $img->getClientOriginalName();
        $dir = 'img/mechanics/';
        $imgUrl = $dir.time().$imageName;
        Image::make($img)->resize(300,400)->save($imgUrl);

        $mech = new Mechanic();
        $mech->mech_name = $request->mech_name;
        $mech->rate = $request->rate;
        $mech->phone = $request->phone;
        $mech->email = $request->email;
        $mech->cat_id = $request->cat_id;
        $mech->area_id = $request->area_id;
        $mech->nid = $request->nid;
        $mech->img = $imgUrl;
        $mech->status = $request->status;
        $mech->save();
        Session::flash('success','Mechanic added successfully');
        return redirect('/admin/mechanic');
    }
    public function EditMechanic($id)
    {
        $mechs = Mechanic::find($id);
        $cats = Category::where('status',1)->get();
        $areas = Area::where('status',1)->get();

        return view('admin.mechanic.editmechanic',[
            'mechs' => $mechs,
            'cats' =>$cats,
            'areas' => $areas
        ]);
    }
    public function MechUpdate(Request $request)
    {
        $img = $request->file('updatemechimg');
        if($img)
        {
            $mech =Mechanic::find($request->id);
            unlink($mech->img);

            $imageName = $img->getClientOriginalName();
            $dir = 'img/mechanics/';
            $imgUrl = $dir.time().$imageName;
            Image::make($img)->resize(300,400)->save($imgUrl);

            $mech->mech_name = $request->mech_name;
            $mech->rate = $request->rate;
            $mech->phone = $request->phone;
            $mech->email = $request->email;
            $mech->cat_id = $request->cat_id;
            $mech->area_id = $request->area_id;
            $mech->nid = $request->nid;
            $mech->total_work = $request->total_work;
            $mech->img = $imgUrl;
            $mech->save();

            Session::flash('success','Mechanic Updated');
            return redirect('/admin/mechanic');
        }
        else
        {
            $mech = Mechanic::find($request->id);
            $mech->mech_name = $request->mech_name;
            $mech->rate = $request->rate;
            $mech->phone = $request->phone;
            $mech->email = $request->email;
            $mech->cat_id = $request->cat_id;
            $mech->area_id = $request->area_id;
            $mech->nid = $request->nid;
            $mech->total_work = $request->total_work;
            $mech->save();
            Session::flash('success','Mechanic Updated');
            return redirect('/admin/mechanic');
        }

    }
    public function StatusChangeMech(Request $request)
    {
        $mech = Mechanic::find($request->status_id);
        $mech->status = $request->status;
        $mech->save();
        return response()->json(['success'=>'successful']);
    }
    public function DeleteMech($id)
    {
        $mech = Mechanic::find($id);
        $img = $mech['img'];
        unlink($img);
        $mech->delete();
        Session::flash('success','Deleted Successfully');
        return redirect('/admin/mechanic');
    }

}

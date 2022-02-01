<?php

namespace App\Http\Controllers;
use App\Area;
use Session;

use Illuminate\Http\Request;

class AreaController extends Controller
{
        public function area()
    {
        $areas = Area::orderBy('id','desc')->get();
        return view('admin.area.area',['areas'=>$areas]);

    }
    public function NewArea(Request $request)
    {
        $this->validate($request,[
            'area_name' => 'required|max:30|min:2',
            'description' => 'required|min:2',
            'status' => 'required'
        ]);
        $area = new Area();
        $area->area_name = $request->area_name;
        $area->description = $request->description;
        $area->status = $request->status;
        $area->save();
        Session::flash('success','New location added successfully');
        return redirect('/admin/area');
    }
    public function DeleteArea($id)
    {
        $area = Area::find($id);
        $area->delete();
        Session::flash('success','Success');
        return redirect('/admin/area');
    }
    public function DetailArea($id)
    {
        return Area::findOrFail($id);
    }
    public function UpdateArea(Request $request)
    {
        $this->validate($request,[
            'area_name' => 'required|max:30|min:2',
            'description' => 'required|min:2',
            'status' => 'required'
        ]);
        $area = Area::find($request->areaId);
        $area->area_name = $request->area_name;
        $area->description = $request->description;
        $area->status = $request->status;
        $area->save();
        Session::flash('success','Updated successfully');
        return redirect('/admin/area');
    }
    public function StatusChange(Request $request)
    {
        $area = Area::find($request->status_id);
        $area->status = $request->status;
        $area->save();
        return response()->json(['success'=>'successful']);
    }
}

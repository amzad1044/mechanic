<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mechanic;
use App\Category;
use App\Area;
use App\Hiredlabour;
use App\Review;
use DB;
use Session;

class FrontController extends Controller
{
    public function index()
    {
        $cats = Category::orderBy('id','desc')->where('status',1)->limit(5)->get();
        return view('front.home.home',[
            'cats' =>$cats
        ]);
    }
    public function Mechanic()
    {
        $mechs = Mechanic::orderBy('id','desc')->where('status',1)->paginate(9);
        return view('front.mechanic.mechanic',[
            'mechs' =>$mechs
        ]);
    }
    public function Mech_by_cat($id,$category_name)
    {
        $mech_cats=Mechanic::where('cat_id',$id)->where('status',1)->get();
        return view('front.mechanic.mechbycat',[
            'mech_cats' => $mech_cats,
            'category_name' =>$category_name
        ]);
    }
    public function Mech_by_area($id,$area_name)
    {
        $mech_areas=Mechanic::where('area_id',$id)->where('status',1)->get();
        return view('front.mechanic.mechbyarea',[
            'mech_areas' => $mech_areas,
            'area_name' =>$area_name
        ]);
    }
    public function MechSingle($id,$cat,$area)
    {
        $rev_avg = Review::Where('mech_id', $id)->pluck('rating')->avg();
        $review_avg = intval($rev_avg);

        $review = DB::table('reviews')
                    ->join('customers','reviews.cust_id','=','customers.id')
                    ->select('reviews.*','customers.fname')
                    ->orderBy('id','desc')
                    ->where('mech_id', $id)
                    ->get();

        

        $related = Mechanic::where('cat_id',$cat)->where('status',1)->get();

        $mechs=Mechanic::find($id);
        $cat = Category::find($cat);
        $area = Area::find($area);
        
        return view('front.mechanic.single',[
            'mechs'=>$mechs,
            'cat' =>$cat,
            'area'=>$area,
            'related'=>$related,
            'review'=>$review,
            'review_avg'=>$review_avg
        ]);
    }
    public function Hire($id)
    {
        if(Session::has('custId'))
        {
            $singleMech = Mechanic::find($id);

            $hiredlabour = new Hiredlabour();
            $hiredlabour->mech_id = $id;
            $hiredlabour->cust_id = Session::get('custId');
            $hiredlabour->cust_name = Session::get('custName');
            $hiredlabour->cust_email = Session::get('custEmail');
            $hiredlabour->cust_phone = Session::get('custPhone');
            $hiredlabour->save();

            $singleMech->status=0;
            $singleMech->save();

            Session::flash('success','Success! We will contact you soon');
            return redirect('mechanic');
        }
        else
        {
            return redirect('customer_login')->with(session()->flash('alert-warning','You have to login first!'));
        }
    }
    public function MechanicSrc(Request $request)
    {
        $cat = $request->src_cat;
        $area = $request->src_area;
        $find_mechanic = Mechanic::where('cat_id',$cat)->where('area_id',$area)->where('status',1)->get();
        return view('front.mechanic.mechanic',[
            'mechs' =>$find_mechanic
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'comment' => 'required|max:255|min:2',
            'rating' => 'required'
        ]);

        $review = new Review();
        $review->cust_id = $request->cust_id;
        $review->mech_id = $request->mech_id;
        $review->comment = $request->comment;
        $review->rating = $request->rating;
        $review->save();
        return response()->json($review);
    }
}

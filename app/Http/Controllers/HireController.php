<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mechanic;
use App\Hiredlabour;
use DB;
use Session;

class HireController extends Controller
{
    public function index()
    {
        $hires = DB::table('hiredlabours')
                    ->join('mechanics','hiredlabours.mech_id','=','mechanics.id')
                    ->select('hiredlabours.*','mechanics.mech_name','mechanics.phone','mechanics.rate','mechanics.status')
                    ->orderBy('seen','asc')
                    ->get();
        return view('admin.hire.hire',['hires'=>$hires]);
    }
    public function Seen($id)
    {
        $hire = Hiredlabour::find($id);
        $hire->seen=1;
        $hire->save();
        return redirect('/admin/allhire');
    }
    public function Unseen($id)
    {
        $hire = Hiredlabour::find($id);
        $hire->seen=0;
        $hire->save();
        return redirect('/admin/allhire');
    }
    public function Finishwork($id)
    {
        $mech = Mechanic::find($id);

        $work_count = $mech->total_work;

        $mech->status=1;
        $mech->total_work=$work_count+1;
        $mech->save();
        return redirect('/admin/allhire');
    }
}

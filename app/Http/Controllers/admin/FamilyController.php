<?php

namespace App\Http\Controllers\admin;

use App\Family;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function index($w_id)
    {
        $families=Family::where("u_id",$w_id)->get();
        return view("admin.workers.families")->with("families",$families)->with("w_id",$w_id);
    }
    public function indexUpdate($w_id,$id)
    {
        $families=Family::where("u_id",$w_id)->get();
        $f=Family::find($id);
        return view("admin.workers.families")->with("families",$families)->with("w_id",$w_id)->with("id",$id)->with("f",$f);
    }

    public function register(Request $request){
        if($request->input("id")==0)
            $family = new Family();
        else
            $family=Family::find($request->input("id"));
        $family->u_id=$request->input("u_id");
        $family->nameFamily=$request->input("nameFamily");
        $family->ratio=$request->input("ratio");
        $family->address=$request->input("address");
        $family->workPhone=$request->input("workPhone");
        $family->homePhone=$request->input("homePhone");
        $family->phone=$request->input("phone");
        $family->save();

        return redirect()->back();
    }

}

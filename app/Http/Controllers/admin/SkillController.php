<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Resume;
use App\Skill;
use App\SkillLIst;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index($w_id)
    {
        $skillLists = SkillLIst::all();
        $skills = Skill::with('skill_list')->where('u_id', $w_id)->get();
        return view('admin.workers.skills')->with('skillLists', $skillLists)->with('skills', $skills)->with('w_id', $w_id);
    }

    public function indexDelete($id)
    {
//        $skill = Skill::where('u_id', $w_id)->get();
        $skill = Skill::find($id);
        $skill->delete();
        return redirect()->back();
    }

    public function register(Request $request)
    {

        if ($request->input("id") == 0)
            $skill = new Skill();
        else
            $skill = Skill::find($request->input("id"));
        $skill->u_id = $request->input("u_id");
        $skill->sl_id = $request->input("sl_id");
        $skill->level = $request->input("level");
        $skill->save();

        return redirect()->back();
    }
}

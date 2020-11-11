<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SkillLIst;
use Illuminate\Http\Request;

class SkillListController extends Controller
{
    public function skill_lists()
    {
        $skillLists = SkillLIst::paginate(10);
        return view('admin.skillLists.skillLists')->with('skillLists', $skillLists);
    }


    public function add_skill_list(Request $request)
    {
        if ($request->input("id") == 0)
            $skillList = new SkillLIst();
        else
            $skillList = SkillLIst::find($request->id);
        $skillList->name = $request->input('name');
        $skillList->save();

        return redirect()->back();
    }

//    public function add_skill_list(Request $request)
//    {
//        $skillList = new SkillLIst();
//        $skillList->name = $request->input('name');
//        $skillList->save();
//
//        return redirect()->back();
//    }

    public function update_skill_list_view(Request $request)
    {
        $skillLists = SkillLIst::paginate(10);
        $skillList = SkillLIst::find($request->id);
        return view('admin.skillLists.skillLists')->with('skillList', $skillList)->with('skillLists', $skillLists);;
    }

    public function update_skill_list(Request $request)
    {
        $skillList = SkillLIst::find($request->id);
        $skillList->name = $request->input('name');
        $skillList->save();

        return redirect('/admin/skillLists');
    }
}

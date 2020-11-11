<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index($w_id)
    {
        $resumes = Resume::where("u_id", $w_id)->get();
        return view('admin.workers.resumes')->with('resumes', $resumes)->with('w_id', $w_id);
    }

    public function indexUpdate($w_id, $id)
    {
        $resumes = Resume::where('u_id', $w_id)->get();
        $r = Resume::find($id);
        return view('admin.workers.resumes')->with('resumes', $resumes)->with('w_id', $w_id)->with('r', $r)->with('id', $id);
    }

    public function register(Request $request)
    {

        if ($request->input("id") == 0)
            $resume = new Resume();
        else
            $resume = Resume::find($request->input("id"));
        $resume->u_id = $request->input("u_id");
        $resume->name = $request->input("name");
        $resume->projectSite = $request->input("projectSite");
        $resume->side = $request->input("side");
        $resume->cooperationDate = $request->input("cooperationDate");
        if ($request->input("id") == 0)
        $resume->certificateFile = "no image";
        $resume->save();

        $file = $request->file('certificateFile');
        if (isset($file))
            if ($file->isValid()) {
                $fileName = "certificateFile-" . $resume->id . "-" . $file->getClientOriginalName();
                $file->move('upload/user/resumes', $fileName);
                Resume::where('id', $resume->id)
                    ->update(['certificateFile' => /*url("/upload/user")."/".*/ $fileName]);
            }

        return redirect()->back();
    }
}

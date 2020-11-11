<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Learn;
use App\Resume;
use Illuminate\Http\Request;

class LearnController extends Controller
{
    public function index($w_id)
    {
        $learns = Learn::where("u_id", $w_id)->get();
        return view('admin.workers.learns')->with('learns', $learns)->with('w_id', $w_id);
    }

    public function indexUpdate($w_id, $id)
    {
        $learns = Learn::where('u_id', $w_id)->get();
        $l = Learn::find($id);
        return view('admin.workers.learns')->with('learns', $learns)->with('w_id', $w_id)->with('l', $l)->with('id', $id);
    }

    public function register(Request $request)
    {
        if ($request->input("id") == 0)
            $learn = new Learn();
        else
            $learn = Learn::find($request->input("id"));
        $learn->u_id = $request->input("u_id");
        $learn->name = $request->input("name");
        $learn->date = $request->input("date");
        $learn->address = $request->input("address");
        $learn->organizer = $request->input("organizer");
        if ($request->input("id") == 0)
        $learn->certificateFile = "no image";
        $learn->save();

        $file = $request->file('certificateFile');
        if (isset($file))
            if ($file->isValid()) {
                $fileName = "certificateFile-" . $learn->id . "-" . $file->getClientOriginalName();
                $file->move('upload/user/learns', $fileName);
                Learn::where('id', $learn->id)
                    ->update(['certificateFile' => /*url("/upload/user")."/".*/ $fileName]);
            }
        return redirect()->back();
    }
}

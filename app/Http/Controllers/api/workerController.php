<?php

namespace App\Http\Controllers\api;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Order;
use App\station;
use App\User;
use App\Workstation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class workerController extends Controller
{

    public function stations(){
        $stations=station::all();
        return [
            'success' => true,
            'message' => "با موفقیت دریافت شد",
            'data' => $stations
        ];
    }
    public function workers_in_station(Request $request){
        $v =  Verta();
        $date= $v->format('Y/m/d');

        $workers=Workstation::with("UWorker")
            ->with("UWorker.worker")
            ->with("UWorker.skills")
            ->with("UWorker.skills.skill_list")
            ->where("s_id",$request->input("s_id"))
            ->where("status",0)
            ->where("date",$date)->get();

        return [
            'success' => true,
            'message' => "با موفقیت دریافت شد",
            'data' => $workers
        ];

    }
    public function getWorkerDetails(Request $request){
        $worksCount = Order::where("w_id",$request->input("id"))->count('id');

        $worker=User::with("worker")
            ->with("skills")
            ->with("skills.skill_list")
            ->with("comments_worker")
            ->with("comments_worker.user")
            ->where("id",$request->input("id"))->first();

        return [
            'success' => true,
            'message' => "با موفقیت دریافت شد",
            'data' => ["details"=>$worker , "workCount"=>$worksCount]
        ];
    }
    public function addCommentWorker(Request $request){
        $v = Verta();
        $date = $v->format('Y/m/d');
        $time = $v->format('H:i');

        $comment=new Comment();
        $comment->e_id=Auth::id();
        $comment->w_id=$request->input("id");
        $comment->text=$request->input("text");
        $comment->status=0;
        $comment->date=$date;
        $comment->time=$time;
        $comment->save();
        return [
            'success' => true,
            'message' => "با موفقیت نظر شما ثبت شد",
            'data' => ""
        ];
    }

}

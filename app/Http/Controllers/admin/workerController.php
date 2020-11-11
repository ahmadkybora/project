<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\station;
use App\User;
use App\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class workerController extends Controller
{
    public function add_worker_view()
    {
        return view("admin.workers.worker");
    }

    public function add_worker(Request $request)
    {
        if ($request->input("id") == 0)
            $user = new User();
        else
            $user = User::find($request->input("id"));
        $user->name = $request->input("name");
        $user->family = $request->input("family");
        $user->phone = $request->input("phone");
        $user->password = $request->input("password");
        $user->birthdate = $request->input("birthdate");
        $user->nationalCode = $request->input("nationalCode");
        $user->gender = $request->input("gender");
        $user->address = $request->input("address");
        $user->wallet = $request->input("wallet");
        $user->isMarital = $request->input("isMarital");
        $user->isOperator = 0;
        $user->isAdmin = 0;
        $user->isWorker = 1;
        $user->isEmployer = 0;
        $user->education = $request->input("education");
        $user->tell = $request->input("tell");
        $user->save();


        if ($request->input("id") == 0)
            $worker = new Worker();
        else
            $worker = Worker::where("u_id", $request->input("id"));
        $worker->u_id = $user->id;
        $worker->militaryServiceStatus = $request->input('militaryServiceStatus');
        $worker->typeOfExemption = $request->input("typeOfExemption");
        $worker->socialSecurityInsurance = $request->input("socialSecurityInsurance");
        $worker->insuranceCode = $request->input("insuranceCode");
        $worker->degreeOfSkillCard = $request->input("degreeOfSkillCard");
        $worker->countChild = $request->input("countChild");
        $worker->fatherName = $request->input("fatherName");
        $worker->bcNumber = $request->input("BcNumber");
        $worker->placeIssue = $request->input("placeIssue");
        $worker->placeBirth = $request->input("placeBirth");
        $worker->price = $request->input("price");
        $worker->religion = $request->input("Religion");
        $worker->religion2 = $request->input("Religion2");
        $worker->bloodType = $request->input("bloodType");
        $worker->historyWar = $request->input("historyWar");
        $worker->historyInjury = $request->input("historyInjury");
        $worker->captivity = $request->input("captivity");
        $worker->housingSitutation = $request->input("housingSitutation");
        $worker->physicalCondition = $request->input("physicalCondition");
        $worker->physicalConditionComment = $request->input("physicalConditionComment");
        $worker->dutyService = $request->input("dutyService");
        $worker->cardNumber = $request->input("cardNumber");
        $worker->paymentNumber = $request->input("paymentNumber");
        $worker->save();


        $file = $request->file('profileImage');
        if (isset($file))
            if ($file->isValid()) {
                $fileName = "profileImage-" . $worker->id . "-" . $file->getClientOriginalName();
                $file->move('upload/user', $fileName);
                User::where('id', $user->id)
                    ->update(['profileImage' => /*url("/upload/user")."/".*/
                        $fileName]);
            }
        $file = $request->file('imageBirthCertificate');
        if (isset($file))
            if ($file->isValid()) {
                $fileName = "imageBirthCertificate-" . $worker->id . "-" . $file->getClientOriginalName();
                $file->move('upload/user', $fileName);
                Worker::where('u_id', $worker->id)
                    ->update(['imageBirthCertificate' => /*url("/upload/user")."/".*/
                        $fileName]);
            }
        $file = $request->file('imageNationalCard');
        if (isset($file))
            if ($file->isValid()) {
                $fileName = "imageNationalCard-" . $worker->id . "-" . $file->getClientOriginalName();
                $file->move('upload/user', $fileName);
                Worker::where('u_id', $worker->id)
                    ->update(['imageNationalCard' => /*url("/upload/user")."/".*/
                        $fileName]);
            }
        $file = $request->file('imageCardService');
        if (isset($file))
            if ($file->isValid()) {
                $fileName = "imageCardService-" . $worker->id . "-" . $file->getClientOriginalName();
                $file->move('upload/user', $fileName);
                Worker::where('u_id', $worker->id)
                    ->update(['imageCardService' => /*url("/upload/user")."/".*/
                        $fileName]);
            }
        $file = $request->file('imageSkillCard');
        if (isset($file))
            if ($file->isValid()) {
                $fileName = "imageSkillCard-" . $worker->id . "-" . $file->getClientOriginalName();
                $file->move('upload/user', $fileName);
                Worker::where('u_id', $worker->id)
                    ->update(['imageSkillCard' => /*url("/upload/user")."/".*/
                        $fileName]);
            }
        return redirect()->back();
    }

    public function update_worker_view($id)
    {
        return "update view";
    }

    public function update_worker()
    {
        return "update";
    }

    public function delete_worker($id)
    {
        return "delete";
    }

    public function workers()
    {
        $workers = User::with('worker')->paginate(10);
        return view("admin.workers.workers")->with('workers', $workers);
    }

    //station management
    public function add_station_view()
    {
        $stations = Station::all();
        return view("admin.stations.station")->with("stations", $stations);
    }

    public function add_station(Request $request)
    {
        if ($request->input("id") == 0)
            $station = new station();
        else
            $station = Station::find($request->input("id"));
        $station->title = $request->input("title");
        $station->lat = 0;
        $station->lng = 0;
        $station->save();
        return redirect()->back();

    }

    public function update_station_view($id)
    {
        $stations = Station::all();
        $station = Station::find($id);
        return view("admin.stations.station")->with("id", $id)->with("station", $station)->with("stations", $stations);
    }


    //reports
    public function workers_in_station($sid)
    {
        return "workers in station";
    }

}

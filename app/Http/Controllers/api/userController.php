<?php

namespace App\Http\Controllers\api;

use App\Employer;
use App\Http\Controllers\Controller;
use App\User;
use App\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Response;

class userController extends Controller
{

    public function login(Request $request)
    {
        if ($request->input("phone") == "" || $request->input("phone") == null) {
            return [
                'success' => false,
                'message' => "فیلد شماره همراه خالی است",
                'data' => "",
            ];
        }
        $phoneGenerator = "+98" . ltrim($request->input("phone"), '0');
        $users = User::where("phone", $phoneGenerator)->get();
        //generate auth code
        $seed = str_split('0123456789'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $rand = '';
        foreach (array_rand($seed, 5) as $k) $rand .= $seed[$k];

        $is_new = 1;
        foreach ($users as $user) {
            $is_new = 0;
        }
        if ($is_new == 1) {
            $user = new User();
            $user->phone = $phoneGenerator;
            $user->isEmployer = 1;
            $user->password = Hash::make($rand);
            $user->save();

            return [
                'success' => true,
                'message' => "کد احراز هویت با موفقیت ارسال شد",
                'data' => ["isFirstTime" => 1, "AuthCode" => $rand],
            ];
        } else {
            User::where('phone', $phoneGenerator)
                ->update(['password' => Hash::make($rand),'isEmployer' => 1]);
            return [
                'success' => true,
                'message' => "کد احراز هویت با موفقیت ارسال شد",
                'data' => ["isFirstTime" => 0, "AuthCode" => $rand],
            ];

        }
    }

    public function verify(Request $request)
    {
        $phoneGenerator = "+98" . ltrim($request->input("phone"), '0');
        $user = User::where("phone", $phoneGenerator)->first();
        if ($request->input("nationalCode") != "") {
            User::where('phone', $phoneGenerator)
                ->update(['nationalCode' => $request->input("nationalCode")]);
        }
        if (isset($user)) {
            if ($user != "") {
                if (Hash::check($request->input("authCode"), $user->password)) {
                    $data = ["token" => $user->createToken('create')->accessToken];
                    return [
                        'success' => true,
                        'message' => "توکن با موفقیت دریافت شد",
                        'data' => $data,
                    ];
                } else {
                    return [
                        'success' => false,
                        'message' => "کد احراز نا معتبر است",
                        'data' => "",
                    ];
                }
            } else {
                return [
                    'success' => false,
                    'message' => "کاربر وجود ندارد.",
                    'data' => "",
                ];
            }
        } else {
            return [
                'success' => false,
                'message' => "کاربر وجود ندارد.",
                'data' => "",
            ];
        }
    }


    public function ref(Request $request)
    {

        if ($request->input("refCode") == "") {
            return [
                'success' => false,
                'message' => Lang::get("translate.welcome"),
                'data' => ""
            ];
        } else {
            $checkExist = User::where("refCode", $request->input("refCode"))->first();
            if (isset($checkExist->id)) {
                $user = User::find(Auth::id());
                $user->refCodeUser = $request->input("refCode");
                $user->save();
                return [
                    'success' => false,
                    'message' => Lang::get("translate.success_register_reference_code"),
                    'data' => ""
                ];
            } else {
                return [
                    'success' => false,
                    'message' => Lang::get("translate.invalid_reference_code"),
                    'data' => ""
                ];
            }
        }
    }

    public function update_account(Request $request)
    {
        $user = User::find(Auth::id());
        $user->name = $request->input("name");
        $user->family = $request->input("family");
        $user->birthdate = $request->input("birthdate");
        $user->gender = $request->input("gender");
        $user->address = $request->input("address");
        $user->education = $request->input("education");
        $user->isMarital = $request->input("isMarital");
        $user->tell = $request->input("tell");
        $user->save();

        $e = Employer::where("u_id", Auth::id())->first();
        if (!isset($e->id))
            $employer = new Employer();
        else
            $employer = Employer::find($e->id);
        $employer->email = $request->input("email");
        $employer->u_id = Auth::id();
        $employer->job = $request->input("job");
        $employer->save();

        $file = $request->file('profileImage');

        User::where('id', $user->id)
            ->update(['profileImage' => /*url("/upload/user")."/".*/ "default.png"]);

        if (isset($file))
            if ($file->isValid()) {
                $fileName = "profileImage-" . $user->id . "-" . $file->getClientOriginalName();
                $file->move('upload/user', $fileName);
                User::where('id', $user->id)
                    ->update(['profileImage' => /*url("/upload/user")."/".*/ $fileName]);
            }

        return Response::json([
            'success' => true,
            'message' => "با موفقیت اطلاعات کاربر ثبت شد",
            'data' => ""
        ], 200); // Status code here

    }

    public function account(Request $request)
    {
        $account = User::with("employer")->find(Auth::id());
        return [
            'success' => true,
            'message' => "با موفقیت دریافت شد",
            'data' => $account
        ];
    }

    public function rateWorker(Request $request){
        $checkVote=Vote::where("e_id",Auth::id())->where("w_id",$request->input("id"))->first();
        if(isset($checkVote->id)){
            $checkVote->rate=$request->input("rate");
            $checkVote->save();
        }else{
            $vote = new Vote();
            $vote->e_id=Auth::id();
            $vote->w_id=$request->input("id");
            $vote->rate=$request->input("rate");
            $vote->save();
        }
        $avgRate = Vote::where("w_id",$request->input("id"))->avg('rate');
        User::where('id', $request->input("id"))
            ->update(['rate' => $avgRate]);
        return [
            'success' => true,
            'message' => "با موفقیت ثبت شد",
            'data' => $avgRate
        ];

    }

}

<?php

namespace App\Http\Controllers\admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Exception;

class RegisterController extends Controller
{
    public function accesses(){
        return   $auth = User::select("accesses.pid")
            ->join('permissions', 'permissions.uid', '=', 'users.id') ->join('rules', 'rules.id', '=', 'permissions.rid')->join('accesses', 'accesses.rid', '=', 'rules.id')->where("users.id", Auth::id())->get();

    }
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/verify';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        try {

            $data = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'family' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:255', 'unique:users'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            $seed = str_split('0123456789'); // and any other characters
            shuffle($seed); // probably optional since array_is randomized; this may be redundant
            $rand = '';
            foreach (array_rand($seed, 5) as $k) $rand .= $seed[$k];

            User::create([
                'name' => $data['name'],
                'family' => $data['family'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'code' => Hash::make($rand),
                'isAdmin' => 1,
                'password' => Hash::make($data['password']),
            ]);
        } catch (Exception $e) {
            echo 'Message: ' . $e->getMessage();
        }

        return redirect()->back();
    }

    public function registerForm()
    {
        return view("admin.auth.register")->with("auth",$this->accesses());
    }

    public function admin_list()
    {
        $users = User::where("isAdmin", 1)->get();
        return view("admin.reports.admin")->with("users", $users)->with("auth",$this->accesses());
    }

    public function delete_admin($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }

    public function toggleActivation($type,$id){
        $user=User::find($id);
        if($type=="email"){
            if($user->verifyEmail==0)
                $user->verifyEmail=1;
            else
                $user->verifyEmail=0;
        }
        if($type=="phone"){
            if($user->verifyPhone==0)
                $user->verifyPhone=1;
            else
                $user->verifyPhone=0;
        }
        if($type=="users"){
            if($user->isMyUsers==0)
                $user->isMyUsers=1;
            else
                $user->isMyUsers=0;
        }
        $user->save();
        return redirect()->back();
    }
}

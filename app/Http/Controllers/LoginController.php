<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\LogLogin;
class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function store(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->input('remember');
        if($remember){
            $remember = true;
        }else{
            $remember = false;
        }
        if (Auth::attempt(['email' => $email, 'password' => $password] , $remember)) {
            $user = Auth::user();

            $logLogin = new LogLogin;
            $logLogin->user_id = $user->id;
            $logLogin->save();

            // LogLogin::insert(
            //     ['user_id'=>$user->id]
            // );

            $return['status'] = 1;
            $return['content'] = 'Log in สำเร็จ';
        }else{
            $return['status'] = 0;
            $return['title'] = 'Email หรือ Password ไม่ถูกต้อง';
            $return['content'] = '';
        }
        return $return;
    }
}

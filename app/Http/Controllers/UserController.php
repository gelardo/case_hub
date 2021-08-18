<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //user login
    public function userLogin(){
        return view('user.login');
    }

    public function userLoginProcess(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        else{
            if(Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])){
                return redirect()->route('user.dashboard');
            }else{
                Session::flash('error_message','Invalid Email Or Password');
                return redirect('/user/login');
            }

        }

    }
    public function dashboard(){

        return view('user.dashboard');
    }

    public function logout(){
        Session::flush();
        Auth::guard('user')->logout();
        return redirect('/user/login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LawyerController extends Controller
{
    //lawyer login
    public function lawyerLogin(){
        return view('lawyer.login');
    }

    public function lawyerLoginProcess(Request $request) {

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
            if(Auth::guard('lawyer')->attempt(['email' => $request->email, 'password' => $request->password])){
                return redirect()->route('lawyer.dashboard');
            }else{
                Session::flash('error_message','Invalid Email Or Password');
                return redirect('/lawyer/login');
            }

        }

    }
    public function dashboard(){

        return view('lawyer.dashboard');
    }

    public function logout(){
        Session::flush();
        Auth::guard('lawyer')->logout();
        return redirect('/lawyer/login');
    }
}

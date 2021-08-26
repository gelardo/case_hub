<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Lawyer;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    //admin login
    public function adminLogin(){
        return view('admin.login');
    }

    public function adminLoginProcess(Request $request) {

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
            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
                return redirect()->route('admin.dashboard');
            }else{
                Session::flash('error_message','Invalid Email Or Password');
                return redirect('/admin/login');
            }

        }

    }
    public function dashboard(){
        $date_today = Carbon::today()->format('Y-m-d');
        $total_lawyers = \App\Models\Lawyer::all();
//        echo ($date_today);
        $model = BlendxHelpers::route_to_model('case_main');
        $query = $model->path::with($model->blender->getRelations());
        $all = $query->get();
        $todays_cases_total = $query->where('next_date', $date_today)->get();
        $tomorrows_cases = $query->where('next_date', Carbon::tomorrow()->format('Y-m-d'))->get();
//dd($all);
        $total_cases = count($all);
        $total_lawyers = count($total_lawyers);
        $todays_cases = count($todays_cases_total);
        $tomorrows_cases = count($tomorrows_cases);


        return view('admin.dashboard',compact('total_cases','total_lawyers','todays_cases','tomorrows_cases','todays_cases_total'));
    }
    public function customSearchCases(Request $request){
        $fromDate = $request->input('fromDate');
        $toDate = $request->input('toDate');
        $date_today = Carbon::today()->format('Y-m-d');
        $total_lawyers = \App\Models\Lawyer::all();
//        echo ($date_today);
        $model = BlendxHelpers::route_to_model('case_main');
        $query = $model->path::with($model->blender->getRelations());
        $all = $query->get();
        $todays_cases_total = $query->where('next_date', '>=' , $fromDate)->where('next_date', '<=', $toDate)->get();
        $tomorrows_cases = $query->where('next_date', Carbon::tomorrow()->format('Y-m-d'))->get();

        $total_cases = count($all);
        $total_lawyers = count($total_lawyers);
        $todays_cases = count($todays_cases_total);
        $tomorrows_cases = count($tomorrows_cases);


        return view('admin.dashboard',compact('total_cases','total_lawyers','todays_cases','tomorrows_cases','todays_cases_total'));
    }

    public function logout(){
        Session::flush();
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}

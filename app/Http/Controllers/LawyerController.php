<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        $date_today = Carbon::today()->format('Y-m-d');
        $total_lawyers = \App\Models\Lawyer::all();
//       dd(Carbon::tomorrow()->format('Y-m-d'));
        $tommorow1 =  Carbon::tomorrow()->format('Y-m-d');
        $model = BlendxHelpers::route_to_model('case_main');
        $result = $model->path::all()->where('lawyer_id',\auth('lawyer')->user()->id)->fresh($model->blender->getRelations());
        $todays_cases_total = $result->where('next_date', $date_today);
        $tomorrows_cases = $result->where('next_date', $tommorow1);
        $all = $result;
        $total_cases = count($all);
        $total_lawyers = count($total_lawyers);
        $todays_cases = count($todays_cases_total);
        $tomorrows_cases = count($tomorrows_cases);

        return view('lawyer.dashboard',compact('total_cases','total_lawyers','todays_cases','tomorrows_cases','todays_cases_total'));

    }
    public function customSearchCases(Request $request){
//        dd($request);
        $fromDate = $request->input('fromDate');
        $toDate = $request->input('toDate');
        $date_today = Carbon::today()->format('Y-m-d');
        $total_lawyers = \App\Models\Lawyer::all();
//        echo ($date_today);
        $model = BlendxHelpers::route_to_model('case_main');
//        $query = $model->path::with($model->blender->getRelations());
        $result = $model->path::all()->where('lawyer_id',\auth('lawyer')->user()->id)->fresh($model->blender->getRelations());
        $tcase = $result->where('next_date',$date_today);
        $todays_cases_total = $result->where('next_date', '>=' , $fromDate)->where('next_date', '<=', $toDate);
        $tomorrows_cases = $result->where('next_date', Carbon::tomorrow()->format('Y-m-d'));
        $all = $result;
//        dd($result);
        $total_cases = count($all);
        $total_lawyers = count($total_lawyers);
        $todays_cases = count($tcase);
        $tomorrows_cases = count($tomorrows_cases);


        return view('lawyer.dashboard',compact('total_cases','total_lawyers','todays_cases','tomorrows_cases','todays_cases_total'));
    }

    public function logout(){
        Session::flush();
        Auth::guard('lawyer')->logout();
        return redirect('/lawyer/login');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\CaseMain;
use Illuminate\Http\Request;

class CustomUserController extends Controller
{
    public function assignLawyerToCase(Request $request){
        $res = CaseMain::where('id',$request->case_id)->update([
            'lawyer_id' => $request->lawyer_id
        ]);
        return  redirect('user/case_main/index');
    }
}

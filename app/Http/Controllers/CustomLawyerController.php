<?php

namespace App\Http\Controllers;


class CustomLawyerController extends Controller
{
    public function loadCaseIssue(){
        $model = BlendxHelpers::route_to_model('case_main');
        $all = $model->path::with($model->blender->getRelations())
            ->where('lawyer_id', auth('lawyer')->user()->id)
            ->get();
        return  view('lawyer.case_issues_log.index' ,compact('all'));
    }
    public function loadCaseProceedings(){
        $model = BlendxHelpers::route_to_model('case_main');
        $all = $model->path::with($model->blender->getRelations())->where('lawyer_id', auth('lawyer')->user()->id)->get();
        return  view('lawyer.case_proceeding.index' ,compact('all'));
    }
}

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlendxController;
use App\Http\Controllers\CustomLawyerController;
use App\Http\Controllers\CustomUserController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.login');
});
Route::group(['prefix'=>'user' ], function() {
    Route::get('/login', function () {
        return view('user.login');
    })->name('user.login');
    Route::post('/login', [UserController::class, 'userLoginProcess'])->name('user.login');
//Auth::routes();
    Route::group(['middleware' => 'user'], function () {
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
        Route::post('/assignlawyer', [CustomUserController::class, 'assignLawyerToCase'])->name('assignLawyerToCases');
        Route ::get('/customSearchCases', [UserController::class, 'customSearchCases']) -> name('customSearchCases');
        Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
        Route::get('/{route}/index/{id?}', [BlendxController::class, 'index']);
        Route::get('/{route}/create/{id?}', [BlendxController::class, 'create']);
        Route::get('/{route}/show/{id?}', [BlendxController::class, 'show']);
        Route::get('/{route}/edit/{id?}', [BlendxController::class, 'edit']);
        Route::post('/{route}/store', [BlendxController::class, 'store']);
        Route::put('/{route}/update/{id?}', [BlendxController::class, 'update']);
        Route::get('/{route}/query/', [BlendxController::class, 'query'])->name('query.route');
    });
});
Route::group(['prefix'=>'admin' ], function(){
    Route::get('/login',[AdminController::class,'adminLogin'])->name('admin.login');
    Route::post('/login',[AdminController::class,'adminLoginProcess']);
    Route::group(['middleware'=>'admin'],function() {
        Route ::get('/dashboard', [AdminController::class, 'dashboard']) -> name('admin.dashboard');
        Route ::get('/logout', [AdminController::class, 'logout']) -> name('admin.logout');
        Route ::get('/customSearchCases', [AdminController::class, 'customSearchCases']) -> name('customSearchCases');
        Route::get('/{route}/index/{id?}', [BlendxController::class, 'index']);
        Route::get('/{route}/create/{id?}', [BlendxController::class, 'create']);
        Route::get('/{route}/show/{id?}', [BlendxController::class, 'show']);
        Route::get('/{route}/edit/{id?}', [BlendxController::class, 'edit']);
        Route::delete('/{route}/delete/{id?}/', [BlendxController::class, 'delete']);
        Route::post('/{route}/store', [BlendxController::class, 'store']);
        Route::put('/{route}/update/{id?}', [BlendxController::class, 'update']);

    });
});
Route::group(['prefix'=>'lawyer' ], function(){
    Route::get('/login',[LawyerController::class,'lawyerLogin'])->name('lawyer.login');
    Route::post('/login',[LawyerController::class,'lawyerLoginProcess']);
    Route::group(['middleware'=>'lawyer'],function() {
        Route ::get('/dashboard', [LawyerController::class, 'dashboard']) -> name('lawyer.dashboard');
        Route ::get('/logout', [LawyerController::class, 'logout']) -> name('lawyer.logout');
        Route ::get('/customSearchCases', [LawyerController::class, 'customSearchCases']) -> name('customSearchCases');
        Route::get('/case_issues_log/index',[CustomLawyerController::class, 'loadCaseIssue']);
        Route::get('/case_proceeding/index',[CustomLawyerController::class, 'loadCaseProceedings']);
        Route::get('/{route}/index/{id?}', [BlendxController::class, 'index']);
        Route::get('/{route}/create/{id?}', [BlendxController::class, 'create']);
        Route::get('/{route}/show/{id?}', [BlendxController::class, 'show']);
        Route::get('/{route}/edit/{id?}', [BlendxController::class, 'edit']);
        Route::post('/{route}/store', [BlendxController::class, 'store']);
        Route::put('/{route}/update/{id?}', [BlendxController::class, 'update']);
        Route::get('/{route}/query/', [BlendxController::class, 'query'])->name('query.route');
        Route::get('/caseIssue',[CustomLawyerController::class, 'loadCaseIssue'])->name('caseIssue');
        Route::get('/caseProceedings',[CustomLawyerController::class, 'loadCaseProceedings'])->name('caseProceedings');
//        Route::get('lawyer/case_issues_log/index',[CustomLawyerController::class, 'loadCaseIssue']);

    });
});

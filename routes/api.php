<?php

use App\Http\Controllers\BlendxController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/{route}/index/{id?}', [BlendxController::class, 'index']);
Route::get('/{route}/create/{id?}', [BlendxController::class, 'create']);
Route::get('/{route}/show/{id?}', [BlendxController::class, 'show']);
Route::get('/{route}/edit/{id?}', [BlendxController::class, 'edit']);
Route::delete('/{route}/delete/{id?}/', [BlendxController::class, 'delete']);
Route::post('/{route}/store', [BlendxController::class, 'store']);
Route::put('/{route}/update/{id?}', [BlendxController::class, 'update']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

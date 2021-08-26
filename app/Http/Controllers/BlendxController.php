<?php

namespace App\Http\Controllers;

use App\Models\BookAppointment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class BlendxController extends Controller
{

    public static function index(Request $request, $route, $id = null){

        if(!$request->isMethod('GET')){
            return response("Method not allowed! Please make a GET request!", 405, ['Access-Control-Allow-Methods' => 'GET']);
        }
        $api = BlendxHelpers::is_api($request);
        $model = BlendxHelpers::route_to_model($route);

        $all = $model->path::with($model->blender->getRelations())->get();
        $res = BlendxHelpers::generate_response(false, 'All '.$model->name.' loaded!', $all);
        if($api){

            return response()->json($res, 200);
        }else{
            if(\auth('admin')->check()){
                $guardToUse = 'admin';
            }
            elseif(\auth('lawyer')->check()){
                $guardToUse = 'lawyer';
            }
            elseif(\auth('user')->check()){
                $guardToUse = 'user';
            }
           return  view( $guardToUse.'.'.$route.'.index',compact('all'));
        }

    }

    public static function create(Request $request, $route){
        if(\auth('admin')->check()){

            $guardToUse = 'admin';
        }
        elseif(\auth('lawyer')->check()){
            $guardToUse = 'lawyer';
        }
        elseif(\auth('user')->check()){
            $guardToUse = 'user';
        }
        if(!$request->isMethod('GET')){
            return response("Method not allowed! Please make a GET request!", 405, ['Access-Control-Allow-Methods' => 'GET']);
        }

        $model = BlendxHelpers::route_to_model($route);
        return  view($guardToUse.'.'.$route.'.create',compact('model') );


    }

    public static function edit(Request $request, $route,$id){
        if(\auth('admin')->check()){

            $guardToUse = 'admin';
        }
        elseif(\auth('lawyer')->check()){
            $guardToUse = 'lawyer';
        }
        elseif(\auth('user')->check()){
            $guardToUse = 'user';
        }
        if(!$request->isMethod('GET')){
            return response("Method not allowed! Please make a GET request!", 405, ['Access-Control-Allow-Methods' => 'GET']);
        }
        $model = BlendxHelpers::route_to_model($route);
        $entry = $model->path::with($model->blender->getRelations())->where('id', $id)->first();
        $entry_to_respond = $model->blender::format_entry($entry, $model);
        $res = BlendxHelpers::generate_response(false, $model->name.' with id ('.$id.')loaded!', [$entry_to_respond]);
        return  view($guardToUse.'.'.$route.'.edit' ,compact('entry_to_respond'));

    }

    public static function show(Request $request, $route, $id){

        if(!$request->isMethod('GET')){
            return response("Method not allowed! Please make a GET request!", 405, ['Access-Control-Allow-Methods' => 'GET']);
        }
        $model = BlendxHelpers::route_to_model($route);
        $api = BlendxHelpers::is_api($request);
        $entry = $model->path::with($model->blender->getRelations())->where('id', $id)->first();
        $entry_to_respond = $model->blender::format_entry($entry, $model);
        $res = BlendxHelpers::generate_response(false, $model->name.' with id ('.$id.')loaded!', [$entry_to_respond]);
        if($api){
            return response()->json($res, 200);
        }else{
            if(\auth('admin')->check()){
                $guardToUse = 'admin';
            }
            elseif(\auth('lawyer')->check()){
                $guardToUse = 'lawyer';
            }
            elseif(\auth('user')->check()){
                $guardToUse = 'user';
            }
            return  view( $guardToUse.'.'.$route.'.single',compact('entry_to_respond'));
        }

    }

    public static function delete(Request $request, $route, $id){
        if(!$request->isMethod('DELETE')){
            return response("Method not allowed! Please make a DELETE request!", 405, ['Access-Control-Allow-Methods' => 'DELETE']);
        }
        $model = BlendxHelpers::route_to_model($route);
        $entry = $model->path::findOrFail($id);
        $api = BlendxHelpers::is_api($request);
        try{
            $entry->delete();
            if($api) {
                $res = BlendxHelpers ::generate_response(false, 'Successfully deleted!', [$entry]);
                return response() -> json($res, 204);
            }else{
                return redirect()->back();
            }
        }catch (\Exception $error){
            $res = BlendxHelpers::generate_response(true, 'Could not delete!', [$error->getMessage()]);
            return response()->json($res, 500);
        }
    }

    public static function store(Request $request, $route){
        if(!$request->isMethod('POST')){
            return response("Method not allowed! Please make a POST request!", 405, ['Access-Control-Allow-Methods' => 'POST']);
        }

        $api = BlendxHelpers::is_api($request);
        $model = BlendxHelpers::route_to_model($route);
        $x = '';
        if($model->blender){
            $x = $model->blender::store_validator($route);

        }

        $validated = $request->validate($x);
            if(isset($validated['password'])){

                $hashPass = Hash::make($validated['password']);
                $validated['password'] = $hashPass;
            }
        $processed = $model->blender::after_validator($validated, $route, Auth::user());
//        dd($processed);
        try{
            $entry = $model->path::create($processed['updated']);
            $model->blender::after_created($entry, $processed);
            if($api) {
                $res = BlendxHelpers ::generate_response(false, 'Successfully created!', [$model -> blender ::format_entry($entry, $model)]);
                return response() -> json($res, 201);
            }else{
                if(\auth('admin')->check()){

                    $guardToUse = 'admin';
                }
                elseif(\auth('lawyer')->check()){
                    $guardToUse = 'lawyer';
                }
                elseif(\auth('user')->check()){
                    $guardToUse = 'user';
                }

                return  redirect($guardToUse.'/'.$route.'/index');
            }
        }catch (\Exception $error){
            $res = BlendxHelpers::generate_response(true, 'Could not create!', [$error->getMessage()]);
            return response()->json($res, 500);
        }
    }

    public static function update(Request $request, $route, $id){

        if(!$request->isMethod('PUT')){
            return response("Method not allowed! Please make a PUT request!", 405, ['Access-Control-Allow-Methods' => 'PUT']);
        }

        $model = BlendxHelpers::route_to_model($route);
        $api = BlendxHelpers::is_api($request);
        if($model->blender){
                $x = $model->blender::update_validator($route);
        }
        $validated = $request->validate($x);
        if(isset($validated['password'])){

            $hashPass = Hash::make($validated['password']);
            $validated['password'] = $hashPass;
        }
        $toCreate = $model->blender::after_validator($validated,$route);


        try{
            $entry = $model->path::findOrFail($id);

            $entry->update($toCreate['updated']);
            $model->blender::after_updated($entry,$toCreate);
            if($api){

                $res = BlendxHelpers::generate_response(false, 'Successfully updated!', [$entry]);
                return response()->json($res, 201);
            }else{
                if(\auth('admin')->check()){

                    $guardToUse = 'admin';
                }
                elseif(\auth('lawyer')->check()){
                    $guardToUse = 'lawyer';
                }
                elseif(\auth('user')->check()){
                    $guardToUse = 'user';
                }
                return  redirect($guardToUse.'/'.$route.'/index');
            }

        }catch (\Exception $error){
            $res = BlendxHelpers::generate_response(true, 'Could not update!', [$error->getMessage()]);
            return response()->json($res, 500);
        }
    }

    public function query(Request $request, $route){
        $model = BlendxHelpers::route_to_model($route);
        $api = BlendxHelpers::is_api($request);
        $request->replace($request->except('_token_'));
        $query = $request->all();
        $all = $model->path::with($model->blender->getRelations())->where($query)->get();
        $res = BlendxHelpers::generate_response(false, 'Query loaded!', $all );
        if($api){
            return response()->json($res, 200);
        }else{

            if(\auth('admin')->check()){
                $guardToUse = 'admin';
            }
            elseif(\auth('lawyer')->check()){
                $guardToUse = 'lawyer';
            }
            elseif(\auth('user')->check()){
                $guardToUse = 'user';
            }

                return  view( $guardToUse.'.'.$route.'.index',compact('all'));

        }
    }
}

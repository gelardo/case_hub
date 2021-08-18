<?php

namespace App\Blendx;

class   CaseIssuesLog extends Blender
{
    protected $relations = [
        'case_mains',
    ];
    public static function store_validator($route)
    {
        $custom_validator = [
            'file_name'=>'required',
        ];
        $store = parent::store_validator($route);
        $finale = array_merge($store,$custom_validator);
        return $finale;

    }
    public static function update_validator($route)
    {
        $custom_validator = [

        ];
//        $store = parent::update_validator($route);
//        $finale = array_merge($store,$custom_validator);
        return $custom_validator;
    }
}

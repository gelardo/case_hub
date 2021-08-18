<?php

namespace App\Blendx;

class Billing extends Blender
{
    protected $relations = [
        'districts',
        'case_types',
        'bill_types',
        'case_mains',
        'lawyers'
    ];
    public static function store_validator($route)
    {
        $custom_validator = [

        ];
        $store = parent::store_validator($route);
        $finale = array_merge($store,$custom_validator);
        return $finale;

    }
//    public static function after_validator($validated, $route, $user = null)
//    {
//        $custom
//        $after =  parent::after_validator($validated, $route, $user); // TODO: Change the autogenerated stub
//    }

    public static function update_validator($route)
    {
        $custom_validator = [

        ];
        $store = parent::update_validator($route);
        $finale = array_merge($store,$custom_validator);
        return $finale;
    }
}

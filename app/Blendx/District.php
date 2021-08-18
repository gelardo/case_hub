<?php

namespace App\Blendx;

class District extends  Blender
{
    protected $relations = ['police_stations','users','lawyers','case_mains'];
    public static function store_validator($route)
    {
        return parent::store_validator($route);
    }
    public static function update_validator($route)
    {
        return [
            'name'=>'required|string',
        ];
    }
}

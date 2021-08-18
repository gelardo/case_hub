<?php

namespace App\Blendx;

class PoliceStation  extends Blender{
    protected $relations = ['districts'];

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

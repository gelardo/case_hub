<?php

namespace App\Blendx;

class Court extends Blender
{
    public static function store_validator($route)
    {
        return parent::store_validator($route);
    }
    public static function update_validator()
    {
        return [
            'name'=>'required|string',
        ];
    }

}

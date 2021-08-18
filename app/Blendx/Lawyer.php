<?php

namespace App\Blendx;

class Lawyer  extends Blender{
    protected $relations = ['districts'];

    public static function store_validator($route)
    {
        return parent::store_validator($route);
    }
    public static function update_validator($route)
    {
        return parent::update_validator($route);

    }


}

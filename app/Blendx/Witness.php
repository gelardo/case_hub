<?php

namespace App\Blendx;

class Witness extends Blender
{
    public static function store_validator($route)
    {
        return parent::store_validator($route);
    }
}

<?php

namespace App\Blendx;

class AdditionalCourtOrder extends Blender{
    protected $relations = ['court_orders'];

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

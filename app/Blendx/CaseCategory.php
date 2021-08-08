<?php
namespace App\Blendx;
class CaseCategory extends Blender{
    protected $relations = [];

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
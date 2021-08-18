<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliceStation extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function districts(){
        return $this->belongsTo(District::class, 'district_id','id');
    }
    public function case_mains(){
        return $this->hasMany(CaseMain::class);
    }
}

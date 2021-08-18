<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Lawyer extends Authenticatable
{
    use HasFactory;
    protected $guard = 'lawyer';
    protected $guarded = [];
    public function districts(){
        return $this->belongsTo(District::class, 'district_id','id');
    }
    public function billings(){
        return $this->hasMany(Billing::class);
    }
}

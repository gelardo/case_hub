<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseType extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function billings(){
        return $this->hasMany(Billing::class);
    }
    public function case_mains(){
        return $this->hasMany(CaseMain::class);
    }
}

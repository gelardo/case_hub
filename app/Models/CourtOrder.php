<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourtOrder extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function additional_court_orders(){
        return $this->hasMany(AdditionalCourtOrder::class);
    }
    public function case_mains(){
        return $this->hasMany(CaseMain::class);
    }
}

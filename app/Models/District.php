<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function police_stations(){
        return $this->hasMany(PoliceStation::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
    public function lawyers(){
        return $this->hasMany(Lawyer::class);
    }
    public function case_mains(){
        return $this->hasMany(CaseMain::class);
    }
    public function dcmc_meetings(){
        return $this->hasMany(DcmcMeeting::class);
    }
    public function billings(){
        return $this->hasMany(Billing::class);
    }
}

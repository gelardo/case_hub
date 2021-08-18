<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseNature extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function case_mains(){
        return $this->hasMany(CaseMain::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseIssuesLog extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function case_mains(){
        return $this->belongsTo(CaseMain::class, 'case_main_id','id');
    }
}

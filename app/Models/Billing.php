<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function lawyers(){
        return $this->belongsTo(Lawyer::class, 'lawyer_id','id');
    }
    public function districts(){
        return $this->belongsTo(District::class, 'district_id','id');
    }
    public function case_types(){
        return $this->belongsTo(CaseType::class, 'case_type_id','id');
    }
    public function bill_types(){
        return $this->belongsTo(BillType::class, 'bill_type_id','id');
    }
    public function case_mains(){
        return $this->belongsTo(CaseMain::class, 'case_main_id','id');
    }
}

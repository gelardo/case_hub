<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseMain extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function billings(){
        return $this->hasMany(Billing::class);
    }
    public function case_issue_logs(){
        return $this->hasMany(CaseIssuesLog::class);
    }
    public function case_proceedings(){
        return $this->hasMany(CaseProceeding::class);
    }
    public function districts(){
        return $this->belongsTo(District::class, 'district_id','id');
    }
    public function witnesses(){
        return $this->belongsTo(Witness::class, 'witness_id','id');
    }
    public function case_categories(){
        return $this->belongsTo(CaseCategory::class, 'case_category_id','id');
    }
    public function case_natures(){
        return $this->belongsTo(CaseNature::class, 'case_nature_id','id');
    }
    public function programs(){
        return $this->belongsTo(Program::class, 'program_id','id');
    }
    public function regions(){
        return $this->belongsTo(Region::class, 'region_id','id');
    }
    public function police_stations(){
        return $this->belongsTo(PoliceStation::class, 'police_station_id','id');
    }
    public function courts(){
        return $this->belongsTo(Court::class, 'court_id','id');
    }
    public function case_statuses(){
        return $this->belongsTo(CaseStatus::class, 'case_status_id','id');
    }
    public function next_date_statuses(){
        return $this->belongsTo(CaseStatus::class, 'next_date_status','id');
    }
    public function court_orders(){
        return $this->belongsTo(CourtOrder::class, 'court_id','id');
    }
    public function additional_court_orders(){
        return $this->belongsTo(AdditionalCourtOrder::class, 'additional_court_order_id','id');
    }
    public function lawyers(){
        return $this->belongsTo(Lawyer::class, 'lawyer_id','id');
    }
    public function case_types(){
        return $this->belongsTo(CaseType::class, 'case_type_id','id');
    }
}

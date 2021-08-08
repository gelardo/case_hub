<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalCourtOrder extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function court_orders(){
        return $this->belongsTo(CourtOrder::class, 'court_order_id','id');
    }

}

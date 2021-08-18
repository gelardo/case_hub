<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillType extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function billings(){
        return $this->hasMany(Billing::class);
    }
}

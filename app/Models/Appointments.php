<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;
    protected $fillable=[

        'customer_id',
        'day',
        'from',
        'to',
        'status_id',
        'notes'	,
    ];
    function customer(){
        return $this->belongsTo(Customer::class);
    }
    function status(){
        return $this->belongsTo(AppointmentStatus::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appoitment extends Model
{

    protected $fillable = [
        'doctor_id',
        'patient_id',
        'appointment_date',
        'start_time',
        'end_time',
        'status',
    ];

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id')->where('role', 'doctor');
    }

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id')->where('role', 'paciente');
    }
}

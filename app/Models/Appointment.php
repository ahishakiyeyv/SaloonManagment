<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointment';
    protected $fillable = [
        'id_appoint_Appointment',
        'nom_Appointment',
        'mail_Appointment',
        'telephone_Appointment',
        'date_appoint_Appointment',
        'heure_appoint_Appointment',
        'service_Appointment',
        'status_Appointment'
    ];
}

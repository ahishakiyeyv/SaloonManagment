<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AccueilController extends Controller
{
    public function accueil()
    {
        return view('accueil.index');
    }
}

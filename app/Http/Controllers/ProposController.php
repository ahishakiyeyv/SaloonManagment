<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProposController extends Controller
{
    public function getpropos()
    {
        return view('propos.propos');
    }
}

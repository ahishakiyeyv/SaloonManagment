<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function dash()
    {
        return view('dashboard');
    }
}

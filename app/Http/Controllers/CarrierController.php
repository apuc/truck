<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrierController extends Controller
{
    public function showDashboard()
    {
        return view('carrier.dashboard');
    }
}

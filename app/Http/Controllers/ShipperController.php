<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShipperController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showDashboard()
    {
        return view('shipper.dashboard');
    }
}

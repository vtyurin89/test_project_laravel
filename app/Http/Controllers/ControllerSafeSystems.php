<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Stargate;

class ControllerSafeSystems extends Controller
{
    public function index() {
        $sttr = Stargate::all();
        dd($sttr);
    }
}

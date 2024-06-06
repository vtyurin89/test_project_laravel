<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSystem extends Controller
{
    public function index () {
        $res = "Дверные ручки для дверей ";
        for ($i=0; $i < 20000; $i++) {
            $res = $res . "Дверные ручки для дверей ";
        }
        return $res;
    }
}

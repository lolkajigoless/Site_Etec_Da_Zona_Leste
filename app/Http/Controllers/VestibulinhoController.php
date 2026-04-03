<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VestibulinhoController extends Controller
{
    public function inicio(){
        return view("vestibulinho");
    }
}

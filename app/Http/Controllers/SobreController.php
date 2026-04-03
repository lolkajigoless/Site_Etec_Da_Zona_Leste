<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function inicio(){

    $data = Carbon::now()->format('d/m/Y H:i:s');

    return view('sobre',[
        'data' => $data
    ]);
    }
}

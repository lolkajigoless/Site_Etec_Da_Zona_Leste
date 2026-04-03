<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class InicioController extends Controller
{
    public function inicio(){

    Carbon::setLocale('pt_BR');

    $evento_paulo_freire = Carbon::parse('2026-05-13');
    $evento_festa_nacoes = Carbon::parse('2026-06-20');
    $evento_festa_primavera = Carbon::parse('2026-09-19');
    $evento_feira_tecnologica = Carbon::parse('2026-11-26');


    $dias_paulofreire = (now()->diffInDays($evento_paulo_freire,false));
    $dias_nacoes = now()->diffInDays($evento_festa_nacoes,false);
    $dias_primavera = now()->diffInDays($evento_festa_primavera,false);
    $dias_feiraTec = now()->diffInDays($evento_feira_tecnologica,false);

    $dias_paulofreire = (int) $dias_paulofreire;
    $dias_nacoes = (int) $dias_nacoes;
    $dias_primavera = (int) $dias_primavera;
    $dias_feiraTec = (int) $dias_feiraTec;

    return view('welcome',compact('dias_paulofreire','dias_nacoes','dias_primavera','dias_feiraTec'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function inicio(){

        $Cursos_Tecnico = ['Administração', 'Contabilidade', 'Desenvolvimento de Sistemas', 'Finanças', 'Logística', 'Recursos Humanos', 'Serviços Jurídicos'];
        $Cursos_Mtec = ['Médio Técnico Administração', 'Médio Técnico Desenvolvimento de Sistemas', 'Médio Técnico Logística', 'Médio Técnico Recursos Humanos'];
        $Cursos_AMS = ['Médio Técnico Desenvolvimento de Sistemas AMS', 'Médio Técnico Recursos Humanos AMS'];
        $Cursos_AMS_descricao = "A modalidade AMS é exclusiva para o período da tarde!";

        return view("cursos", [
            'cursos_tec' => $Cursos_Tecnico,
            'cursos_mtec' => $Cursos_Mtec ,
            'cursos_ams' => $Cursos_AMS ,
            'descricao_ams' => $Cursos_AMS_descricao
        ]);
    }
}

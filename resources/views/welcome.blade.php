@extends('layout.base')

@section('title', 'Início')

@section('content')
    
<div class="max-w-5xl mx-auto leading-relaxed py-10">

    <div class="mb-16">
    <h1 class="text-4xl font-bold mb-3"> Bem-vindo ao site da Etec Da Zona Leste </h1>
    <h3 class="text-xl text-red-400 font-bold mb-4"> Formando profissionais para o futuro com ensino técnico de qualidade </h3>
    </div>

    <div class="flex flex-col md:flex-row gap-6 md:justify-between items-center">

        <div class="">
            <p class="font-bold text-xl text-center"> Sobre nós </p>
            <a href="/sobre">
            <button class="mt-4 rounded-4xl bg-gray-200 py-2 px-20 cursor-pointer hover:bg-red-300 transition">Sobre</button>
            </a>
        </div>
    
        <div class="">
            <p class="font-bold text-xl text-center"> Conheça nossos cursos </p>
            <a href="/cursos">
            <button class="mt-4 rounded-4xl bg-gray-200 py-2 px-20 cursor-pointer hover:bg-red-300 transition">Cursos</button>
            </a>
        </div>

        <div class="">
            <p class="font-bold text-xl text-center"> Matricule-se na nossa ETEC </p>
            <a href="/vestibular">
            <button class="mt-4 rounded-4xl bg-gray-200 py-2 px-20 cursor-pointer hover:bg-red-300 transition">Vestibulinho</button>
            </a>
        </div>

    </div>

    <div class="mt-20">

    <h1 class="text-3xl mb-10 font-black">Eventos</h1>

        <div class="text-2xl mb-5 font-semibold">
        <h1> <h1 class="underline inline">Semana Paulo Freire</h1>: dias 13,14 e 15 de Maio</h1> -
        @if($dias_paulofreire < 0)
        <h2 class="inline"><h1 class="inline text-red-500 text-4xl">Evento já aconteceu</h1></h2>
        @elseif($dias_paulofreire == 0)
        <h2 class="inline"><h1 class="inline text-red-500 text-4xl">Evento é HOJE</h1></h2>
        @else
        <h2 class="inline">Falta <h1 class="inline text-red-500 text-4xl">{{$dias_paulofreire}}</h1> dias para o evento</h2>
        @endif
        </div>

        <div class="text-2xl mb-5 font-semibold">
        <h1> <h1 class="underline inline">Dias das Nações</h1>: dia 20 de Junho</h1> -
        @if($dias_nacoes < 0)
        <h2 class="inline"><h1 class="inline text-red-500 text-4xl">Evento já aconteceu</h1></h2>
        @elseif($dias_nacoes == 0)
        <h2 class="inline"><h1 class="inline text-red-500 text-4xl">Evento é HOJE</h1></h2>
        @else
        <h2 class="inline">Falta <h1 class="inline text-red-500 text-4xl">{{$dias_nacoes}}</h1> dias para o evento</h2>
        @endif
        </div>

        <div class="text-2xl mb-5 font-semibold">
        <h1> <h1 class="underline inline">Festa da Primavera</h1>: dia 19 de Setembro</h1> -
        @if($dias_primavera < 0)
        <h2 class="inline"><h1 class="inline text-red-500 text-4xl">Evento já aconteceu</h1></h2>
        @elseif($dias_primavera == 0)
        <h2 class="inline"><h1 class="inline text-red-500 text-4xl">Evento é HOJE</h1></h2>
        @else
        <h2 class="inline">Falta <h1 class="inline text-red-500 text-4xl">{{$dias_primavera}}</h1> dias para o evento</h2>
        @endif
        </div>

        <div class="text-2xl font-semibold">
        <h1> <h1 class="underline inline">Feira Tecnológica</h1>: dias 26,27 e 28 de Novembro</h1> -
        @if($dias_feiraTec < 0)
        <h2 class="inline"><h1 class="inline text-red-500 text-4xl">Evento já aconteceu</h1></h2>
        @elseif($dias_feiraTec == 0)
        <h2 class="inline"><h1 class="inline text-red-500 text-4xl">Evento é HOJE</h1></h2>
        @else
        <h2 class="inline">Falta <h1 class="inline text-red-500 text-4xl">{{$dias_feiraTec}}</h1> dias para o evento</h2>
        @endif
        </div>

    </div>


</div>

@endsection

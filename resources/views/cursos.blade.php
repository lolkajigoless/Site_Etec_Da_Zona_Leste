@extends('layout.base')

@section('title', 'Cursos')

@section('content')

<div class="max-w-5xl font-bold mx-auto leading-relaxed">

<h1 class="text-3xl mb-10 font-black">Cursos Técnicos - Modalidade Presencial</h1>
<div class="mb-10 grid grid-cols-1 md:grid-cols-3 gap-5">
    @foreach($cursos_tec as $cursos)
        <div class="bg-yellow-100 border rounded-4xl text-center">
            <h1>{{ $cursos }}</h1>
        </div>
    @endforeach
        <a href="https://eteczonaleste.cps.sp.gov.br/tipo-curso-etec/cursos-tecnicos-modalidade-presencial/" target="_blank" class="mt-4 ml-4 text-purple-500 border text-center hover:underline">Ver mais →</a>
</div>

        <span class="block mx-auto h-1 w-1/2 bg-orange-100 rounded-full mb-10 mt-10"></span>

<h1 class="text-3xl mb-10 font-black" >Ensino Médio integrado ao técnico (M-Tec)</h1>
<div class="mb-10 grid grid-cols-1 md:grid-cols-3 gap-5">
    @foreach($cursos_mtec as $cursos)
        <div class="bg-yellow-100 border rounded-4xl text-center">
            <h1>{{ $cursos }}</h1>
        </div>
    @endforeach
        <a href="https://eteczonaleste.cps.sp.gov.br/tipo-curso-etec/ensino-medio-integrado-ao-tecnico-m-tec/" target="_blank" class="mt-4 ml-4 text-purple-500 border text-center hover:underline">Ver mais →</a>
</div>

        <span class="block mx-auto h-1 w-1/2 bg-orange-100 rounded-full mb-10 mt-10"></span>

<h1 class="text-3xl mb-10 font-black" >Articulação dos Ensinos Médio - Técnico e Superior (AMS)</h1>
<div class="mb-10 grid grid-cols-1 md:grid-cols-3 gap-5">
    @foreach($cursos_ams as $cursos)
        <div class="bg-yellow-100 border px-5 rounded-4xl text-center text-base">
            <h1>{{ $cursos }}</h1>
        </div>
    @endforeach
        <a href="https://eteczonaleste.cps.sp.gov.br/tipo-curso-etec/articulacao-dos-ensinos-medio-tecnico-e-superior-ams/" target="_blank" class="mt-4 ml-4 text-purple-500 border text-center hover:underline">Ver mais →</a>
</div>
<h1 class="text-red-600 font-extrabold">*{{ $descricao_ams }}</h1>

<div class="flex justify-center"> 
    <a href="/vestibular">
      <button class="w-full mt-10 rounded-4xl bg-[#239CDE] py-5 px-14 md:py-10 md:px-40 cursor-pointer hover:bg-blue-400 transition">Quer se matricular? entre aqui</button>
    </a> 
  </div>

</div>

@endsection
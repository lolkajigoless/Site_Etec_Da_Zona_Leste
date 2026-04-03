@extends('layout.base')

@section('title', 'Vestibulinho')

@section('content')

<div class="max-w-5xl font-bold mx-auto leading-relaxed">

    <div class="text-center mb-8">
        <h1 class="text-2xl text-[#0752AB] mb-1"> O Vestibulhinho das Escolas Técnicas Estaduais Ocorrem de Forma Semestral </h1>
    </div>

    <div>
        <p class="mb-4">
            O processo de vestibulinho na ETEC, segue um padrão definido pelo Centro Paula Souza.
            Primeiramente, é divulgado um edital contendo todas as informações essenciais,como datas,
            locais de prova, cursos oferecidos, requisitos de inscrição e documentação necessária.
        </p>

        <p class="mb-4">
            Os candidatos devem então se inscrever dentro do prazo estipulado,
            geralmente de forma online através do site oficial do vestibulinho da ETEC, e pagar uma taxa de inscrição conforme especificado no edital.  
        </p>
    </div>
    
    <div class="flex justify-center"> 
        <a href="https://vestibulinho.etec.sp.gov.br/home/">
            <button class="mt-4 mb-8 rounded-4xl bg-red-200 py-5 px-14 md:py-10 md:px-40 cursor-pointer hover:bg-red-400 transition">Inscreva-se</button>
        </a> 
    </div>

    <div class="text-center mb-8">
        <h1 class="text-2xl text-[#0752AB] mb-1"> A Prova </h1>
    </div>

    <div>
        <p class="mb-4">
            A prova do vestibulinho consiste em 50 questões de múltipla escolha, abrangendo várias áreas do conhecimento, incluindo Língua Portuguesa, Matemática, Ciências e questões específicas relacionadas ao curso técnico escolhido.
            Após a correção das provas, os resultados são divulgados dentro do prazo estabelecido, permitindo que os candidatos verifiquem sua pontuação e classificação.
            Os aprovados devem então proceder com a matrícula dentro do prazo estabelecido, seguindo as orientações fornecidas pela ETEC, o que inclui a apresentação de documentos e o preenchimento de formulários específicos. 
        </p>

        <p class="mb-8">
            É fundamental que você, candidato, esteja atento à modalidade de curso que escolheu, pois o Centro Paula Souza não assume responsabilidade por inscrições em cursos incorretos ou modalidades não desejadas.
            Certifique-se de selecionar cuidadosamente o curso e a modalidade desejados durante o processo de inscrição, garantindo assim uma participação adequada e de acordo com suas preferências e objetivos educacionais.  
        </p>
    </div>

    <div class="text-center mb-8">
        <h1 class="text-2xl text-[#0752AB] mb-1"> Informações Importantes sobre o exame do Vestibulinho ETEC </h1>
    </div>

    <div>
        <!-- 
        space -> É o prefixo da classe do Tailwind que indica espaçamento entre elementos filhos de um container
                 Não adiciona padding ou margin ao container, só cria espaço entre os filhos
        -->
       <ol class="list-decimal space-y-2">

        <li>
            A prova avalia conhecimentos nas principais matérias da Base Nacional Comum Curricular (BNCC) do Ensino Fundamental II,
            incluindo Linguagens (Língua Portuguesa), Matemática, Ciências Humanas (Geografia e História) e Ciências da Natureza;
        </li>

        <li> As questões não são separadas por disciplinas, podendo ser multidisciplinares ou específicas; </li>

        <li> Valores e ações que promovam uma sociedade mais humana, justa e sustentável são avaliados, exigindo atenção a temas atuais relacionados a esses tópicos; </li>

        <li>
            As questões abordam competências como interpretação de diversos tipos de texto, aplicação de conhecimentos do Ensino Fundamental para resolver problemas,
            análise crítica de argumentos, reconhecimento de diferentes formas de linguagem e avaliação de ações de acordo com critérios estabelecidos.
        </li>
       </ol>

    </div>

</div>

@endsection
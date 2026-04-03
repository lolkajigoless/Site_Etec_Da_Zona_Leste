@extends('layout.base')

@section('title', 'Sobre')

@section('content')

<!--
leading-relaxed -> Controla o espaçamento entre linhas do texto
leading = line-height
relaxed = espaçamento confortável;

mx-auto -> centraliza automaticamente na horizontal(auto).
-->
<div class="max-w-5xl mx-auto leading-relaxed">
  
  <div class="text-center mb-8">
    <h1 class="text-2xl text-[#0752AB] mb-1"> Nossa História </h1>
    <h2 class="text-xl text-[#D62020]"> 
      Conheça a Etec Zona Leste: Excelência em Educação<br>
      Técnica na Região da Zona Leste de São Paulo 
    </h2>
  </div>

  <div>

    <p class="mb-4">
      Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste se destaca como um importante polo educacional na região.
      Sua história remonta ao compromisso com a excelência educacional e o desenvolvimento profissional dos estudantes.
    </p>

    <p class="mb-4">
      Fundada em 2008, a Etec Zona Leste rapidamente se estabeleceu como uma instituição de referência no ensino técnico e tecnológico.
      Desde o início, sua missão foi proporcionar oportunidades de aprendizado que preparassem os alunos para os desafios do mercado de trabalho, além de incentivá-los a buscar a excelência acadêmica.
    </p>

    <p class="mb-4">
      Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações.
      Com uma equipe dedicada de professores e funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática, administração, eletrônica, entre outros, proporcionando aos alunos uma formação sólida e atualizada.
    </p>

    <p class="mb-6">
      Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos.
      Essas atividades complementam o currículo escolar, promovendo o desenvolvimento integral dos estudantes e estimulando o trabalho em equipe, a liderança e a criatividade. 
    </p>

    <!-- 
    # Essenciais para responsividade de imgs
    w-full → a imagem ocupa 100% da largura disponível
    max-w-2xl → limita o tamanho máximo
    ! Sem w-full, a imagem não encolhe direito no celular.
    -
    h-auto:
    Mantém a proporção da imagem
    Evita deformação 
    -->
    <img src="build/assets/Foto_Etec/2.png" alt="Foto_etec-1" class="h-auto w-full rounded-lg mx-auto max-w-2xl shadow-md">

  </div>

  <div class="mt-14">

    <div class="text-center mb-8">
      <h1 class="text-2xl text-[#D14164] mb-1"> O que a ETEC pode fazer pelo seu FUTURO ainda HOJE? </h1>
    </div>
  
    <p class="mb-6">
    Sabemos que às vezes pensar no futuro pode parecer assustador. Traçamos carreiras e planos profissionais a todo momento em nossos pensamentos, numa busca constante pelo caminho que nos trará o melhor.
    Mas saiba que a ETEC Zona Leste conhece os seus anseios e, está aqui, disposta a te apresentar um novo caminho! O futuro não precisa ser assustador.
    Suas habilidades técnicas e profissionais podem ser desenvolvidas enquanto você aprende com a gente. Em nossa instituição, nós valorizamos os pequenos passos.
    Dê o seu primeiro passo hoje em direção ao futuro. Faça parte da ETEC!
    </p>

    <img src="build/assets/Foto_Etec/evento.jpeg" alt="Foto_etec-evento" class="h-auto w-full rounded-lg mx-auto max-w-sm shadow-md">

  </div>

  <div class="mt-14">

  <div class="text-center mb-8">
    <h1 class="text-2xl text-[#D14164] mb-1"> Excelência Educacional </h1>
  </div>

  <p class="mb-6">
    Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima.
    Nossas aulas são ministradas por professores altamente qualificados, proporcionando 
    uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.
  </p>

  <img src="build/assets/Foto_Etec/3.png" alt="Foto_etec-3" class="h-auto w-full rounded-lg mx-auto max-w-2xl shadow-md">

  </div>

  <div class="mt-14">

  <div class="text-center mb-8">
    <h1 class="text-2xl text-[#D14164] mb-1"> Para Além da Sala de Aula </h1>
  </div>

  <p class="mb-6">
    Buscamos levar o conhecimento para além da sala de aula tradicional. Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira.
    Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil, oferecendo suporte abrangente, orientação vocacional e programas extracurriculares.
  </p>

  <img src="build/assets/Foto_Etec/alem.jpeg" alt="Foto_etec-alem" class="h-auto w-full rounded-lg mx-auto max-w-sm shadow-md">

  </div>

  <div class="mt-14 mb-20">

  <div class="text-center mb-8">
    <h1 class="text-2xl text-[#D14164] mb-1"> Ambientes Favoráveis </h1>
  </div>

  <p class="mb-6">
    Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores, notebooks, impressoras 3D e muitos outros componentes propícios aos projetos que desenvolvemos durante a jornada dos estudantes.
    Ademais, nossa instituição é envolta em um grande jardim, com árvores de pequeno e médio porte, plantas e flores, provendo ao nosso corpo estudantil um ambiente mais acolhedor e aconchegante.
    Na ETEC Zona Leste, você encontrará um espaço favorável para o impulsionar seu crescimento acadêmico e profissional.
  </p>

  <img src="build/assets/Foto_Etec/5.jpg" alt="Foto_etec-5" class="h-auto w-full rounded-lg mx-auto max-w-2xl shadow-md">

  </div>

  <div class="flex justify-center"> 
    <a href="/cursos">
      <button class="w-full mt-4 rounded-4xl bg-[#239CDE] py-5 px-20 md:py-10 md:px-40 cursor-pointer hover:bg-blue-400 transition">Veja nossos cursos</button>
    </a> 
  </div>

</div>

@endsection
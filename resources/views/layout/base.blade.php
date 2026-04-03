<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS do Laravel (Vite) -->
    @vite('resources/css/app.css')

    <link rel="shortcut icon" href="build/assets/favicon.ico" type="image/x-icon">

    <title>@yield('title')</title>
</head>

<!-- 

min-h-screen -> Faz o site(body) ocupar toda a altura da tela(screen)

flex-col -> define a direção dos itens internos como coluna (vertical), portanto, ao invés de:

| item 1 | item 2 | item 3 | (flex-row, o padrao)

é:

| item 1 |
| item 2 |
| item 3 |

-->
<body class="min-h-screen flex flex-col">

    <header class="bg-white text-black p-2 shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center p-4">

            <a href="/">
                <img src="build/assets/etec_zona_leste.png" alt="Etec-zona-leste_logo" class="h-16 md:h-20 w-auto">
            </a>

            <nav class="text-xl flex flex-col gap-6 md:flex-row md:gap-20">
                <a href="/" class="hover:underline">Início</a>
                <a href="/sobre" class="hover:underline">Sobre</a>
                <a href="/cursos" class="hover:underline">Cursos</a>
                <a href="/vestibular" class="hover:underline">Vestibulinho</a>
            </nav>

        </div>
    </header>

    <main class="m-16 flex-grow">
        @yield('content') <!-- é o espaço onde o conteúdo entra -->
    </main>

    <footer class="bg-red-500 text-white">
        <div class="flex flex-col gap-8 justify-center items-center md:flex-row md:gap-16 p-6">

            <div class="text-center md:text-left">
                <!-- 
                    block: "manda" o elemento a comecar em uma nova linha;
                    mb-2: margin-bottom.
                -->
                <b class="block mb-2">Etec da Zona Leste</b>
                <span>
                    Avenida Águia de Haia, 2.633 - Cidade AE Carvalho - São Paulo/SP<br>CEP: 03694-000
                </span>
            </div>

            <!-- mx-4: m = margin; x = esquerda + direita (horizontal)-->
            <span class="hidden md:block border-r-2 h-16 mx-4"></span>

            <div class="text-center md:text-left">
                <b class="block mb-2">Telefone:</b>
                <span>(11) 2045-4000 / 2045-4016</span>
            </div>

            <span class="hidden md:block border-r-2 h-16 mx-4"></span>

            <div class="text-center md:text-left">
                <b class="block mb-2">Horário de funcionamento:</b>
                <span>Seg. a Sex. das 09h às 21h</span>
            </div>

            <img src="build/assets/LOGO-SP-PT-SLOGAN-VERTICAL.png" alt="logo-sp" class="max-w-xs h-auto mt-4 md:mt-0">

        </div>
    </footer>

</body>
</html>
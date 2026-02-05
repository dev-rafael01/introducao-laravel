<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('titulo' , 'Meu Site!!')
    </title>
</head>
<body>
<header>
        <a href="{{ Route('home_page') }}">home</a> | 
        <a href="{{ Route('services_page') }}">Serviços</a> |
        <a href="{{ Route('contato_page') }}">Entre em contato</a>

</header>
    <hr>
    <main>
        @yield('conteudo')
    </main>
    <hr>
    <footer>
        @includeWhen($mostraRodape ?? false, 'footer')
    </footer>
</body>
</html>
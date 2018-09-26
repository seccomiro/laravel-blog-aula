<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Meu Blog - @yield('titulo')</title>
</head>
<body>
    <h1>Meu Blog - @yield('titulo')</h1>
    <h2>@yield('cabecalho')</h2>
    <nav>
        <a href="{{ url('/') }}">Voltar</a>
    </nav>
    <div>
        @yield('conteudo')
    </div>
</body>
</html>
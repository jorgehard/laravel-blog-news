<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cadastro de Produtos</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
    @component('navbar', ["current" => $current]) @endcomponent


    @hasSection ('body')
        @yield('body')
    @endif

    @component('footer', ["current" => $current]) @endcomponent

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    @hasSection ('javascript')
        @yield('javascript')
    @endif
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- bootstrap5 --}}
    @vite(['resources/js/app.js'])
    {{-- mudando o tema padrão do boostrap --}}
    <link rel="stylesheet" href="{{@asset('css/authentication.css')}}">

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

    {{-- PLUGIN JQUERY MASCARAS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="{{ @asset('jquery/forms/masks/mask.js') }}" defer></script>

    {{-- MUDA O TIPO DO INPUT TEXT DO PASSWORD --}}
    <script src="{{ @asset('jquery/forms/changePasswordInputType.js') }}" defer></script>

    {{-- stack serve para enviar algo para o head antes da pagina ser renderizada --}}
    @stack('scripts')
</head>

<body style="width: 100vw; min-height: 100vh">
    @yield('content')
</body>

</html>

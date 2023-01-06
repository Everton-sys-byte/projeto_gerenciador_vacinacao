<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- bootstrap5 --}}
    @vite(['resources/js/app.js'])

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

    {{-- PLUGIN JQUERY MASCARAS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="{{ @asset('jquery/forms/masks/mask.js') }}" defer></script>

    {{-- ESTILOS --}}
    <link rel="stylesheet" href="{{@asset('css/main.css')}}">
    @stack('style')

    {{-- SCRIPTS --}}
    @stack('scripts')
    <script src="{{@asset('jquery/sidebar/sidebar.js')}}" defer></script>
</head>

<body class="d-flex flex-direction-row vh-100">
    <x-Sidebar.Sidebar/>
    <main class="page px-1 bg-danger">
        <div class="burger-button relative d-flex flex-column justify-content-around" role="button">
            <div class="linha bg-primary rounded"></div>
            <div class="linha bg-primary rounded"></div>
            <div class="linha bg-primary rounded"></div>
        </div>
        @yield('content')
    </main>
</body>

</html>

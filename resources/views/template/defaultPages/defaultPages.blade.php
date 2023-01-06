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
    <script src="{{@asset('jquery/navbar/activeLi.js')}}" defer></script>
    @stack('scripts')
</head>

<body class="d-flex flex-direction-row p-1 vh-100">
    <x-Sidebar.Sidebar/>
    <main>
        @yield('content')
    </main>
</body>

</html>

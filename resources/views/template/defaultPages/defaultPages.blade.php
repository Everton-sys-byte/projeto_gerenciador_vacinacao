<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- bootstrap5 --}}
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{@asset('css/bootstrap.css')}}">

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
    <script src="{{@asset('jquery/pages/home_animations.js')}}" defer></script>
    <script src="{{@asset('jquery/cards/btn_excluir.js')}}" defer></script>
    <script src="{{@asset('jquery/sidebar/sidebar.js')}}" defer></script>
    <script src="{{@asset('jquery/apis/via_cep.js')}}" defer></script>
    <script src="{{@asset('jquery/forms/changeRoleSelect.js')}}" defer></script>
    <script src="{{@asset('jquery/modal/passDataToModal.js')}}" defer></script>
</head>

<body>
    <x-header.header/>
    <x-SideBar.SideBar/>
    <main class="page w-100 min-vh-100" id="page">
        @yield('content')
    </main>
    <x-footer.footer/>
</body>

</html>

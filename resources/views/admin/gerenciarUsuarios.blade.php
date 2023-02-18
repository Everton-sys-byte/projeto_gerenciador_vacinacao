@extends('template.defaultPages.defaultPages')
@section('title', 'Gerenciar Usuarios')
@section('content')
    <div class="information container-fluid px-5">
        <x-titles.default-title title="Gerenciar Usuários" class="text-center" />

        {{-- BUTTON PARA CHAMAR O MODAL DE CRIAR USUÁRIO --}}
        <button class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#criarUsuario">Criar usuario</button>

        {{-- ALERT --}}
        @include('template.defaultSessionAlert.alert')

        {{-- TABLE --}}
        @include('template.tables.gerenciarUsuarios')
            <table class="table">
                <thead>
            
    
    </div>


    {{-- MODAIS --}}
    @can('criar-usuario' /* || 'editar-usuario' */)
        @include('admin.modais.user.createUser')
        @include('admin.modais.user.editUser')
    @endcan
    @include('admin.modais.user.moreInformation')
@endsection

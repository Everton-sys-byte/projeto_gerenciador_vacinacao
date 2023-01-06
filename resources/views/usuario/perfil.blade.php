@extends('template.defaultPages.defaultPages')
@section('title','Perfil')

@section('content')
    <div class="information container-fluid">
        <header class="text-center fs-1">Perfil</header>
        {{auth()->user()->cpf}}
        {{auth()->user()->email}}
        {{auth()->user()->data_nascimento}}
        {{auth()->user()->celular}}
    </div>
@endsection
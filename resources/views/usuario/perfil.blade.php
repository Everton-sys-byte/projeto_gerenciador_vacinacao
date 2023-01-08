@extends('template.defaultPages.defaultPages')
@section('title','Perfil')

@section('content')
    <div class="information container-fluid">
        <x-titles.default-title title="Perfil"/>
        {{auth()->user()->cpf}}
        {{auth()->user()->email}}
        {{auth()->user()->getDataNascimento()}}
        {{auth()->user()->celular}}
    </div>
@endsection
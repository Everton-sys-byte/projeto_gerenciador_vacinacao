@extends('template.defaultPages.defaultPages')
@section('title','home')

@section('content')
    <div class="information container-fluid">
        <span class="boas-vindas text-center fs-1 d-block">
            <p>Bem vindo de volta, {{auth()->user()->nome_completo}} </p>
        </span>
    </div>
@endsection
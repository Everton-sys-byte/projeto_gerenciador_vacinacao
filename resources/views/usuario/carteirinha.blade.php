@extends('template.defaultPages.defaultPages')
@section('title', 'Carteinha')
@section('content')
    <div class="information container-fluid px-1 px-lg-5">
        <x-titles.default-title title="Vacinas tomadas" class="text-center"/>
        <x-list-group.list-group>
            @foreach($registros as $registro)
                @include('template.cards.registro.cardRegistro')
            @endforeach
        </x-list-group.list-group>
    </div>
@endsection
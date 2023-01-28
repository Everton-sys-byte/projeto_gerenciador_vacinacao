@extends('template.defaultPages.defaultPages')
@section('title', 'Carteinha')
@section('content')
    <div class="information container-fluid">
        <x-titles.default-title title="Vacinas tomadas"/>
        <x-list-group.list-group>
            @foreach($registros as $registro)
                @include('template.cards.registro.cardRegistro')
            @endforeach
        </x-list-group.list-group>
    </div>
@endsection
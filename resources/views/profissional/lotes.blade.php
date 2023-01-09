@extends('template.defaultPages.defaultPages')
@section('title', 'Lotes')
@section('content')
    <div class="information container-fluid">
        <x-titles.default-title title="Lotes disponíveis" />
        <x-list-group.list-group type="Lote">
            @foreach ($lotes as $lote)
                <x-card.card cardId="$lote->id" cardType="Lote" :cardSubTitle="$lote->codigo" :cardInformation="$lote->tecnologia" />
            @endforeach
        </x-list-group.list-group>
    </div>
@endsection

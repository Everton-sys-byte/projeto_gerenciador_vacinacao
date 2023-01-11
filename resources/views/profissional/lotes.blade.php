@extends('template.defaultPages.defaultPages')
@section('title', 'Lotes')
@section('content')
    <div class="information container-fluid">
        <x-titles.default-title title="Lotes disponíveis" />
        <x-list-group.list-group>
            @foreach ($lotes as $lote)
                <x-card.card cardId="$lote->id" cardTitle="Lote" :cardSubTitle="$lote->codigo">

                </x-card.card>
            @endforeach
        </x-list-group.list-group>
    </div>
@endsection

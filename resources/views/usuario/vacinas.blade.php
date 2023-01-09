@extends('template.defaultPages.defaultPages')
@section('title', 'vacinas disponíveis')

@section('content')
    <div class="information container-fluid">
        <x-titles.default-title title="Vacinas Disponíveis" />
        <x-list-group.list-group type="Vacina">
            @foreach ($vacinas as $vacina)
                <x-card.card :cardId="$vacina->id" cardType="Vacina" :cardSubTitle="$vacina->nome" :cardInformation="$vacina->descricao" />
            @endforeach
        </x-list-group.list-group>
    </div>
@endsection

@extends('template.defaultPages.defaultPages')
@section('title', 'vacinas disponíveis')

@section('content')
    <div class="information container-fluid">
        <x-titles.default-title title="Vacinas Disponíveis" />
        <x-list-group.list-group>
            @foreach ($vacinas as $vacina)
                <x-card.card :cardId="$vacina->id" cardTitle="Vacina" :cardSubTitle="$vacina->nome">
                    {{$vacina->descricao}}
                </x-card.card>
            @endforeach
        </x-list-group.list-group>
    </div>
@endsection

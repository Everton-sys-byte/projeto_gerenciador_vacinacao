@extends('template.defaultPages.defaultPages')
@section('title','vacinas disponíveis')

@section('content')
    <div class="information container-fluid">
        <x-titles.default-title title="Vacinas Disponíveis"/>
        <x-list-group.list-group type="Vacinas" :itens="$vacinas" />
    </div>
@endsection 


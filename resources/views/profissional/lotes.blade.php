@extends('template.defaultPages.defaultPages')
@section('title', 'Lotes')
@section('content')
    <div class="information container-fluid">
        <x-titles.default-title title="Lotes disponíveis" />
        <div class="nav-wrapper container-fluid p-0 fs-4">
            <a href="{{ @route('vaccines.available') }}" class="text-decoration-none">Vacinas disponíveis</a>
            <img src="{{ @asset('images/svgs/list/chevron.svg') }}" alt="Chevron">
            <a href="#">Lotes</a>
        </div>

        @if (session()->get('role') == 'profissional')
            @can('adicionar-vacina')
                <button class="btn btn-primary my-3" role="button" data-bs-toggle="modal" data-bs-target="#criarLote">Registrar
                    Lotes </button>
            @endcan
        @endif

        {{-- DEFAULT ALERT --}}
        @include('template.defaultSessionAlert.alert')

        <x-list-group.list-group>
            @foreach ($lotes as $lote)
                {{-- CARD DOS LOTES --}}
                @include('template.cards.lote.cardLote')
            @endforeach
        </x-list-group.list-group>
    </div>

    @if (session()->get('role') == 'profissional')
        @can('adicionar-lote')
            @include('profissional.modais.lotes.createLote')
            @include('profissional.modais.lotes.editLote')
        @endcan
    @endif
    @if (session()->get('role') == 'admin')
        @can('excluir-lote')
            @include('admin.modais.lotes.deleteLote')
        @endcan
    @endif

@endsection

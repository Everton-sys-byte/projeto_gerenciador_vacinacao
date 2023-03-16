<x-card.card cardType="lote" cardTitle="Lote" :cardSubTitle="$lote->codigo">
    <x-slot name="card_information">
        <div class="tecnologia"><strong>Tecnologia: </strong> {{ $lote->tecnologia }}</div>
        <div class="quantidade"><strong>Quantidade: </strong>{{ $lote->quantidade }}</div>
        <div class="data_vencimento"><strong>Data de vencimento: </strong>{{ $lote->getDataVencimento() }}</div>
        <div class="status"><strong>Status: </strong>{{ $lote->status }}</div>
    </x-slot>

    <x-slot name="card_buttons">
        @if (session()->get('role') == 'profissional')
            @can('editar-lote')
                <button class="btn btn-success" lote="{{ $lote }}" role="button" data-bs-toggle="modal"
                    data-bs-target="#editarLote">Editar lote</button>
            @endcan
        @endif

        @if (session()->get('role') == 'admin')
            @can('excluir-lote')
                <x-button-message.btn-mensagem 
                    :contador="$lote->registros()->count()"
                    :identificador="$lote->id" 
                    :nome="$lote->codigo" 
                    mensagem="Lote possui registros atrelados a ele"
                    tipo="lote"/>
            @endcan
        @endif
    </x-slot>
</x-card.card>

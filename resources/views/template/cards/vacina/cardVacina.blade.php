<x-card.card cardType="vacina" cardTitle="Vacina" :cardSubTitle="$vacina->nome">
    <x-slot name="card_information">
        <div class="laboratorio"><strong>Laboratório: </strong> {{ $vacina->laboratorio }}</div>
        <div class="descricao"><strong>Descrição: </strong>{{ $vacina->descricao }}</div>
    </x-slot>

    <x-slot name="card_buttons">
        <a href="{{ @route('batch.available', ['vacina' => $vacina->id]) }}" class="btn btn-primary">Ver
            lotes</a>

        @if (session()->get('role') == 'profissional')
            @can('editar-vacina')
                <button class="btn btn-success" vacina="{{ $vacina }}" role="button"
                    data-bs-toggle="modal" data-bs-target="#editarVacina">Editar vacina</button>
            @endcan
        @endif

        @if (session()->get('role') == 'admin')
            @can('excluir-vacina')
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#excluirVacina"
                    vacina_id="{{ $vacina->id }}" vacina_nome="{{ $vacina->nome }}">Excluir</button>
            @endcan
        @endif
    </x-slot>
</x-card.card>
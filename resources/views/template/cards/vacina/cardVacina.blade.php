<x-card.card cardType="vacina" cardTitle="Vacina" :cardSubTitle="$vacina->nome">
    <x-slot name="card_information">
        <div class="laboratorio"><strong>Laboratório: </strong> {{ $vacina->laboratorio }}</div>
        <div class="descricao"><strong>Descrição: </strong> {{ $vacina->descricao }}</div>
        <div class="idade-minima"><strong>Idade minima de aplicação: </strong>
            @if (!$vacina->idade_minima)
                N/A
            @else
                {{ $vacina->idade_minima }} anos
            @endif
        </div>
    </x-slot>

    <x-slot name="card_buttons">
        @if (session()->get('role') != 'comum')
            <a href="{{ @route('batch.available', ['vacina' => $vacina->id]) }}" class="btn btn-primary">Ver
                lotes</a>

            @can('editar-vacina')
                <button class="btn btn-success" vacina="{{ $vacina }}" role="button" data-bs-toggle="modal"
                    data-bs-target="#editarVacina">Editar vacina</button>
            @endcan

            @if (session()->get('role') == 'admin')
                @can('excluir-vacina')
                    <x-button-message.btn-mensagem :contador="$vacina->lotes()->count()" mensagem="Vacina possui lotes atrelados a ela"
                        :identificador="$vacina->id" :nome="$vacina->nome" tipo="vacina" />
                @endcan
            @endif
        @endif
    </x-slot>
</x-card.card>

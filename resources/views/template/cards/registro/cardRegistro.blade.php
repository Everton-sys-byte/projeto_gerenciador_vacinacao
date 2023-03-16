<x-card.card cardType="registro" cardTitle="Registro" :cardSubTitle="$registro->lote->vacina->nome">
    <x-slot name="card_information">
        {{-- @dd($registro->toArray()) --}}
        <div class="lote"><strong>Lote: </strong> {{ $registro->lote->codigo }}</div>
        <div class="data_vacinacao"><strong>Data de vacinação: </strong> {{ $registro->dataVacinacao() }}</div>
        <div class="cod-profissional"><strong>Profissional CNS: </strong> {{$registro->profissional->cns}}</div>
    </x-slot>

    <x-slot name="card_buttons">
        <a href="{{@route('user.register.more.information',['registro' => $registro->uuid])}}" class="btn btn-primary">Mais informações</a>
    </x-slot>
</x-card.card>

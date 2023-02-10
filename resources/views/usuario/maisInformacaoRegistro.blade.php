@extends('template.defaultPages.defaultPages')
@section('title', 'Mais informações')

@section('content')
    <div class="information container-fluid px-5">
        <x-titles.default-title title="Mais informações" />
        {{-- HORIZONTAL NAV BAR --}}
        @include('template.horizontalNavBar.registro_maisInformacao')
        <div class="more-information d-flex flex-column flex-md-row gap-2">
            <div class="vaccination-information d-flex flex-column gap-2" style="width: 80%">
                <div class="vacina d-flex flex-column rounded shadow-lg py-2">
                    <h5>Informações da vacina</h5>
                    <span><strong>Nome:</strong> {{ $registro->lote->vacina->nome }}</span>
                    <span><strong>Laboratório:</strong> {{ $registro->lote->vacina->laboratorio }}</span>
                    <span><strong>Idade minima:</strong> {{ $registro->lote->vacina->idade_minima }} anos</span>
                </div>
                <div class="lote d-flex flex-column rounded bg-light shadow-lg py-2">
                    <h5>Informações do lote</h5>
                    <span><strong>Código:</strong> {{ $registro->lote->codigo }}</span>
                    <span><strong>Tecnologia:</strong> {{ $registro->lote->tecnologia }}</span>
                </div>
                <div class="lote d-flex flex-column rounded bg-light shadow-lg py-2">
                    <h5>Informações da vacinação</h5>
                    <span><strong>Data de vacinação:</strong> {{ $registro->dataVacinacao() }}</span>
                    <span><strong>CNES:</strong> {{ $registro->CNES }}</span>
                    @if ($enderecoEstabelecimento)
                        <div class="endereco my-2 d-flex flex-column">
                            <h5>Endereço</h5>
                            <span><strong>Local:</strong> {{ $enderecoEstabelecimento['nome_fantasia'] }}</span>
                            <span><strong>CEP:</strong> {{ $enderecoEstabelecimento['codigo_cep_estabelecimento'] }}</span>
                            <span><strong>Bairro:</strong> {{ $enderecoEstabelecimento['bairro_estabelecimento'] }}</span>
                            <span><strong>Logradouro:</strong> {{ $enderecoEstabelecimento['endereco_estabelecimento'] }}</span>
                            <span><strong>Numero:</strong> {{ $enderecoEstabelecimento['numero_estabelecimento'] }}</span>
                            <span><strong>Telefone:</strong> {{ $enderecoEstabelecimento['numero_telefone_estabelecimento'] }}</span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="profissional-information d-flex flex-column rounded bg-light shadow-lg p-2 gap-2" style="height: 50%">
                <h5>Informações do profissional</h5>
                <img class="rounded-circle mx-auto" src="/images/avatar/{{ $registro->profissional->avatar }}"
                    width="100px" height="100px" />
                <span><strong>Nome completo:</strong> {{ $registro->profissional->nome_completo }}</span>
                <span><strong>CNS:</strong> {{ $registro->profissional->cns }}</span>
            </div>
        </div>
    </div>
@endsection

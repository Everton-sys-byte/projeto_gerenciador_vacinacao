@extends('template.defaultPages.defaultPages')
@section('title', 'Perfil')

@section('content')
    <div class="information profile container-fluid px-1 px-lg-5">
        <x-titles.default-title title="Perfil" class="text-center" />
        @include('template.horizontalNavBar.perfil_configurar')
        <div class="row mt-3">
            <div class="col-lg-2">
                <img src="/images/avatar/{{ auth()->user()->avatar }}" alt="userAvatar" class="rounded img-fluid" />
            </div>
            <div class="col">
                <div class="wrapper">
                    <div class="user-information mb-1 ps-1">
                        <span class="fs-3 d-block">Informações Pessoais</span>
                        <div class="nome_completo"><strong>Nome completo:</strong> {{ auth()->user()->nome_completo }}</div>
                        <div class="cpf"><strong>CPF: </strong>{{ auth()->user()->cpf }}</div>
                        <div class="email"><strong>Email:</strong> {{ auth()->user()->email }}</div>
                        <div class="data_nascimento"><strong>Data de nascimento:
                            </strong>{{ auth()->user()->getDataNascimento() }}
                        </div>
                        <div class="celular"><strong>Celular: </strong>{{ auth()->user()->celular }}</div>
                    </div>
                    @if (!is_null(auth()->user()->endereco))
                        <div class="user-address mb-1 ps-1">
                            <span class="fs-3 d-block">Endereço</span>
                            <div class="cep"><strong>CEP: </strong>{{ auth()->user()->endereco->cep->cep }}</div>
                            <div class="estado"><strong>Estado: </strong>{{ auth()->user()->endereco->cep->uf }}</div>
                            <div class="cidade"><strong>Cidade: </strong>{{ auth()->user()->endereco->cep->cidade }}</div>
                            <div class="bairro"><strong>Bairro: </strong>{{ auth()->user()->endereco->cep->bairro }}</div>
                            <div class="logradouro"><strong>Logradouro:
                                </strong>{{ auth()->user()->endereco->cep->logradouro }}</div>
                            <div class="numero"><strong>Numero: </strong>{{ auth()->user()->endereco->numero }}</div>
                            <div class="complemento"><strong>Complemento:
                                </strong>{{ auth()->user()->endereco->complemento }}
                            </div>
                        </div>
                    @endif
                    <div class="user-permissions ps-1">
                        <span class="fs-3 d-block">Permissões no sistema</span>
                        @foreach (auth()->user()->roles()->get() as $role)
                            <div class="{{ $role->tipo }}">{{ $role->tipo }}</div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

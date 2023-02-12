@extends('template.defaultPages.defaultPages')
@section('title', 'Gerenciar Usuarios')
@section('content')
    <div class="information container-fluid px-5">
        <x-titles.default-title title="Gerenciar Usuários" class="text-center" />
        <button class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#criarUsuario">Criar usuario</button>
        @include('template.defaultSessionAlert.alert')
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Avatar</th>
                    <th>CPF</th>
                    <th>Nome Completo</th>
                    <th>Data de nascimento</th>
                    <th>Papéis</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $contador = 1;
                @endphp
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $contador }}</td>
                        <td><img src="/images/avatar/{{ $user->avatar }}" alt="Avatar usuario" width="40" height="40"
                                class="rounded-circle">
                        <td>{{ $user->cpf }}</td>
                        <td>{{ $user->nome_completo }}</td>
                        <td>{{ $user->getDataNascimento() }}</td>
                        <td>
                            <ul class="list-unstyled">
                                @foreach ($user->roles()->get() as $role)
                                    <li> {{ $role->tipo }} </li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{ $user->status }}</td>
                        <td>
                            <div>
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="/images/svgs/dropdown/threedots.svg" alt="Tres pontinhos">
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#maisInformacoes" user="{{ $user }}">
                                            Mais informações</a></li>
                                    @if (!$user->hasRole('admin'))
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#editUser" user="{{ $user }}">Editar</a></li>
                                    @endif
                                </ul>
                            </div>
                        </td>
                    </tr>

                    @php
                        $contador++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>

    @can('criar-usuario'/*  || 'editar-usuario' */)
        @include('admin.modais.user.createUser')
        @include('admin.modais.user.editUser')
    @endcan
    @include('admin.modais.user.moreInformation')
@endsection

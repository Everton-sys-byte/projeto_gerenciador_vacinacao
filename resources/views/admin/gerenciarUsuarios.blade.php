@extends('template.defaultPages.defaultPages')
@section('title', 'Gerenciar Usuarios')
@section('content')
    <div class="information container-fluid">
        <x-titles.default-title title="Gerenciar Usuários" />
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#criarUsuario">Criar usuario</button>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Avatar</th>
                    <th>CPF</th>
                    <th>Nome Completo</th>
                    <th>Data de nascimento</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><img src="/images/avatar/{{ $user->avatar }}" alt="Avatar usuario" width="40" height="40"
                                class="rounded-circle">
                        <td>{{ $user->cpf }}</td>
                        <td>{{ $user->nome_completo }}</td>
                        <td>{{ $user->getDataNascimento() }}</td>
                        <td>{{ $user->status }}</td>
                        <td>
                            <div>
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="/images/svgs/dropdown/threedots.svg" alt="Tres pontinhos">
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Mais informações</a></li>
                                    <li><a class="dropdown-item" href="#">Editar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('admin.modais.createUser')
@endsection

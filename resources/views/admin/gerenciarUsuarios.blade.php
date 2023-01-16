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
                                    <li><a class="dropdown-item" href="#">Editar</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <x-Modal.Modal modalFormId="adminCreateUser" modalId="criarUsuario" modalTitle="Criar novo usuário" modalType="criar">
        <x-form.default-form formId="adminCreateUser" formAction="{{ @route('admin.create.user') }}" formMethod="POST">
            <x-form.form-group label_name="Nome Completo" inputType="text" inputName="nome_completo" />
            <x-form.form-group label_name="CPF" inputType="text" inputName="cpf" />
            <x-form.form-group label_name="Email" inputType="email" inputName="email" />
            <div class="form-group">
                <select name="role" id="role" class="form-select @error('role') is-invalid @enderror">
                    <option value="">Selecione o tipo de conta que deseja criar</option>
                    <option value="comum">Comum</option>
                    <option value="profissional">Profissional</option>
                </select>
                @error('role')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <x-form.form-group label_name="CNS" inputType="text" inputName="cns" class="cns d-none" />
            <x-form.form-group label_name="Celular" inputType="text" inputName="celular" />
            <x-form.form-group label_name="Data de nascimento" inputType="date" inputName="data_nascimento" />
            <x-form.form-group label_name="Senha" inputType="password" inputName="password" />
        </x-form.default-form>
    </x-Modal.Modal>
@endsection

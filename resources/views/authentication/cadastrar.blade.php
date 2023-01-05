@extends('template.defaultForms.defaultForms')
@section('title', 'efetuar cadastro')

@section('content')
    <div class="page container-fluid p-3 d-flex justify-content-center align-items-center"
        style="width:100%; height:100vh; background: var(--bs-blue); background-size: 100px 50px;">
        <form action="{{ @route('user.cadastrar') }}" method="POST"
            class="bg-white py-3 px-4 rounded shadow-lg d-flex flex-column justify-content-center gap-3"
            style="min-width: 450px;">
            @csrf
            <div class="form-group">
                <label for="nome_completo">Nome completo</label>
                <input type="text" class="form-control" name="nome_completo" id="nome_completo">
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" name="celular" id="celular">
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de nascimento</label>
                <input type="date" class="form-control" name="data_nascimento" id="data_nascimento">
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="form-group col">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-group col">
                    <label for="c_password">Confirmar senha</label>
                    <input type="password" class="form-control" name="c_password" id="c_password  ">
                </div>
            </div>
            <div class="form-group">
                <input type="checkbox" class="check_password">
                Mostrar senha
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
            <a href="{{ @route('logar') }}" class="btn btn-danger">Voltar</a>
        </form>
    </div>
@endsection

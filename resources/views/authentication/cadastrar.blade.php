@extends('template.defaultForms.defaultForms')
@section('title', 'efetuar cadastro')

@section('content')
    <div class="page container-fluid p-3 d-flex justify-content-center align-items-center"
        style="width:100%; height:100vh; background: var(--bs-blue); background-size: 100px 50px;">
        <form action="{{ @route('user.cadastrar') }}" method="POST"
            class="bg-white py-2 px-4 rounded shadow-lg d-flex flex-column justify-content-center gap-2"
            style="min-width: 450px;">
            @csrf
            <div class="form-group">
                <label for="nome_completo">Nome completo</label>
                <input type="text" class="form-control @error('nome_completo') is-invalid  @enderror" name="nome_completo"
                    id="nome_completo" value="{{ @old('nome_completo') }}">
                @error('nome_completo')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" id="cpf"
                    value="{{ @old('cpf') }}">
                {{-- MELHOR FORMA DE FAZER (SE ESTÁ DENTRO DE @ERROR posso imprimir só a message do error) --}}
                @error('cpf')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid  @enderror" name="email"
                    id="email" value="{{ @old('email') }}">
                @error('email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" class="form-control @error('celular') is-invalid @enderror" name="celular"
                    id="celular" value="{{ @old('celular') }}">
                @error('celular')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de nascimento</label>
                <input type="date" class="form-control @error('data_nascimento') is-invalid @enderror"
                    name="data_nascimento" id="data_nascimento">
                @error('data_nascimento')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="form-group col">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password"
                        class="form-control @if ($errors->has('password') || $errors->has('c_password')) is-invalid @endif">
                </div>
                <div class="form-group col">
                    <label for="c_password">Confirmar senha</label>
                    <input type="password" name="c_password" id="c_password"
                        class="form-control @if ($errors->has('password') || $errors->has('c_password')) is-invalid @endif">
                </div>
            </div>
            <div class="container-fluid d-flex flex-column p-0">
                @error('password')
                    <span class="text-danger col">
                        {{ $message }}
                    </span>
                @enderror
                @error('c_password')
                    <span class="text-danger col">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="checkbox" class="check_password">
                Mostrar senha
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
            <a href="{{ @route('logar') }}" class="btn btn-danger">Voltar</a>
        </form>

        @if (Session::has('message'))
            <x-toast.toast title="Sucesso" info="conta cadastrada com sucesso" type="success" />
        @elseif($errors->any())
            <x-toast.toast title="Erro" info="Não foi possível cadastrar sua conta" type="error" />
        @endif
    </div>
@endsection

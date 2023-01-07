@extends('template.defaultForms.defaultForms')
@section('title', 'efetuar login')

@section('content')
    <div class="page container-fluid p-3 d-flex justify-content-center align-items-center"
        style="width:100%; height:100vh; background: var(--bs-blue); background-size: 100px 50px;">
        <form action="{{ @route('user.autenticar') }}" method="POST"
            class="bg-white py-3 px-4 rounded shadow-lg d-flex flex-column justify-content-center gap-3"
            style="min-width: 300px;">
            @csrf
            <div class="form-group">
                <label for="roles">Selecione o tipo de usuario</label>
                <x-input.select name="role" :options="$roles" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ @old('email') }}">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="Senha">Senha</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <input type="submit" class="btn btn-primary" value="Logar">
            <p>Não tem conta?&nbsp;<a href="{{ @route('cadastrar') }}" class="text-decoration-none">cadastre-se</a>
        </form>

        @if (Session::has('credentials'))
            <x-toast.toast title="Credencias" info="{{session('credentials')}}" type="error" />
        @elseif($errors->any())
            <x-toast.toast title="Erro" info="Não foi possível realizar o login" type="error" />
        @elseif(Session::has('permission'))
            <x-toast.toast title="Permissão" info="{{session('permission')}}" type="error" />
        @endif
    </div>
@endsection

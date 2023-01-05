@extends('template.defaultForms.defaultForms')
@section('title', 'efetuar login')

@section('content')
    <div class="page container-fluid p-3 d-flex justify-content-center align-items-center"
        style="width:100%; height:100vh; background: var(--bs-blue); background-size: 100px 50px;">
        <form action="" class="bg-white py-3 px-4 rounded shadow-lg d-flex flex-column justify-content-center gap-3" 
        style="min-width: 300px;">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="Senha">Senha</label>
                <input type="password" class="form-control">
            </div>
            <input type="submit" class="btn btn-primary" value="Logar">
            <p>Não tem conta?&nbsp;<a href="{{@route('cadastrar')}}" class="text-decoration-none">cadastre-se</a>
        </form>
        
        @if (Session::has('message'))
            <x-toast.toast title="Sucesso" info="conta cadastrada com sucesso" type="success" />
        @elseif($errors->any())
            <x-toast.toast title="Credencias inválidas" info="Não foi possível realizar o login" type="error" />
        @endif
    </div>
@endsection

@extends('template.defaultPages.defaultPages')
@section('title', 'Configurar Perfil')

@section('content')
    <div class="information container-fluid p-0">
        <x-titles.default-title title="Configurar Perfil" />
        <x-form.default-form action="{{@route('user.update.profile')}}" method="POST">
            <input type="text" name="nome_completo" id="nome_completo">
            <input type="submit" value="Atualizar">
        </x-form.default-form>
    </div>
@endsection

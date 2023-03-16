@extends('template.defaultForms.defaultForms')
@section('title', 'resetar senha')

@section('content')
    <div class="page container-fluid p-3 d-flex justify-content-center align-items-center"
        style="width:100%; height:100vh; background: var(--bs-blue); background-size: 100px 50px;">

        <x-form.default-form formAction="{{ @route('recover.account') }}" formMethod="POST" class="py-3 px-4"
            style="min-width: 300px; max-width: 500px">
            {{-- DEFAULT ALERT --}}
            @include('template.defaultSessionAlert.alert')
            <article>
                Por favor, digite sua nova senha.
            </article>
            <input type="hidden" name="token" value="{{ $token }}">
            <x-form.form-group labelName="Email" inputName="email" inputType="email" inputValue="{{$email}}" :inputReadOnly="true"/>
            <x-form.form-group labelName="Senha" inputName="password" inputType="password" />
            <x-form.form-group labelName="Confirmar senha" inputName="password_confirmation" inputType="password" />
            <input type="submit" class="btn btn-primary" value="Confirmar">
        </x-form.default-form>
    </div>
@endsection

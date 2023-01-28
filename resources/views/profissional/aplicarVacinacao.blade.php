@extends('template.defaultPages.defaultPages')
@section('title', 'Aplicar vacinação')
@section('content')
    <div class="information container-fluid">
        <x-titles.default-title title="Aplicar vacinação" />

        {{-- ITEMS DO HORIZONTAL NAVBAR --}}
        @include('template.horizontalNavBar.vacinacao_historico')

        @include('template.defaultSessionAlert.alert')
        <x-form.default-form formAction="{{@route('professional.perform.register')}}" formMethod="POST" class="mx-auto" style="max-width: 500px">
            <x-form.form-group labelName="CPF do imunizado*" inputType="text" inputName="cpf" inputValue="{{@old('cpf')}}"/>
            <select name="vacina" id="vacina" class="form-select">
                <option value="">Selecione uma vacina</option>
                @foreach($vacinas as $vacina)
                    <option value="{{$vacina->id}}">{{$vacina->nome}}</option>
                @endforeach
            </select>
            <select name="lote" id="lote" class="form-select"></select>
            <x-form.form-group labelName="Data da vacinação*" inputType="date" inputName="data_vacinacao" inputValue="{{@old('data_vacinacao')}}"/>
            <x-form.form-group labelName="CNES*" inputType="text" inputName="CNES" inputValue="{{@old('CNES')}}"/>
            <input type="submit" class="btn btn-primary" value="Efetuar registro da vacinação">
        </x-form.default-form>
    </div>


    <script>
        const vacinas = {{ Js::from($vacinas) }}
        const lotes = {{ Js::from($lotes) }}

        $('#vacina').change((e)=>{
            //resetando o select de lotes sempre que o valor de vacinas muda
            $('#lote').empty()

            //filtrando o array de lotes dependendo do valor id de vacinas
            let lotes_encontrados = lotes.filter(lote => lote.vacina_id == e.target.value)

            lotes_encontrados.forEach(element => {
                //os lotes encontrados são colocados como options de forma dinamica no select de lotes
                $('#lote').append(new Option(element.codigo, element.id))
            });
        })
    </script>
@endsection

@extends('template.defaultPages.defaultPages')
@section('title', 'Aplicar vacinação')
@section('content')
    <div class="information container-fluid">
        <x-titles.default-title title="Aplicar vacinação" />
        {{-- @dd($vacinas) --}}
        {{-- @dd($lotes->toArray()) --}}
        <x-form.default-form formAction="" formMethod="POST">
            <select name="vacina" id="vacina">
                @foreach($vacinas as $vacina)
                    <option value="{{$vacina->id}}">{{$vacina->nome}}</option>
                @endforeach
            </select>
        </x-form.default-form>
    </div>


    <script>
        const vacinas = {{ Js::from($vacinas) }}
        const lotes = {{ Js::from($lotes) }}
        console.log(vacinas)
        console.log(lotes)

        $('#vacina').change((e)=>{
            alert(e.target.value)
        })
    </script>
@endsection

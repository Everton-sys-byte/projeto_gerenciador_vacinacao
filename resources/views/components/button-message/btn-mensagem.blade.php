<div class="button-message position-relative">
    <button class="btn btn-danger position-relative" data-bs-toggle="modal" 
        @if ($tipo == 'vacina') 
            data-bs-target="#excluirVacina"
            vacina_id="{{ $identificador }}"
            vacina_nome="{{ $nome }}"
        @elseif($tipo == 'lote')
            data-bs-target="#excluirLote"
            lote_id="{{$identificador}}"
            lote_codigo="{{$nome}}"
        @endif
        {{ $contador > 0 ? 'disabled' : '' }}>Excluir</button>
    @if ($contador > 0)
        <div class="btn-delete-wrapper position-absolute w-100 h-100 top-0 bg-transparent" btn-delete="card"
            role="button"></div>
    @endif
    @if ($contador > 0)
        <div class="alert-box position-absolute rounded bg-dark p-2" delete-alert data-anime="top">
            <span class="text-light">{{ $mensagem }}</span>
        </div>
    @endif
</div>

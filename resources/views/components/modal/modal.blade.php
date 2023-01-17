<div class="modal fade" tabindex="-1" id="{{ $modalId }}" data-bs-backdrop="static"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $modalTitle }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                @if ($modalType == 'create')
                    <input type="submit" value="Criar" class="btn btn-primary" form="{{$modalFormId}}">
                @elseif($modalType == 'update')
                    <button type="button" class="btn btn-primary">Salvar alterações</button>
                @endif
            </div>
        </div>
    </div>
</div>

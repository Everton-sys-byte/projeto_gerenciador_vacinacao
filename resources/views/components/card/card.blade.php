<div class="col">
    <div class="card">
        <div class="card-body">
            <div class="row h-100">
                <div class="col-3 d-none d-xxl-block align-self-center">
                    @if ($cardType == 'vacina')
                        <img src="{{ @asset('images/svgs/list/vaccines.svg') }}" alt="Vacina">
                    @elseif($cardType == 'lote')
                        <img src="{{ @asset('images/svgs/list/batch.svg') }}" alt="Lote">
                    @elseif($cardType == 'registro')
                        <img src="{{ @asset('images/svgs/list/clipboard.svg') }}" alt="Registro">
                    @endif
                </div>
                <div class="col-12 col-xxl-9">
                    <div class="card-content container-fluid p-0">
                        <h5 class="card-title">{{ $cardTitle }}</h5>
                        <h5 class="card-subtitle">{{ $cardSubTitle }}</h5>
                        <div class="card-description">
                            {{ $card_information }}
                        </div>

                        <div class="button-wrapper position-absolute bottom-0 py-2 d-flex flex-row gap-1">
                            {{ $card_buttons }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

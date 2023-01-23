<div class="col">
    <div class="card">
        <div class="card-body">
            <div class="row h-100">
                <div class="col-3 d-none d-xxl-block align-self-center">
                    @if ($cardType == 'vacina')
                        <img src="{{@asset('images/svgs/list/vaccines.svg')}}" alt="Vacina">
                    @elseif($cardType == 'lote')
                        <img src="{{@asset('images/svgs/list/package.svg')}}" alt="Lote">
                    @endif
                </div>
                <div class="col-auto col-xxl-9">
                    <div class="card-content container-fluid p-0">
                        <h5 class="card-title">{{ $cardTitle }}</h5>
                        <h5 class="card-subtitle">{{ $cardSubTitle }}</h5>
                        <div class="card-description">
                            {{ $card_information }}
                        </div>
                        @if (session()->get('role') != 'comum')
                            <div class="button-wrapper position-absolute bottom-0 py-2 d-flex flex-row gap-1">
                                {{ $card_buttons }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

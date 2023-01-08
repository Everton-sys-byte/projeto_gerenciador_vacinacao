<div class="col">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-3 d-none d-xxl-block align-self-center">
                    {{-- <img src="" alt=""> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="#0d6efd"
                        class="bi bi-box-seam-fill w-100" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z" />
                    </svg>
                </div>
                <div class="col-auto col-xxl-9">
                    <div class="card-content container-fluid p-0">
                        <h5 class="card-title">{{ $cardType }}</h5>
                        <h5 class="card-subtitle">{{ $cardSubTitle }}</h5>
                        <p class="card-text overflow-auto">{{ $cardInformation }}</p>
                        <a href="#" class="btn btn-primary">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

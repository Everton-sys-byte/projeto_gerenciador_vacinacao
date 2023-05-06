@extends('template.defaultPages.defaultPages')
@section('title', 'home')

@section('content')
    {{-- @dd(session()->get('role')) --}}
    <div class="information container-fluid p-0">
        <div class="home-banner w-100 min-vh-100 mx-auto position-relative">
            <div class="wrapper h-100 d-flex flex-row justify-content px-5">
                <div class="home-information container align-self-center text-light">
                    <x-titles.default-title title="Para o usuário" />
                    <p class="fs-5"> Aqui você pode visualizar com mais transparência e velocidade informações das vacinas tomadas
                        junto do lote, vacinas disponíveis e o profissional que efetuou a vacinação.</p>
                </div>
                <img id="Home_Banner_Illustration" src="{{ @asset('images/svgs/illustrations/goingoffline.svg') }}"
                    alt="" width="600" height="600" class="d-none d-xl-block" />
            </div>
        </div>
        <div class="container-fluid px-5">
            <div class="profissional-funcionalidades d-flex flex-row flex-wrap align-items-center justify-content-around">
                <div class="doctors-image" data-anime="left" data-anime-container>
                    <img src="{{ @asset('images/svgs/illustrations/doctors.svg') }}" alt="medical care" width="600"
                        class="doctors d-none d-xl-block position-relative">
                </div>
                <div class="funcionalidades px-2 h-100 d-flex flex-column justify-content-center" data-anime="right"
                data-anime-container>
                    <x-titles.default-title title="Para o profissional de saúde" />
                    <p class="text-dark">Nossa plataforma facilita o serviço, ela fornece
                        o gerenciamento das vacinas e dos lotes atrelados a ela e até mesmo de registro de vacinação, também
                        é
                        possível
                        visualizar todas as vacinas que foram aplicadas e quem foi o imunizado junto de suas informações
                        como
                        nome completo, endereço, entre outros.
                    </p>
                </div>
            </div>

            <div class="informations-cards mt-5 d-flex flex-wrap align-items-center justify-content-around gap-1"
                data-anime="top" data-anime-container>
                <div class="card">
                    <img src="{{ @asset('images/svgs/illustrations/developers.svg') }}" alt="developers">
                    <div class="card-content px-2 mt-2">
                        <h3 class="title">Equipe</h3>
                        <p>Possuimos uma equipe de pessoas que possuem vasto conhecimento na área de programação,
                            também contamos com profissionais que atuam na área de saúde.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ @asset('images/svgs/illustrations/idea.svg') }}" alt="prototype">
                    <div class="card-content px-2 mt-2">
                        <h3 class="title">Ideia</h3>
                        <p>A ideia da plataforma é facilitar na hora do imunizado visualizar as vacinas
                            que já foram tomadas.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ @asset('images/svgs/illustrations/mobile.svg') }}" alt="mobile">
                    <div class="card-content px-2 mt-2">
                        <h3 class="title">Interface</h3>
                        <p>A interface criada foi feita para ser a mais simples e intuitiva possível,
                            desta forma é possível qualquer pessoa utilizar a plataforma em todo seu potencial.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
@endsection

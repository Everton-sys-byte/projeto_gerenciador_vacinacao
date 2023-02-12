@extends('template.defaultPages.defaultPages')
@section('title', 'home')

@section('content')
    {{-- @dd(session()->get('role')) --}}
    <div class="information container-fluid p-0">
        <div class="home-banner w-100 min-vh-100 mx-auto position-relative">
            <div class="wrapper h-100 d-flex flex-row justify-content bg-primary px-5">
                <div class="home-information container align-self-center text-light">
                    <x-titles.default-title title="Bem vindo" />
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, asperiores quibusdam! Nemo
                        excepturi
                        molestiae vel, omnis assumenda facere placeat blanditiis eos harum suscipit non voluptatum, magnam
                        quibusdam error quisquam ipsum?
                        Nihil aut nobis amet pariatur magnam perspiciatis quam consequatur quisquam aperiam, corrupti
                        placeat
                        voluptas reprehenderit id voluptatum omnis eos praesentium laborum. At porro dolores quod corporis
                        reprehenderit quidem cum laboriosam.
                        Placeat ratione porro excepturi sed dolorum! Unde tempora doloribus molestiae et! Modi cum
                        recusandae
                        nemo facere, necessitatibus aut maxime cumque nulla quas dicta, facilis nostrum possimus distinctio
                        accusamus eius dolorem.
                        Harum dolore deleniti pariatur consectetur nisi, corporis quibusdam consequuntur fugit, aliquam
                        porro
                        nesciunt odio. Magnam doloribus recusandae, alias error sequi officia animi pariatur distinctio.
                        Similique est molestias quidem eveniet vero.</p>
                    <a href="#" class="btn btn-light text-primary">Saiba mais</a>
                </div>
                <img id="Home_Banner_Illustration" src="{{ @asset('Images/svgs/Illustrations/Goingoffline.svg') }}"
                    alt="" width="600" height="600" class="d-none d-xl-block" />
            </div>
        </div>
        <div class="container-fluid p-5 d-flex flex-row flex-wrap align-items-center justify-content-around">
            <img src="{{@asset('Images/svgs/Illustrations/doctors.svg')}}" alt="medical care"
            width="580" class="doctors d-none d-xl-block" >
            <div class="funcionalidades px-2">
                <x-titles.default-title title="Para o profissional de saúde" />
                <p class="text-dark">Nossa plataforma facilita o serviço do profissional de saúde, ela fornece 
                    o gerenciamento das vacinas e dos lotes atrelados a ela e até mesmo de registro de vacinação, também é possível 
                    visualizar todas as vacinas que foram aplicadas e quem foi o imunizado junto de suas informações como nome completo, endereço, entre outros.
                </p>
                <a href="#" class="btn btn-primary rounded-pill">Saiba mais</a>
            </div>
        </div>
    </div>
@endsection

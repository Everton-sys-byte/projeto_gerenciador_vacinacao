@extends('template.defaultPages.defaultPages')
@section('title', 'home')

@section('content')
    <div class="information container-fluid p-0">
        <div class="home-banner w-100 mx-auto position-relative">
            <div class="wrapper h-100 d-flex flex-row justify-content bg-primary">
                <div class="container w-50 align-self-center text-light">
                    <x-titles.default-title title="Era uma vez" /> 
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, asperiores quibusdam! Nemo
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
                <img id="Home_Banner_Illustration" src="{{ @asset('Images/Illustrations/Goingoffline.svg') }}" alt=""
                    width="600" height="600" />
            </div>
        </div>
        <div class="teste container-fluid bg-success">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo libero, placeat dolorem nihil animi ipsam esse
            pariatur rerum, unde beatae tempora provident nostrum ad ab! Placeat eum ea quas ut?
            Obcaecati culpa rerum aut repellendus voluptatem exercitationem pariatur laudantium, nisi hic maxime nesciunt.
            Asperiores eius odit dolor dolorum soluta repellat unde, non rerum, sunt quo vitae voluptates hic dolores
            repudiandae.
            Autem accusantium quidem quas tempore tempora officia placeat rem aperiam, dolorum voluptas sapiente provident
            nobis molestiae ea quasi harum. Adipisci facilis vitae repellat rerum aperiam quia placeat illum ab unde!
        </div>
    </div>
@endsection

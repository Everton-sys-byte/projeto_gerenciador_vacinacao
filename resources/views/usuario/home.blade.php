@extends('template.defaultPages.defaultPages')
@section('title', 'home')

@section('content')
    <div class="information container-fluid p-0">
        <div class="home-banner w-100 mx-auto bg-primary">
            <div class="wrapper d-flex flex-row justify-content bg-primary">
                <div class="container w-50 align-self-center text-light">
                    <x-titles.BannerTitle title="Era uma vez" />
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
                    width="500" height="500" />
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave">
                <path fill="#000" fill-opacity="1"
                    d="M0,32L48,58.7C96,85,192,139,288,160C384,181,480,171,576,144C672,117,768,75,864,90.7C960,107,1056,181,1152,197.3C1248,213,1344,171,1392,149.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>
        <div class="container-fluid bg-success">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo libero, placeat dolorem nihil animi ipsam esse pariatur rerum, unde beatae tempora provident nostrum ad ab! Placeat eum ea quas ut?
            Obcaecati culpa rerum aut repellendus voluptatem exercitationem pariatur laudantium, nisi hic maxime nesciunt. Asperiores eius odit dolor dolorum soluta repellat unde, non rerum, sunt quo vitae voluptates hic dolores repudiandae.
            Autem accusantium quidem quas tempore tempora officia placeat rem aperiam, dolorum voluptas sapiente provident nobis molestiae ea quasi harum. Adipisci facilis vitae repellat rerum aperiam quia placeat illum ab unde!
        </div>
    </div>
@endsection

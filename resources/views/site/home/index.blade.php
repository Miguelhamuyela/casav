@extends('layouts.merge.site')
@section('titulo', 'Oficial')
@section('content')


    <!-- ====== Slideshow Start ====== -->
    <div class="carousel">
        @if ($slideshows)
            @foreach ($slideshows as $item)
                <div
                    style='
                            background-position:center;
                            background-size:cover;
                            height:850px;
                            width:100%;
                            background-image: url("/storage/{{ $item->path }}"); box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5);'>
                    <div class="ud-hero-content" style="margin-top: 290px;">
                        @if ($item->title)
                            <h2 class="ud-hero-title" style="text-shadow: 1px 1px #000; font-size:35px;">
                                {{ $item->title }}
                            </h2>
                        @endif
                        @if ($item->link)
                            <ul class="ud-hero-buttons">
                                <a href="{{ $item->link }}" class="ud-main-btn ud-link-btn">
                                    {{ $item->button }} <i class="lni lni-arrow-right"></i>
                                </a>
                            </ul>
                        @endif
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <!-- ====== Slideshow End ====== -->

    <!-- ====== NEWS Start ====== -->
    <section id="NEWS" class="ud-features" style="margin-top:-115px;margin-bottom:-50px;">
        <div class="container">

            <div class="row">
                @foreach ($news as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="ud-single-blog">
                            <div class="ud-blog-image">
                                <a href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                                    <div class="card-img-top img-fluid rounded"
                                        style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:200px;'>
                                    </div>
                                </a>
                            </div>

                            <div class="ud-blog-content" style="margin-top:-20px;">
                                <span class="ud-blog-date bg-primary">{{ date('M d, Y', strtotime($item->date)) }}</span>
                                <br>
                                <a href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                                    <h5 class="text-dark">
                                        {{ $item->title }}

                                    </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <center>

                    <a href="{{ route('site.news') }}" class="ud-main-btn ud-link-btn mb-5">
                        Ver mais <i class="lni lni-arrow-right"></i>
                    </a>
                </center>

            </div>
        </div>
    </section>
    <!-- ====== NEWS End ====== -->

    <!-- ====== Eleitory Start ====== -->
    <section id="Eleitory" class="py-4 px-5" style="margin-top: -80px; background-color: #3C9EE0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h3 class="text-center text-white">Processos Eleitorais em Angola</h3>

                </div>
            </div>
            <div class="row mt-4">
                {{-- item --}}
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <a href="{{ url('/eleições/2017') }}">
                        <img src="/site/images/eleitory/index-3.png" alt="eleições 2017">
                    </a>
                </div>
                {{-- end item --}}
                {{-- item --}}
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <a href="{{ url('/eleições/2012') }}">
                        <img src="/site/images/eleitory/index-2.png" alt="eleições 2012">
                    </a>
                </div>
                {{-- end item --}}

                {{-- item --}}
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <a href="{{ url('/eleições/2008') }}">
                        <img src="/site/images/eleitory/index-1.png" alt="eleições 2008">
                    </a>
                </div>
                {{-- end item --}}


                {{-- item --}}
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <a href="{{ url('/eleições/1992') }}">
                        <img src="/site/images/eleitory/index-0.png" alt="eleições 1992">
                    </a>
                </div>
                {{-- end item --}}
            </div>
        </div>
    </section>
    <!-- ====== Eleitory End ====== -->

    <!-- ====== IMPRESSOS Start ====== -->
    <section id="Publicações" class="ud-features">
        <div class="container">

            <div class="col-lg-12" style="margin-bottom:-50px;">

                <div class="ud-section-title">
                    <h2 style="font-size:40px;">Publicações</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-6">

                    <div class="ud-single-feature wow fadeInUp" data-wow-delay=".15s">

                        <a target="_blank" href="/pdf/eleitory/Registo-Eleitoral.pdf" class="card-img-top img-fluid rounded"
                            style='background-image:url("/site/images/eleitory/registo_eleitoral-o-que-e-1536x905.jpg");background-position:center;background-size:cover;height:300px;'
                            data-bs-toggle="modal" data-bs-target="#myModal">
                        </a>

                        <div class="ud-feature-content">

                            <a href="/pdf/eleitory/Registo-Eleitoral.pdf">
                                <h3 class="ud-feature-title">O que é o registo eleitoral?</h3>
                            </a>

                            <div class="modal" id="myModal">
                                <div class="modal-dialog modal-xl  modal-fullscreen-md-down">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary ">
                                            <h5 class="modal-title text-white">Registo Eleitoral</h5>
                                            <button type="button" class="btn-close bg-white"
                                                data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div style="height:450px;width:100%;">
                                                <embed src="/pdf/eleitory/Registo-Eleitoral.pdf" type="application/pdf"
                                                    height="100%" width="100%">
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-xl-6 col-lg-6 col-sm-6">


                    <div class="ud-single-feature wow fadeInUp" data-wow-delay=".15s">

                        <a target="_blank" href="/pdf/eleitory/passos_de_voto.pdf" class="card-img-top img-fluid rounded"
                            style='background-image:url("/site/images/eleitory/votar_8_passos-1536x905.jpg");background-position:center;background-size:cover;height:300px;'
                            data-bs-toggle="modal" data-bs-target="#myModal2">
                        </a>

                        <div class="ud-feature-content">
                            <a target="_blank" href="/pdf/eleitory/passos_de_voto.pdf">
                                <h3 class="ud-feature-title">8 Passos para votação</h3>
                            </a>

                            <div class="modal" id="myModal2">
                                <div class="modal-dialog modal-xl  modal-fullscreen-md-down">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary ">
                                            <h5 class="modal-title text-white">8 Passos para votação</h5>
                                            <button type="button" class="btn-close bg-white"
                                                data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div style="height: 450px;width:100%;">
                                                <embed src="/pdf/eleitory/passos_de_voto.pdf" type="application/pdf"
                                                    height="100%" width="100%">
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>

                </div>
                <div class="col-xl-6 col-lg-6 col-sm-6">


                    <div class="ud-single-feature wow fadeInUp" data-wow-delay=".15s">

                        <a target="_blank"
                            href="/pdf/eleitory/Manual-dos-Membros-das-Assembleias-e-Mesas-de-Voto-2017.pdf"
                            class="card-img-top img-fluid rounded"
                            style='background-image:url("/site/images/eleitory/manual_MMAV-1536x905.jpg");background-position:center;background-size:cover;height:300px;'
                            data-bs-toggle="modal" data-bs-target="#myModal3">
                        </a>

                        <div class="ud-feature-content">
                            <a target="_blank"
                                href="/pdf/eleitory/Manual-dos-Membros-das-Assembleias-e-Mesas-de-Voto-2017.pdf">
                                <h3 class="ud-feature-title">Manual dos membros das assembleias e mesas de votos</h3>
                            </a>

                            <div class="modal" id="myModal3">
                                <div class="modal-dialog modal-xl  modal-fullscreen-md-down">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary ">
                                            <h5 class="modal-title text-white">Manual dos membros das assembleias e mesas
                                                de
                                                votos</h5>
                                            <button type="button" class="btn-close bg-white"
                                                data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div style="height: 450px;width:100%;">
                                                <embed
                                                    src="/pdf/eleitory/Manual-dos-Membros-das-Assembleias-e-Mesas-de-Voto-2017.pdf"
                                                    type="application/pdf" height="100%" width="100%">
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>

                </div>
                <div class="col-xl-6 col-lg-6 col-sm-6">


                    <div class="ud-single-feature wow fadeInUp" data-wow-delay=".15s">

                        <a target="_blank" href="/pdf/eleitory/caderno_bolso.pdf" class="card-img-top img-fluid rounded"
                            style='background-image:url("/site/images/eleitory/caderno-de-bolso-1536x905.jpg");background-position:center;background-size:cover;height:300px;'
                            data-bs-toggle="modal" data-bs-target="#myModal4">
                        </a>

                        <div class="ud-feature-content">
                            <a target="_blank" href="/pdf/eleitory/caderno_bolso.pdf">
                                <h3 class="ud-feature-title">Caderno de bolso</h3>
                            </a>

                            <div class="modal" id="myModal4">
                                <div class="modal-dialog modal-xl  modal-fullscreen-md-down">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary ">
                                            <h5 class="modal-title text-white">Caderno de bolso</h5>
                                            <button type="button" class="btn-close bg-white"
                                                data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div style="height: 450px;width:100%;">
                                                <embed src="/pdf/eleitory/caderno_bolso.pdf" type="application/pdf"
                                                    height="100%" width="100%">
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


            </div>
        </div>
    </section>
    <!-- ====== IMPRESSOS End ====== -->

    <!-- ====== map Start ====== -->
    <section id="map" class="ud-map mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12" style="margin-bottom:-50px;">
                    <div class="ud-section-title">
                        <h2 style="font-size:37px;">A Comissão Nacional Eleitoral Em Angola</h2>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <img src="/site/images/map.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- ====== map End ====== -->

    <script>
        $('.carousel').slick({
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
        });
    </script>
    <script>
        const second = 1000;
        const minute = second * 60;
        const hour = minute * 60;
        const day = hour * 24;

        let count_down = new Date('08/24/2022 07:00:00').getTime();
        let x = setInterval(() => countDown(), second);

        function countDown() {
            let now = new Date(Date.now()).getTime();
            let diff = count_down - now;

            document.getElementById('days').innerText = Math.floor(diff / day);
            document.getElementById('hours').innerText = Math.floor(diff % day / hour);
            document.getElementById('minutes').innerText = Math.floor(diff % hour / minute);
            document.getElementById('seconds').innerText = Math.floor(diff % minute / second);
        }

        function resetCountdown() {
            clearInterval(x);
            let date_end = document.form_main.date_end.value;
            count_down = new Date(`${date_end} 00:00:00`).getTime();
            x = setInterval(() => countDown(), second);
        }
    </script>
@endsection
@section('CSSJS')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css" />

    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>

@endsection

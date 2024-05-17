@extends('layouts.merge.site')
@section('titulo', 'Pesquisar')
@section('content')

    <!-- ====== find Start ====== -->

    <section id="faq" class="ud-faq bg-white" style="margin-bottom: 160px">
        <div class="container">

            <div class="col-lg-12">
                <div class="text-left mb-3">
                    <h3>Alguma Pergunta? </h3>
                </div>
            </div>
            <div class="col-lg-12">
                <form class="row" action="{{ route('site.search.find') }}">
                    @csrf

                    <input type="text" id="rcorners2" placeholder="Digite sua pesquisa..."
                        value="{{ isset($search) ? $search : '' }}" name="search" required
                        class="form-control search py-2">

                    <button class="btn btn-primary" id="buttonbtn" type="submit"> <i class="lni lni-search"></i></button>

                </form>
                @if ($errors->any())
                    <small class="mt-1 mb-4 text-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </small>
                @endif
                <div class="mt-2 mb-5" id="resultcount"> </div>
            </div>


            <div class="col-lg-12 mt-4">
                <div class="row">
                    {{-- news --}}
                    @isset($news)
                        @foreach ($news as $item)
                            <div class="col-12 my-2 line">
                                <a class="text-dark" href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                                    <b>{{ $item->title }}</b> <br>
                                    <small>{!! html_entity_decode(mb_substr($item->body, 0, 250, 'UTF-8')) !!}</small>
                                </a>
                                <br>
                                <a href="{{ route('site.news') }}"><span class="badge bg-dark">Notícias</span></a>
                            </div>
                        @endforeach
                    @endisset

                    {{-- annonces --}}
                    @isset($annonces)
                        @foreach ($annonces as $item)
                            <div class="col-12 my-2 line">
                                <a class="text-dark" href="{!! url('/anuncios/' . urlencode($item->title)) !!}">
                                    <b>{{ $item->title }}</b> <br>
                                    <small>{!! html_entity_decode(mb_substr($item->body, 0, 250, 'UTF-8')) !!}</small>
                                </a>
                                <br>
                                <a href="{{ route('site.announcent') }}"><span class="badge bg-dark">Anúncios</span></a>
                            </div>
                        @endforeach
                    @endisset

                    {{-- galleries --}}
                    @isset($galleries)
                        @foreach ($galleries as $item)
                            <div class="col-12 my-2 line">
                                <a class="text-dark" href="{!! url('/galeria/' . urlencode($item->name)) !!}">
                                    <b>{{ $item->name }}</b>
                                </a>
                                <br>
                                <a href="{{ route('site.gallery') }}"><span class="badge bg-dark">Galeria de Fotos</span></a>
                            </div>
                        @endforeach
                    @endisset

                    {{-- slideshows --}}
                    @isset($slideshows)
                        @foreach ($slideshows as $item)
                            <div class="col-12 my-2 line">
                                <a class="text-dark" href="{{ $item->link }}">
                                    <b>{{ $item->title }}</b>
                                </a>
                                <br>
                                <a href="{{ route('site.home') }}">
                                    <span class="badge bg-dark">Notícias em Destaque</span>
                                </a>
                            </div>
                        @endforeach
                    @endisset

                    {{-- cpfs --}}
                    @isset($cpfs)
                        @foreach ($cpfs as $item)
                            <div class="col-12 my-2 line">
                                <a class="text-dark" href="{{ $item->link }}">
                                    <b>{{ $item->name }}</b> <br>
                                    <small>{!! html_entity_decode(mb_substr($item->description, 0, 250, 'UTF-8')) !!}</small>
                                </a>
                                <br>
                                <a href="{{ route('site.cpf') }}"><span class="badge bg-dark">CPF</span></a>
                            </div>
                        @endforeach
                    @endisset

                    {{-- compositons --}}
                    @isset($compositons)
                        <div class="col-12 my-2 line">
                            <a class="text-dark" href="{{ route('site.composition') }}">
                                <b>{{ $compositons->title }}</b> <br>
                                <small>{!! html_entity_decode(mb_substr($compositons->information, 0, 250, 'UTF-8')) !!}</small>
                            </a>
                            <br>
                            <a href="{{ route('site.composition') }}"><span class="badge bg-dark">Composição da
                                    CNE</span></a>
                        </div>
                    @endisset

                    {{-- members --}}
                    @isset($members)
                        @foreach ($members as $item)
                            <div class="col-12 my-2 line">
                                <a class="text-dark" href="{{ route('site.composition') }}">
                                    <b>{{ $item->name }}</b> <br>
                                    <small>{{ $item->function }}</small>
                                </a>
                                <br>
                                <a href="{{ route('site.composition') }}"><span class="badge bg-dark">Membro da
                                        CNE</span></a>
                            </div>
                        @endforeach
                    @endisset

                    {{-- definitions --}}
                    @isset($definitions)
                        <div class="col-12 my-2 line">
                            <a class="text-dark" href="{{ route('site.definition') }}">
                                <b>{{ $definitions->title }}</b> <br>
                                <small>{!! html_entity_decode(mb_substr($definitions->definicon, 0, 250, 'UTF-8')) !!}</small>
                            </a>
                            <br>
                            <a href="{{ route('site.definition') }}">
                                <span class="badge bg-dark">Definição da CNE</span>
                            </a>
                        </div>
                    @endisset

                    {{-- parties --}}
                    @isset($parties)
                        @foreach ($parties as $item)
                            <div class="col-12 my-2 line">
                                <a class="text-dark" href="{!! url('/partidos/' . urlencode($item->parties)) !!}">
                                    <b>{{ $item->parties }}</b> <br>
                                    <small>{!! html_entity_decode(mb_substr($item->body, 0, 255, 'UTF-8')) !!}</small>
                                </a>
                                <br>
                                <a href="{{ route('site.parties') }}"><span class="badge bg-dark">Partidos
                                        Políticos</span></a>
                            </div>
                        @endforeach
                    @endisset
                </div>
                {{-- <div class="col-12 mx-auto text-center">
                    <button id="seemore" class="btn btn-outline-dark col-md-2" >Ver Mais</button>
                </div> --}}
            </div>

        </div>
    </section>
    <!-- ====== find End ====== -->

@endsection
@section('CSSJS')
    <style>
        #rcorners2 {
            width: 700px;
            height: 50px;
        }

        #buttonbtn {
            display: block;
            width: 50px;
            height: 50px;
            margin-left: -50px;
        }

    </style>
@endsection
@section('JS')
    <script src="/site/js/myscript.js"></script>
@endsection

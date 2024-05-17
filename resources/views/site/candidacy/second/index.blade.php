@extends('layouts.merge.site')
@section('titulo', 'Recrutamento e Selecção de Formadores Municipais para as Eleições Gerais de 2022')
@section('content')
    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">

                        <h1> Recrutamento e Selecção de Formadores Municipais <br> para as Eleições Gerais de 2022</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <section class="ud-blog-grids mb-5 pt-5">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-5 d-none d-md-none d-lg-block">
                    <img src="/site/images/candidacy/second.jpeg" width="100%" alt="">
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="col-md-12 my-2 text-center">
                        <img src="/images/logotipo/2022.png" width="250">

                    </div>
                    <div class="col-12 alert alert-info mb-5">

                        <p>
                            <b>NOTA:</b> <br>
                            1. A candidatura deve ser efetuada em função da sua província e município aonde vai exercer o
                            seu direito de
                            voto. <br>
                            2. Será automaticamente desqualificado se prestar falsas declarações! <br>
                            3. (<b class="text-danger">*</b>) - Campo Obrigatório
                        </p>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form method="POST" enctype="multipart/form-data" action="{{ route('site.candidacy.store') }}"
                        class="row mt-0 pt-0">

                        @csrf
                        @include('forms._formCandidacy.index')
                        <div class="col-12">
                            <div class="mt-5 text-center">
                                <button class="btn btn-primary col-md-4 col-12 py-3" type="submit"> Enviar a
                                    Candidatura</button><br>

                            </div>
                        </div>

                    </form>

                </div>

            </div>




        </div>

    </section>


@endsection
@section('JS')
    <script src="/js/data-geo.js"></script>
    <script src="/site/js/my.js"></script>


@endsection

@extends('layouts.merge.site')
@section('titulo', 'Consultar Estado da Candidatura')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1> Consultar Estado da Candidatura</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <section class="ud-blog-grids my-3 py-3">
        <div class="container">
            <div class="col-md-12 text-center mb-3">
                <img src="/images/logotipo/2022.png" width="250">

            </div>
            <div class="col-md-12 mb-5 mt-3">
                <h5 class="text-center text-dark">
                    Resultados do Concurso de Recrutamento e Selecção de Candidatos a Digitalizadores para as Eleições Gerais de 2022
                    <!--
                    <br> & <br>

                    Resultados do Concurso de Recrutamento e Selecção de Membros das Mesas das Assembleias de Voto para as Eleições Gerais de 2022
                    -->
                </h5>
            </div>
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="row" action="{{ route('site.candidacystatus.post') }}">
                    @csrf

                    <input type="text" id="rcorners2" placeholder="Digite o seu Nº do Bilhete de Identidade..."
                        value="{{ isset($search) ? $search : '' }}" name="search" required
                        class="form-control search py-2">

                    <button class="btn btn-primary" id="buttonbtn" type="submit"> <i class="lni lni-search"></i></button>

                </form>
            </div>
            @isset($candidacy)
                <div class="col-12 mt-5">
                    <div class="row">
                        <div class="col-md-12 my-5">
                            <h4>Estado da Candidatura:
                                @if ($candidacy->state == 'Aprovada')
                                    @if ($candidacy->perpage ==
                                        'Recrutamento e Selecção de Candidatos a Digitalizadores para as Eleições Gerais de 2022')
                                        <b class="text-success">{{ $candidacy->state }}

                                            @if ($candidacy->placeregion == 'Centro de Escrutínio Nacional')
                                                @if ($candidacy->privilegiate == 1)
                                                    <br>
                                                    <small>
                                                        Aguarde a ligação pelos canais oficiais da CNE, o seu grupo será chamado
                                                        no
                                                        início de Agosto de 2022.
                                                    </small>
                                                @else
                                                    <br>
                                                    <small><a href="{{ route('site.candidacystatus.proof', $candidacy->bi) }}">
                                                            Clique aqui para baixar o Comprovativo de Acesso ao CEN</a>
                                                    </small>
                                                @endif
                                            @endif
                                        </b>
                                    @else

                                            <br>
                                            <small>
                                              Ainda não Temos os Resultados deste concurso
                                            </small>

                                        </b>
                                    @endif
                                @elseif ($candidacy->state == 'Não Aprovada')
                                    <b class="text-danger">{{ $candidacy->state }}</b>
                                @else
                                    <b>{{ $candidacy->state }} <small>(Aguarde a Actualização)</small></b>
                                @endif
                                <br>
                                Concurso: {{ $candidacy->perpage }}
                                <hr>
                            </h4>
                        </div>
                        <div class="col-md-6 col-lg-4 col-12">
                            <div class="form-group">
                                <label for="province">Província <small class="text-danger">*</small></label>
                                <input type="text" class="form-control" value="{{ $candidacy->province->name }}"
                                    id="province" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-12">
                            <div class="form-group">
                                <label for="county">Município <small class="text-danger">*</small></label>
                                <input type="text" class="form-control" value="{{ $candidacy->county }}" id="county"
                                    disabled>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-12">
                            <div class="form-group">
                                <label for="option">Opção para Candidatura <small class="text-danger">*</small></label>
                                <input type="text" class="form-control" value="{{ $candidacy->placeregion }}" id="option"
                                    disabled>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-12">
                            <div class="form-group">
                                <label for="bi">Nº do Bilhete de Identidade <small class="text-danger">*</small></label>
                                <input type="text" class="form-control" value="{{ $candidacy->bi }}" id="bi"
                                    disabled>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-12">
                            <div class="form-group">
                                <label for="name">Nome <small class="text-danger">*</small></label>
                                <input type="text" class="form-control" value="{{ $candidacy->name }}" id="name"
                                    disabled>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-12">
                            <div class="form-group">
                                <label for="surname">Apelido <small class="text-danger">*</small></label>
                                <input type="text" class="form-control" value="{{ $candidacy->surname }}" id="surname"
                                    disabled>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-12">
                            <div class="form-group">
                                <label for="father">Nome do Pai</label>
                                <input type="text" class="form-control" value="{{ $candidacy->father }}" id="father"
                                    disabled>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-12">
                            <div class="form-group">
                                <label for="mother">Nome da Mãe</label>
                                <input type="text" class="form-control" value="{{ $candidacy->mother }}" id="mother"
                                    disabled>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-12">
                            <div class="form-group">
                                <label for="birth">Data de Nascimento <small class="text-danger">*</small></label>
                                <input type="date" class="form-control" value="{{ $candidacy->birth }}" id="birth"
                                    disabled>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-8 col-12">
                            <div class="form-group">
                                <label for="residence">Residência <small class="text-danger">*</small></label>
                                <input type="text" class="form-control" value="{{ $candidacy->residence }}"
                                    id="residence" disabled>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-12">
                            <div class="form-group">
                                <label for="email">Email <small class="text-danger">*</small></label>
                                <input type="email" class="form-control" value="{{ $candidacy->email }}" id="email"
                                    disabled>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-12">
                            <div class="form-group">
                                <label for="tel">Telefone <small class="text-danger">*</small></label>
                                <input type="number" class="form-control" value="{{ $candidacy->tel }}" id="tel"
                                    disabled>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-12">
                            <div class="form-group">
                                <label for="qualifications">Habilitações Literárias <small
                                        class="text-danger">*</small></label>
                                <input type="text" class="form-control" value="{{ $candidacy->qualifications }}"
                                    id="qualifications" disabled>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-12">
                            <div class="form-group">
                                <label for="ocupation">Ocupação <small class="text-danger">*</small></label>
                                <input type="text" class="form-control" value="{{ $candidacy->ocupation }}"
                                    name="ocupation" id="ocupation" disabled>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-12">
                            <div class="form-group">
                                <label for="eleitorycard">Cartão de Eleitor Nº</label>
                                <input type="text" class="form-control" value="{{ $candidacy->eleitorycard }}"
                                    name="eleitorycard" id="eleitorycard" disabled>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="group">Grupo</label>
                                <input type="text" class="form-control" value="{{ $candidacy->group }}" name="group"
                                    id="group" disabled>
                            </div>
                        </div>

                        {{-- docs --}}
                        <div class="row pt-4">
                            <div class="col-md-4">
                                <hr>
                            </div>
                            <div class="col-md-4 text-center">Anexo dos Documentos Escaneados</div>
                            <div class="col-md-4">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <a target="_blank" href="/storage/{{ $candidacy->doc_bi }}">
                                        <img src="/images/icons/icon-doc.png" width="150" alt="">

                                        <h5>Bilhete de Identidade</h5>
                                    </a>
                                </div>
                                <div class="col-md-4 text-center">
                                    <a target="_blank" href="/storage/{{ $candidacy->doc_covid }}">
                                        <img src="/images/icons/icon-doc.png" width="150" alt="">

                                        <h5>Certificado de Vacinação (Covid 19)</h5>
                                    </a>
                                </div>
                                <div class="col-md-4 text-center">
                                    <a target="_blank" href="/storage/{{ $candidacy->doc_qualifications }}">
                                        <img src="/images/icons/icon-doc.png" width="150" alt="">

                                        <h5>Declaração ou Certificado de Habilitações Literárias</h5>
                                    </a>
                                </div>
                            </div>

                        </div>



                    </div>

                </div>
            @else
                @isset($search)
                    <div class="col-12 my-3 py-5 text-center">
                        Infelizmente não encontramos nenhuma candidatura com esse nº de Bilhete de Identidade
                    </div>
                @endisset
            @endisset



        </div>

    </section>


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

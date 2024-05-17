@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Candidatura')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h5 page-title">

                        <a href="{!! route('admin.candidacy.index', urlencode($candidacy->perpage)) !!}">{{ $candidacy->perpage }} ></a>
                        {{ $candidacy->name . ' ' . $candidacy->surname }}
                    </h2>
                </div>

            </div>

        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h2 class="h3 m-4 page-title">Nome: {{ $candidacy->name . ' ' . $candidacy->surname }}
                            <br>
                            Estado:


                            @if ($candidacy->state == 'Aprovada')
                                <b class="text-success">{{ $candidacy->state }}</b>
                            @elseif ($candidacy->state == 'Não Aprovada')
                                <b class="text-danger">{{ $candidacy->state }}</b>
                            @else
                                <b>{{ $candidacy->state }}</b>
                            @endif

                        </h2>
                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col-md-12 mb-2">
                                        <p class="mb-1">
                                            <b>Bilhete de Identidade: </b>{{ $candidacy->bi }}
                                        </p>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <p class="mb-1">
                                            <b>Data de Nascimento: </b>
                                            {{ date('d/m/Y', strtotime($candidacy->birth)) }} -
                                            {{ date('Y') - date('Y', strtotime($candidacy->birth)) }} anos
                                        </p>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <p class="mb-1">
                                            <b>Pai: </b>{{ $candidacy->father }}
                                        </p>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <p class="mb-1">
                                            <b>Mãe: </b>{{ $candidacy->mother }}
                                        </p>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <p class="mb-1">
                                            <b>Residência: </b>{{ $candidacy->residence }}
                                        </p>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <p class="mb-1">
                                            <b>Telefone: </b>{{ $candidacy->tel }}
                                        </p>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <p class="mb-1">
                                            <b>Email: </b>{{ $candidacy->email }}
                                        </p>
                                    </div>

                                    <div class="col-12">
                                        <div class="row pt-4 pb-2">

                                            <div class="col-md-4 text-left">Dados Profissionais</div>
                                            <div class="col-md-8">
                                                <hr>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <p class="mb-1">
                                            <b>Habilitações Literárias: </b>{{ $candidacy->qualifications }}
                                        </p>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <p class="mb-1">
                                            <b>Ocupação: </b>{{ $candidacy->ocupation }}
                                        </p>
                                    </div>
                                    <div class="col-12">
                                        <div class="row pt-4 pb-2">

                                            <div class="col-md-4 text-left">Dados Eleitorais</div>
                                            <div class="col-md-8">
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <p class="mb-1">
                                            <b>Província: </b>{{ $candidacy->province->name }}
                                        </p>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <p class="mb-1">
                                            <b>Município: </b>{{ $candidacy->county }}
                                        </p>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <p class="mb-1">
                                            <b>Concurso: </b>{{ $candidacy->perpage }}
                                        </p>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <p class="mb-1">
                                            <b>Opção para Candidatura: </b>{{ $candidacy->placeregion }}
                                        </p>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <p class="mb-1">
                                            <b>Nº do Cartão Eleitoral: </b>{{ $candidacy->eleitorycard }}
                                        </p>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <p class="mb-1">
                                            <b>Grupo: </b>{{ $candidacy->group }}
                                        </p>
                                    </div>


                                    <div class="col-12">
                                        <div class="row pt-4 pb-2">

                                            <div class="col-md-4 text-left">Anexo dos Documentos Escaneados</div>
                                            <div class="col-md-8">
                                                <hr>
                                            </div>
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

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1"><b>Data de Cadastro:</b> {{ $candidacy->created_at }}
                                        </p>
                                        <p class="mb-1"><b>Última Actualização:</b>
                                            {{ $candidacy->updated_at }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div> <!-- /.col-md-8 -->
                    <div class="col-md-4 mt-5 ">
                        <div class="col-md-12 bg-primary p-5">
                            <h4 class="text-left text-white">Editar Estado da Candidatura</h4>
                            <form action="{{ route('admin.candidacy.update', $candidacy->bi) }}" method="POST">
                                <div class="modal-body">
                                    @method('PUT')
                                    @csrf

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="state" value="Aprovada"
                                            id="flexRadioDefault1"
                                            {{ $candidacy->state == 'Aprovada' ? 'checked' : '' }}>
                                        <label class="form-check-label text-white" for="flexRadioDefault1">
                                            Aprovada
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="state" value="Não Aprovada"
                                            id="flexRadioDefault2"
                                            {{ $candidacy->state == 'Não Aprovada' ? 'checked' : '' }}>
                                        <label class="form-check-label text-white" for="flexRadioDefault2">
                                            Não Aprovada
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="state" value="Recebida"
                                            id="flexRadioDefault2"
                                            {{ $candidacy->state == 'Recebida' ? 'checked' : '' }}>
                                        <label class="form-check-label text-white" for="flexRadioDefault2">
                                            Recebida
                                        </label>
                                    </div>

                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit" class="btn bg-white text-primary py-2 px-5">Actualizar</button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>


@endsection

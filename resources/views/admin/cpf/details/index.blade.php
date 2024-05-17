@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Cpf')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.cpf.index') }}"><u>Listar Cpfs</u></a> > {{ $cpf->name }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 m-4 page-title">{{ $cpf->name }}</h2>
                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">
                                    @if ($cpf->country)
                                        <div class="col-md-12 mb-2">
                                            <h5 class="mb-1">
                                                <b>País:</b><br>
                                                {{ $cpf->country }}
                                            </h5>
                                        </div>
                                    @endif

                                    @if ($cpf->link)
                                        <div class="col-md-12 mb-2">
                                            <h5 class="mb-1">
                                                <b>Web site:</b><br>
                                                <a href="{{ $cpf->link }}" target="_blank">Clique aqui para abrir </a>
                                            </h5>
                                        </div>
                                    @endif
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Descrição:</b>
                                        </h5>
                                        <p class=" text-justify">{!! html_entity_decode($cpf->description) !!}</p>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-md-7 mb-2">
                                            <hr>
                                            <p class="mb-1 "><b>Data de Cadastro:</b> {{ $cpf->created_at }}
                                            </p>
                                            <p class="mb-1 "><b>Última Actualização:</b> {{ $cpf->updated_at }}
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div> <!-- /.col-12 -->
                    </div> <!-- .row -->
                </div> <!-- .container-fluid -->


            </div>
        </div>




    @endsection

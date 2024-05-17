@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Publicações')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.printed.index') }}"><u>Listar Publicações</u></a> > {{ $printed->name }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 m-4 page-title">{{ $printed->name }}</h2>
                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-10">
                                        <div class="row align-items-center my-4">


                                        </div>
                                        <div class="card-deck mb-4">
                                            <div class="col">
                                                <h2 class="page-title">
                                                    <a target="_blank" href="/storage/{{ $printed->cover }}">Arquivo</a></h2>
                                            </div>

                                            <!-- .card -->
                                        </div> <!-- .card-deck -->
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 "><b>Data de Cadastro:</b> {{ $printed->created_at }}
                                        </p>
                                        <p class="mb-1 "><b>Última Actualização:</b> {{ $printed->updated_at }}
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

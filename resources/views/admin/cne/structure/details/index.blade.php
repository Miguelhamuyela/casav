@extends('layouts.merge.dashboard')
@section('titulo', 'Ver Estrutura Orgânica')

@section('content')
    <div class="card mb-2">
        <div class="card-body">

            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h5 page-title">
                            Estrutura Orgânica
                        </h2>
                    </div>
                    <div class="col-auto">
                        @isset($structure)
                            <a type="button" class="btn btn-sm btn-primary text-white"
                                href="{{ url("admin/cne/Structure/edit/{$structure->id}") }}">
                                <span class="fe fe-edit fe-16 mr-2"></span>Editar o Texto
                            </a>
                        @endisset
                    </div>
                </div>
            </div>

        </div>
    </div>
    @isset($structure)


        <div class="card shadow">
            <div class="card-body">

                <div class="container-fluid">
                    <div class="row m-4">
                        @if ($structure->file)
                            <div class="col-12 mb-4">
                                <div class="row">
                                    <div class="col-md-12 text-left mt-2">
                                        <h4>Imagem da Estrutura Orgânica</h4>
                                    </div>
                                    <div class="col-md-12"
                                        style='background-image:url("/storage/{{ $structure->file }}");background-position:center;background-size:cover;height:1000px;'>
                                    </div>
                                </div>
                            </div>
                        @endif


                    </div> <!-- .row -->
                    <div class="row align-items-center">
                        <div class="col-md-7 mb-2">
                            <hr>
                            <p class="mb-1 "><b>Data de Cadastro:</b> {{ $structure->created_at }}
                            </p>
                            <p class="mb-1 "><b>Última Actualização:</b> {{ $structure->updated_at }}
                            </p>

                        </div>
                    </div>
                </div> <!-- .container-fluid -->
            </div>
        </div>
    @endisset


@endsection

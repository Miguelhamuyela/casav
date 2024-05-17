@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Directiva')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.directive.index') }}"><u>Listar Directivas</u></a> > {{ $directive->title }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h4 m-4 page-title">Titulo: {{ $directive->title }}</h2>
                        @if ($directive->category)
                            <h2 class="h4 m-4 page-title">Categoria da Directiva: {{ $directive->category->title }}</h2>
                        @endif

                        <h4 class="h4 m-4">
                            Ficheiro:
                            <a href="/storage/{{ $directive->file }}" target="_blank">
                                <i class="fe fe-file fe-16"></i>
                            </a>
                        </h4>

                        <div class="col-md-12 mb-2">
                            <hr>
                            <p class="mb-1 "><b>Data de Cadastro:</b>
                                {{ $directive->created_at }}
                            </p>
                            <p class="mb-1 "><b>Última Actualização:</b>
                                {{ $directive->updated_at }}
                            </p>

                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->

        </div>
    </div>

@endsection

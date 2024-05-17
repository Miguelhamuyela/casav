@extends('layouts.merge.dashboard')
@section('titulo', 'Chaves das Inscrições')

@section('content')
    <div class="card mb-2">
        <div class="card-body">

            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h5 page-title">
                            Chaves das Inscrições
                        </h2>
                    </div>

                </div>
            </div>

        </div>
    </div>
    @isset($keys)
        <div class="card shadow">
            <div class="card-body">

                <div class="container-fluid">
                    <form action='{{ route('admin.key.update') }}' method="POST" class=" m-4">
                        @csrf
                        @method('PUT')
                        @include('forms._formKey.index')
                        <div class="col-md-12">

                            <div class="form-group text-center">
                                <button type="submit" class="btn px-5 col-md-4  btn-primary">
                                    Salvar alterações
                                    <span class="fe fe-chevron-right fe-16"></span>
                                </button>

                            </div>
                        </div>
                    </form>
                    <!-- .row -->
                    <div class="row align-items-center">
                        <div class="col-md-7 mb-2">
                            <hr>
                            <p class="mb-1 "><b>Data de Cadastro:</b> {{ $keys->created_at }}
                            </p>
                            <p class="mb-1 "><b>Última Actualização:</b> {{ $keys->updated_at }}
                            </p>

                        </div>
                    </div>
                </div> <!-- .container-fluid -->
            </div>
        </div>
    @endisset


@endsection

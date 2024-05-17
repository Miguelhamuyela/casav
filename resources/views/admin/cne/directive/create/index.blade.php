@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastrar Directiva')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="h5 page-title">
                        Cadastrar Directiva
                    </h2>
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#registerCategory">Cadastrar
                        Categoria</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#listCategory">Listar
                        Categorias</button>
                    @include('extra.modals.directiveCategory.register.index')
                    @include('extra.modals.directiveCategory.list.index')
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.directive.store') }}" method="POST" enctype="multipart/form-data"
                class="row">
                @csrf
                @include('forms._formDirective.index')
                <div class="col-md-12">

                    <div class="form-group text-center">
                        <button type="submit" class="btn px-5 col-md-4 btn-success">
                            Salvar
                            <span class="fe fe-chevron-right fe-16"></span>
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>



@endsection

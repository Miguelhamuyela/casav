@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Directivas')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="h5 page-title">
                        Lista de Directivas
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

            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>TITULO</th>
                        <th>CATEGORIA</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($directives as $item)
                        <tr class="text-center ">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }} </td>
                            @if ($item->category)
                                <td>{{ $item->category->title }}</td>
                            @else
                                <td>-</td>
                            @endif


                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ url("admin/directive/show/{$item->id}") }}'
                                            class="dropdown-item">Detalhes</a>

                                        <a href='{{ url("admin/directive/edit/{$item->id}") }}'
                                            class="dropdown-item">Editar</a>
                                        <a href='{{ url("admin/directive/delete/{$item->id}") }}'
                                            class="dropdown-item">Eliminar</a>


                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>



@endsection

@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Arquivos de Indexação')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Lista de Arquivos de Indexação
            </h2>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>#</th>
                        <th>TITULO</th>
                        <th>LINK</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($ftpfiles as $item)
                        <tr class="text-center ">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }} </td>

                            <td><a href="{{ $item->link }}" target="_blank" rel="noopener noreferrer">IR</a> </td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ route('admin.ftpfile.show', $item->id) }}'
                                            class="dropdown-item">Visualizar</a>

                                        <a href='{{ route('admin.ftpfile.edit', $item->id) }}'
                                            class="dropdown-item">Editar</a>


                                        <a href='{{ route('admin.ftpfile.delete', $item->id) }}' class="dropdown-item">
                                            Eliminar
                                        </a>



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

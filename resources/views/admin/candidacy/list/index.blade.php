@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Candidaturas')

@section('content')
    <div class="card mb-2">
        <div class="card-body">

            <div class="row">
                <div class="col-md-8">
                    <h2 class="h5 page-title">
                        {{ urldecode($perpage) }}
                    </h2>
                </div>
                <div class="col-md-4 text-end text-right">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#registerCategory">Reprovar
                        Candidaturas</button>
                    @include('extra.modals.candidacy.decline.index')
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="col-12">
            <div class="card-body">
                <form action="{!! route('admin.candidacy.index', urldecode($perpage)) !!}" class="row">
                    @csrf
                    <div class="col-12 col-md-8 form-group">
                        <label for="province_id">Pesquisar Candidaturas para o
                            {{ urldecode($perpage) }} por Província <small class="text-danger">*</small></label>

                        <select name="province_id" id="province_id" class="form-control border-secondary" required>
                            @if (isset($province->name))
                                <option value="{{ $province->ref }}" class="text-primary h6" selected>
                                    {{ $province->name }}
                                </option>
                            @else
                                <option disabled selected>selecione uma província</option>
                            @endif

                            <option value="Todas">Todas</option>
                            @foreach ($provinces as $item)
                                <option value="{{ $item->ref }}">{{ $item->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="" class="text-white">--</label><br>
                        <button class="btn btn-primary px-5" type="submit">Pesquisar</button><br>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="col-12 mt-1 text-center">
                <h4>{{ isset($province->name) ? $province->name : 'Todas as Candidaturas' }}</h4>
            </div>
            <div class="col-12">
                <table class="table table-hover table-bordered">
                    <thead class="bg-primary">
                        <tr class="text-center">
                            <th>NOME COMPLETO</th>
                            <th>Nº DO BILHETE DE IDENTIDADE</th>
                            <th>MUNICÍPIO</th>
                            <th>TELEFONE</th>
                            <th>IDADE</th>
                            <th>ESTADO</th>
                            <th>ACÇÕES</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">

                        @foreach ($candidacies as $item)
                            <tr class="text-center ">
                                <td class="text-left">{{ $item->name . ' ' . $item->surname }}</td>
                                <td>{{ $item->bi }} </td>
                                <td>{{ $item->county }} </td>
                                <td>{{ $item->tel }} </td>
                                <td>{{ date('Y') - date('Y', strtotime($item->birth)) }} anos </td>
                                <td>
                                    @if ($item->state == 'Aprovada')
                                        <b class="text-success">{{ $item->state }}</b>
                                    @elseif ($item->state == 'Não Aprovada')
                                        <b class="text-danger">{{ $item->state }}</b>
                                    @else
                                        <b>{{ $item->state }}</b>
                                    @endif

                                </td>
                                <td>
                                    <a href="{{ route('admin.candidacy.show', $item->bi) }}" class="btn btn-primary">
                                        + Detalhes
                                    </a>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <h6>{{ $candidacies->links() }}</h6>
                </div>
            </div>

        </div>
    </div>



@endsection

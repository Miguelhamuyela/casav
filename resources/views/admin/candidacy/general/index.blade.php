@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Candidatos Inscritos no Geral')

@section('content')
    <div class="card mb-2">
        <div class="card-body">

            <div class="row">
                <div class="col-md-8">
                    <h2 class="h5 page-title">
                        {{ urldecode($perpage) }}
                        <br>
                        Lista de Candidatos Inscritos no Geral
                    </h2>
                </div>

            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="col-12">
            <div class="card-body">
                <form action="{!! route('admin.candidacy.general.pdf.list', urldecode($perpage)) !!}" class="row">
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

            <div class="col-lg-12 mt-1 text-center">
                <h4>{{ isset($province->name) ? $province->name . ' - ' . $perprovince . ' Candidaturas' : 'Pesquise uma província acima!' }}
                </h4>
            </div>

            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>MUNÍCIPIO</th>
                        <th>TOTAL</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @isset($province->name)
                        @if (urldecode($perpage) == 'Recrutamento e Selecção de Candidatos a Digitalizadores para as Eleições Gerais de 2022' && $province->name == 'Luanda')
                            @foreach ($centers as $item)
                                <tr class="text-center">

                                    <td class="text-success"><b>Centro de Escrutínio Nacional</b></td>
                                    <td class="text-success"><b>{{ $item->candidacy_count }}</b></td>
                                    <td>
                                        <a href='{{ route('admin.candidacy.escrutinio.general.pdf') }}' target="_blank"
                                            class="btn btn-primary">
                                            Imprimir
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    @endisset
                    @foreach ($candidacies as $item)
                        <tr class="text-center">

                            <td>{{ $item->county }}</td>
                            <td> {{ $item->candidacy_count }} </td>
                            <td>
                                <a href='{{ url('admin/candidacy/general/pdf/' . urlencode($perpage) . '/' . $province->ref . '/' . $item->county) }}'
                                    target="_blank" class="btn btn-primary">
                                    Imprimir
                                </a>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>


@endsection

@extends('layouts.merge.site')
@section('titulo', 'Informações dos Concursos')
@section('content')
    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">

                        <h1>Informações dos Concursos</h1>
                        <h4 class="text-white">A publicação dos resultados dos concursos serão publicados na página oficial
                            da CNE em www.cne.ao</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <section class="ud-blog-grids mb-5 pt-5">
        <div class="container">
            <div class="col-md-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>CONCURSO</th>
                            <th>DATA DE REALIZAÇÃO</th>
                            <th>ESTADO</th>
                            <th>RESULTADOS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>RECRUTAMENTO E SELECÇÃO DE AGENTES ELEITORAIS NO EXTERIOR DO PAÍS PARA AS ELEIÇÕES GERAIS DE
                                24 DE AGOSTO DE 2022</td>
                            <td>04 E 05 DE JULHO DE 2022</td>
                            <td>ENCERRADO</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>RECRUTAMENTO
                                E SELECÇÃO DE MEMBROS DAS MESAS DAS ASSEMBLEIAS DE VOTO PARA AS ELEIÇÕES GERAIS DE 24 DE
                                AGOSTO DE 2022</td>
                            <td>27 A 29 DE JUNHO DE 2022</td>
                            <td>ENCERRADO</td>
                            <td></td>

                        </tr>
                        <tr>
                            <td>
                                RECRUTAMENTO E SELECÇÃO DE FORMADORES MUNICIPAIS PARA AS ELEIÇÕES GERAIS DE
                                24 DE AGOSTO DE 2022
                            </td>
                            <td>15 A 16 DE JUNHO DE 2022</td>

                            <td>ENCERRADO</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>RECRUTAMENTO E SELECÇÃO DE CANDIDATOS A DIGITALIZADORES PARA AS ELEIÇÕES GERAIS DE 2022</td>
                            <td>15 A 16 DE JUNHO DE 2022</td>
                            <td>ENCERRADO</td>
                            <td><a href="{{ route('site.candidacystatus.get') }}" class="text-white badge bg-success">ANÚNCIADO</a></td>
                        </tr>
                        <tr>
                            <td>RECRUTAMENTO E SELECÇÃO DE 4.174 FORMADORES MUNICIPAIS PARA AS ELEIÇÕES GERAIS DE 2022</td>
                            <td>13 A 15 DE JUNHO DE 2022</td>
                            <td>ENCERRADO</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>RECRUTAMENTO E SELECÇÃO DE CANDIDATOS A AGENTES DE EDUCAÇÃO CÍVICA ELEITORAL PARA AS
                                ELEIÇÕES GERAIS DE 24 DE AGOSTO DE 2022</td>
                            <td>04 A 06 DE MAIO DE 2022</td>
                            <td>ENCERRADO</td>

                            <td><b class="text-white badge bg-success">ANÚNCIADO<b></td>
                        </tr>
                        <tr>
                            <td>RECRUTAMENTO E SELECÇÃO DE FORMADORES PROVINCIAIS PARA AS ELEIÇÕES GERAIS 24 DE AGOSTO DE
                                2022</td>
                            <td>04 A 06 DE MAIO DE 2022</td>
                            <td>ENCERRADO</td>

                            <td><b class="text-white badge bg-success">ANÚNCIADO<b></td>

                        </tr>
                        <tr>
                            <td>RECRUTAMENTO E SELECÇÃO DOS CANDIDATOS A FORMADORES NACIONAIS PARA AS ELEIÇÕES GERAIS DE 24
                                DE AGOSTO DE 2022</td>
                            <td>04 A 06 DE MAIO DE 2022</td>
                            <td>ENCERRADO</td>

                            <td><b class="text-white badge bg-success">ANÚNCIADO<b></td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </section>


@endsection

@extends('layouts.merge.site')
@section('titulo', 'Lista dos Eleitores/Assembleias')
@section('content')
    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Lista dos Eleitores/{{ $assembly }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== eleitorylist Start ====== -->
    <section class="ud-blog-grids" style="margin-top:-70px;">
        <div class="container">
            <div class="row">
                <ol class="list-group">
                    @foreach ($assemblies as $item)
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <a href="/eleitorylistglobal/{{ $assembly.'/'.$item->assembly }}.pdf" target="_blank"
                                class="ms-2 me-auto">
                                <div class="fw-bold">Assembleia Nº {{ $item->assembly }}</div>
                            </a>
                        </li>
                    @endforeach


                </ol>

            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-4">
                    <h6>{{ $assemblies->links() }}</h6>
                </div>
            </div>

        </div>
    </section>
    <!-- ====== eleitorylist End ====== -->


@endsection

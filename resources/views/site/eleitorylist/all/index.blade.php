@extends('layouts.merge.site')
@section('titulo', 'Lista dos Eleitores')
@section('content')
    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Lista dos Eleitores</h1>
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

                    @foreach ($elements as $item)

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <a href="{{ route('site.eleitorylist.show', urlencode($item->locale)) }}" class="ms-2 me-auto">
                                <div class="fw-bold">{{ $item->locale }}</div>
                            </a>
                            <span class="badge bg-primary rounded-pill">{{ $item->list_count }}</span>
                        </li>
                    @endforeach


                </ol>
            </div>

        </div>
    </section>
    <!-- ====== eleitorylist End ====== -->


@endsection

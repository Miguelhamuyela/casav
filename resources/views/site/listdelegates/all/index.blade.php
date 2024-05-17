@extends('layouts.merge.site')
@section('titulo', 'Delegados de Lista')
@section('content')
    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Delegados de Lista</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== listdelegates Start ====== -->
    <section class="ud-blog-grids" style="margin-top:-70px;">
        <div class="container">
            <div class="row">

                <ol class="list-group">

                    @foreach ($provinces as $item)

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <a href="{{ route('site.listdelegates.show', urlencode($item->province)) }}" class="ms-2 me-auto">
                                <div class="fw-bold">{{ $item->province }}</div>
                            </a>
                        </li>
                    @endforeach


                </ol>
            </div>

        </div>
    </section>
    <!-- ====== listdelegates End ====== -->


@endsection

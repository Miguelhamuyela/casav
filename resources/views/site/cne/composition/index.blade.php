@extends('layouts.merge.site')
@section('titulo', ' Composição')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Composição</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->




    <!-- ====== composition  Start ====== -->
    @foreach ($compositons as $item)
        <section class="ud-blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5">
                        <h2 class="ud-blog-details-title">
                            {{ $item->title }}
                        </h2>
                        <div style="text-align:justify;" class="col-md-12 text-justify my-5">
                            {!! html_entity_decode($item->information) !!}
                        </div>

                    </div>

                </div>
                <div class="col-12 mb-5">
                    <div class="row text-center justify-content-center mx-auto">
                        @foreach ($members as $item)
                            @if ($item->function == 'Presidente da CNE')
                                <div class="col-md-4 shadow-lg border-dark mt-1">
                                    <div
                                        style='background-image:url("/storage/{{ $item->photo }}");background-position:center;background-size:cover;height:300px;'>
                                    </div>
                                    <div class="p-4">

                                        <h4>{{ $item->name }}</h4>
                                        <h6>{{ $item->function }}</h6>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                    <div class="row">
                        @foreach ($members as $item)
                            @if ($item->function != 'Presidente da CNE')
                                <div class="col-md-4 shadow-lg border-dark mt-1">
                                    <div
                                        style='background-image:url("/storage/{{ $item->photo }}");background-position:center;background-size:cover;height:300px;'>
                                    </div>
                                    <div class="p-4">

                                        <h4>{{ $item->name }}</h4>
                                        <h6>{{ $item->function }}</h6>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <!-- ====== composition  End ====== -->

@endsection

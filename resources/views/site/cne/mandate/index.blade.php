@extends('layouts.merge.site')
@section('titulo', ' Mandato')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Mandato</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== mandate  Start ====== -->
    @foreach ($mandates as $item)


        <section class="ud-blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <h2 class="ud-blog-details-title">
                            {{ $item->title }}

                        </h2>

                        <div  style="text-align:justify;" class="col-md-12 text-justify my-5">
                            {!! html_entity_decode($item->information) !!}
                        </div>

                    </div>
                </div>
            </div>
        </section>

    @endforeach
    <!-- ====== mandate  End ====== -->

@endsection

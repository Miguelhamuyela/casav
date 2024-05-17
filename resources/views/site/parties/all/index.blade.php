@extends('layouts.merge.site')
@section('titulo', ' Partidos')
@section('content')
    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Partidos</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== Blog Start ====== -->
    <section class="ud-blog-grids" style="margin-top:-70px;">
        <div class="container">
            <div class="col-12">
                @foreach ($parties as $item)
  
                    <br>
                    <a href="{!! url('/partidos/' . urlencode($item->parties)) !!}" class="text-dark mb-2">
                        <i class="lni lni-arrow-right"></i>
                        <u>{{ $item->parties }}</u>
                    </a>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <h6>{{ $parties->links() }}</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Blog End ====== -->


@endsection

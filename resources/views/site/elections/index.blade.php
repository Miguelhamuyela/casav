@extends('layouts.merge.site')
@section('titulo', ' Eleições')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Eleições - {{ $election->date }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== election Start ====== -->
    <section class="ud-blog-details">
        <div class="container-fluid" style="margin-top:-50px;">
            @if ($election->images)
                @foreach ($election->images as $item)
                    <div class="col-12" style="margin-bottom:10px;">
                        <img src="/storage/{{ $item->path }}">
                    </div>
                @endforeach
            @endif
        </div>
    </section>
    <!-- ====== election End ====== -->


@endsection

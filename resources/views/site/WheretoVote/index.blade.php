@extends('layouts.merge.site')
@section('titulo', 'Onde Votar?')
@section('content')
    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Onde Votar?</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== WheretoVote Start ====== -->
    <section class="ud-blog-grids" style="margin-top:-70px;">

            <iframe src="https://votar.cneangola.com" width="100%" height="1200px"></iframe>

    </section>
    <!-- ====== WheretoVote End ====== -->


@endsection

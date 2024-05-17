@extends('layouts.merge.site')
@section('titulo', 'Presidente')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Presidente</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== estruture Start ====== -->

    @foreach ($presidents as $item)
        <section class="ud-blog-details">
            <div class="container">
                <div class="row d-flex">

                  <h3 class="text-center">{{ $item->title }}</h3>

                  <div style="margin-top:55px;" class="offset-lg-1 col-lg-5 col-md-5 col-12">
                    <div class="text-center">
                        <img style="" class="text-center" src="/storage/{{ $item->file }}"
                            class="img-fluid d-block" />
                    </div>

                  </div>

                  <div class="col-lg-5 col-md-5 col-12">
                      <div class="mb-5 mb-lg-0">

                          <div style="text-align:justify;" class="col-md-12 text-dark my-5">
                              {!! html_entity_decode($item->information) !!}
                          </div>

                      </div>
                  </div>

                </div>
            </div>
        </section>
    @endforeach
    <!-- ====== estruture End ====== -->


@endsection

@extends('layouts.merge.site')
@section('titulo', 'Endereço das CPFs')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Endereço das CPFs</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <section class="ud-blog-grids" style="margin-top:-70px;">
        <div class="container">

            <div class="col-md-12 text-left">

                @foreach ($alphabet as $letter)

                    <div class="col-1 mb-3 mt-5" style="background-color:#3c9ee0; width: 50px;">
                        <h3 class="text-white text-center">{{ $letter }}</h3>
                    </div>
                    @foreach ($cpfs as $item)
                        @isset($item->country)

                            @if ($item->country[0] == $letter)
                                @include('extra.cpf.div.index')
                            @endif
                        @else
                            @if (strtoupper($item->name[0]) == $letter)
                                @include('extra.cpf.div.index')
                            @endif
                        @endisset
                    @endforeach
                @endforeach


            </div>


        </div>

    </section>


@endsection

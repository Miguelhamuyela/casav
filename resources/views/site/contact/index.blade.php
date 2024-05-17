@extends('layouts.merge.site')
@section('titulo', 'Contactos')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1> Contactos</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <section class="ud-blog-grids mb-5">
        <div class="container">

            <div class="row">


                <div class="col-md-5 p-5 mt-4 shadow-lg">

                    <h4 class="text-center mb-5">Estamos aqui para ajudá-lo</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('site.help.email') }}"
                        class="row text-center justify-content-center">

                        @csrf
                        <div class="form-group my-2">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control " autofocus name="name" id="name">
                        </div>
                        <div class="form-group my-2">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group my-2">
                            <label for="subject">Assunto</label>
                            <input type="text" class="form-control" name="subject" id="subject">
                        </div>

                        <div class="form-group my-2">
                            <label for="msg">Mensagem</label> <br>
                            <textarea name="msg" id="msg" class="form-control " rows="3"></textarea>
                        </div>
                        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                {!! RecaptchaV3::field('register') !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group text-center mt-2">
                            <button class="btn btn-primary col-md-6" type="submit">Submeter</button>
                        </div>
                    </form>

                </div>

                <div class="col-md-5 mt-4 mx-5">
                    <div class="col-md-12 mb-5 text-dark">
                        <h4>Endereço das CPFs</h4>
                        <p>Para votar no Estrangeiro</p>

                    </div>

                    @foreach ($alphabet as $letter)
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
                    <div class="col-md-12 mb-5 text-center">
                        <h5 class="text-dark"> <a href="{{ route('site.cpf') }}">Ver Todas...</a></h5>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4">

                <div class="row text-center shadow-lg p-5 border-dark">
                    <div class="col-md-4">
                        <p> <i class="lni lni-map-marker"></i> Endereço <br> {{ $configuration->adress }}</p>
                    </div>
                    <div class="col-md-4">
                        <p> <i class="lni lni-phone"></i> Telefone <br> {{ $configuration->telefone }}</p>
                    </div>
                    <div class="col-md-4">
                        <p> <i class="lni lni-envelope"></i> Email <br> {{ $configuration->email }}</p>
                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection

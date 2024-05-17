<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8">
    <title>CNE - @yield('titulo')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="title" content="Portal Oficial da Comissão Nacional Eleitoral" />
    <meta name="description" content="Portal Oficial da Comissão Nacional Eleitoral" />
    <meta name="keywords" content="Portal Oficial da Comissão Nacional Eleitoral" />

    <meta property="og:title"
        content="Portal Oficial da CNE, CNE, Comissão Nacional Eleitoral, Eleições, Partidos Políticos" />
    <meta property="og:site_name" content="Portal Oficial da Comissão Nacional Eleitoral" />
    <meta property="og:description" content="Portal Oficial da Comissão Nacional Eleitoral" />
    <meta property="og:type" content="article" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/logotipo/icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/logotipo/icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/logotipo/icon.png">



    {{-- sweetalert --}}
    <link rel="stylesheet" href="/css/sweetalert2.css">
    <script src="/js/sweetalert2.all.min.js"></script>


    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="/site/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/site/css/animate.css" />
    <link rel="stylesheet" href="/site/css/lineicons.css" />
    <link rel="stylesheet" href="/site/css/ud-styles.css" />
    <link rel="stylesheet" href="/site/css/mystyles.css" />

    @include('extra.3rtparty.google.index')
    @include('extra.3rtparty.facebook.index')

    {!! RecaptchaV3::initJs() !!}

    @yield('CSSJS')
</head>
<body>

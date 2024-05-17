<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/var/www/cne/public/generatepdf/bootstrap.min.css" />

    <title>Comprovativo de Candidatura Aprovada Nº {{ $candidacy->bi }}</title>
    <style>
        * {

            font-family: "Arial";
            font-weight: normal;
            font-style: normal;
        }

        .blue {
            color: #20409A;
        }

    </style>
</head>

<body>

    <header class="col-12 mt-2 mb-5">
        <div class="col-12 text-center">
            <img src="/var/www/cne/public/images/logotipo/2022.png" width="400">

        </div>

        <p class="mt-4">
        <h5 class="text-center blue">
            Comprovativo de Candidatura Aprovada
            <br>Passe Nº <b>{{ $candidacy->id }}</b>
        </h5>
    </header>

    <section class="col-12 text-left">
        <h6>
            <b>Data do Teste: </b>{{ date('d/m/Y', strtotime($candidacy->test_at)) }}<br>
            <b>Hora do Teste: </b>{{ date('H:i', strtotime($candidacy->test_at)) }}<br>
            <b>Localização:</b> Bairro dos Coqueiros, Rua dos Coqueiros nº203, Edifício Margaret Anstee - Luanda<br>
            <b>Recomendações</b><br>
            <ul class="mt-2">
                <li>Chegar com 5 minutos de antecedência.</li>
                <li>Dirigir-se ao Centro Nacional de Escrutínio</li>
                <li>Fazer-se acompanhar do Bilhete de Identidade(Original)</li>
                <li>Só será autorizado a entrada do portador do Comprovativo</li>
                <li>Não se fazer acompanhado(a) de Crianças</li>
                <li>Este Comprovativo é pessoal e intransmissível.</li>
                <li>O uso de forma visível é obrigatório</li>
            </ul>

        </h6>
        <h3 class="mt-5 text-center"> <b>{{ $candidacy->name . ' ' . $candidacy->surname }}</b></h3>
    </section>
    <footer class="bg-success text-white text-center py-4">
        <h1><b>Teste a Digitalizadores</b></h1>
    </footer>

</body>

</html>

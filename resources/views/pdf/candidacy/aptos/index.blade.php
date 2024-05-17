<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="/var/www/cne/public/generatepdf/bootstrap.min.css" />

    <title>{{ urldecode($perpage) }} - {{ $province->name }} - {{ $county }}</title>
    <style>
        * {

            font-family: "Arial";
            font-weight: normal;
            font-style: normal;
        }

        .blue {
            color: #20409A;
        }
        table { page-break-inside:auto; }
        tr    { page-break-inside:avoid; page-break-after:auto; }
        thead { display:table-header-group; }
        tfoot { display:table-footer-group; }


    </style>
</head>

<body>

    <header class="col-12 mt-2 mb-5">
        <div class="col-12 text-center">
            <img src="/var/www/cne/public/images/logotipo/2022.png" width="250">

        </div>

        <p class="mt-2">
        <h5 class="text-center blue">
            {{ urldecode($perpage) }}
            <br> Lista de Candidatos Aprovados

            <br>{{ $province->name }} - {{ $county }}
        </h5>


        <b>Total de Candidaturas Aprovadas para o Munícipio do(a) {{ $county }} :</b> {!! count($candidacies) !!}
        </p>
    </header>

    <section class="col-12">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th>Nº</th>
                    <th>Nome</th>
                    <th>Bilhete de Identidade</th>
                    <th>Opção de Candidatura</th>
                </tr>
            </thead>
            <tbody>

                @php $i = 1; @endphp
                @foreach ($candidacies as $item)
                    <tr class="text-center text-dark">
                        <td>{{ $i++ }}</td>
                        <td class="text-left">{{ $item->name . ' ' . $item->surname }} </td>
                        <td>{{ $item->bi }} </td>

                        <td class="text-left">{{ $item->placeregion }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>

</body>

</html>

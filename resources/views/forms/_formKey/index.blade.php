<div class="col-md-12 my-5">
    <h5 class="" for="first">
        <b> Recrutamento e Selecção de Candidatos a Digitalizadores para as Eleições Gerais de 2022</b>
        <span class="text-white p-2 badge bg-{!! $keys->first == 'Ativado' ? 'success' : 'danger' !!}">{{ $keys->first }}</span>
    </h5>
    <select name="first" id="first" class="form-control col-12 col-md-4 col-lg-3">
        @if (isset($keys->first))
            <option value="{{ $keys->first }}" class="text-primary h6" selected>
                {{ $keys->first }}
            </option>
        @else
            <option disabled selected>Selecione o Estado</option>
        @endif

        <option value="Ativado">Ativado</option>
        <option value="Desativado">Desativado</option>
    </select>

</div>

<div class="col-md-12 my-5">
    <h5 class="" for="second">
        <b> Recrutamento e Selecção de Formadores Municipais para as Eleições Gerais de 2022</b>
        <span class="text-white p-2 badge bg-{!! $keys->second == 'Ativado' ? 'success' : 'danger' !!}">{{ $keys->second }}</span>
    </h5>
    <select name="second" id="second" class="form-control col-12 col-md-4 col-lg-3">
        @if (isset($keys->second))
            <option value="{{ $keys->second }}" class="text-primary h6" selected>
                {{ $keys->second }}
            </option>
        @else
            <option disabled selected>Selecione o Estado</option>
        @endif

        <option value="Ativado">Ativado</option>
        <option value="Desativado">Desativado</option>
    </select>
</div>

<div class="col-md-12 my-5">
    <h5 class="" for="third">
        <b> Recrutamento e Selecção de Membros das Mesas das Assembleias de Voto para as Eleições Gerais de 2022</b>
        <span class="text-white p-2 badge bg-{!! $keys->third == 'Ativado' ? 'success' : 'danger' !!}">{{ $keys->third }}</span>

    </h5>
    <select name="third" id="third" class="form-control col-12 col-md-4 col-lg-3">
        @if (isset($keys->third))
            <option value="{{ $keys->third }}" class="text-primary h6" selected>
                {{ $keys->third }}
            </option>
        @else
            <option disabled selected>Selecione o Estado</option>
        @endif


        <option value="Ativado">Ativado</option>
        <option value="Desativado">Desativado</option>
    </select>
</div>

<div class="col-md-6 col-lg-4 col-12">
    <div class="form-group">
        <label for="province_id">Província <small class="text-danger">*</small></label>

        <select name="province_id" id="province_id" class="form-control" onchange="getprovince(this.value)" required>
            <option disabled selected>Selecione uma província</option>

            @foreach ($provinces as $item)
                <option value="{{ $item->ref }}">{{ $item->name }}</option>
            @endforeach

        </select>
    </div>
</div>

<div class="col-md-6 col-lg-4 col-12">
    <div class="form-group" id="wrapper-county">
        <label for="county">Município <small class="text-danger">*</small></label>
        <select name="county" id="county" class="form-control" required>

        </select>
    </div>
</div>

<div class="col-md-6 col-lg-4 col-12">
    <div class="form-group">

        <label for="option">Opção para Candidatura <small class="text-danger">*</small></label>

        <select name="placeregion" id="option" class="form-control" required>

            <option disabled selected>Selecione uma opção para candidatura</option>
            @isset($others)
                <option value="Centro de Escrutínio Nacional" id="cen">Centro de Escrutínio Nacional</option>
                <option value="Comissão Provincial Eleitoral">Comissão Provincial Eleitoral</option>
                <option value="Comissão Municipal Eleitoral">Comissão Municipal Eleitoral</option>
            @else
                <option value="Comissão Municipal Eleitoral">Comissão Municipal Eleitoral</option>
            @endisset
        </select>

    </div>
</div>


<div class="col-md-6 col-lg-4 col-12">
    <div class="form-group">
        <label for="bi">Nº do Bilhete de Identidade <small class="text-danger">*</small></label>
        <input type="text" class="form-control" placeholder="Ex:. 000123321LA000" value="{{ old('bi') }}"
            autofocus name="bi" id="bi" required>
    </div>
</div>

<div class="col-md-6 col-lg-4 col-12">
    <div class="form-group">
        <label for="name">Nome <small class="text-danger">*</small></label>
        <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="name" required>
    </div>
</div>
<div class="col-md-6 col-lg-4 col-12">
    <div class="form-group">
        <label for="surname">Apelido <small class="text-danger">*</small></label>
        <input type="text" class="form-control" placeholder="Ex:. Fernandes dos Santos" value="{{ old('surname') }}"
            name="surname" id="surname" required>
    </div>
</div>
<div class="col-md-6 col-lg-6 col-12">
    <div class="form-group">
        <label for="father">Nome do Pai</label>
        <input type="text" class="form-control" value="{{ old('father') }}" name="father" id="father">
    </div>
</div>
<div class="col-md-6 col-lg-6 col-12">
    <div class="form-group">
        <label for="mother">Nome da Mãe</label>
        <input type="text" class="form-control" value="{{ old('mother') }}" name="mother" id="mother">
    </div>
</div>
<div class="col-md-6 col-lg-4 col-12">
    <div class="form-group">
        <label for="birth">Data de Nascimento <small class="text-danger">*</small></label>
        <input type="date" class="form-control" value="{{ old('birth') }}" name="birth" id="birth" required>
    </div>
</div>

<div class="col-md-6 col-lg-8 col-12">
    <div class="form-group">
        <label for="residence">Residência <small class="text-danger">*</small></label>
        <input type="text" class="form-control" value="{{ old('residence') }}" name="residence"
            placeholder="Ex:. Bairro dos Coqueiros, Rua dos Coqueiros n.º 203, Edifício Margaret Anstee, Luanda"
            id="residence" required>
    </div>
</div>

<div class="col-md-6 col-lg-4 col-12">
    <div class="form-group">
        <label for="email">Email <small class="text-danger">*</small></label>
        <input type="email" class="form-control" placeholder="Ex:. usuario@servidor.dominio"
            value="{{ old('email') }}" name="email" id="email" required>
    </div>
</div>
<div class="col-md-6 col-lg-4 col-12">
    <div class="form-group">
        <label for="tel">Telefone <small class="text-danger">*</small></label>
        <input type="number" class="form-control" placeholder="Ex:. +244900000000" value="{{ old('tel') }}"
            name="tel" id="tel" required>
    </div>
</div>

<div class="col-md-6 col-lg-4 col-12">
    <div class="form-group">
        <label for="qualifications">Habilitações Literárias <small class="text-danger">*</small></label>
        <input type="text" class="form-control" placeholder="Ex:. Técnico Médio"
            value="{{ old('qualifications') }}" name="qualifications" id="qualifications" required>
    </div>
</div>

<div class="col-md-4 col-lg-4 col-12">
    <div class="form-group">
        <label for="ocupation">Ocupação <small class="text-danger">*</small></label>
        <input type="text" class="form-control" placeholder="Ex:. Estudante Universitário"
            value="{{ old('ocupation') }}" name="ocupation" id="ocupation" required>
    </div>
</div>

<div class="col-md-4 col-lg-4 col-12">
    <div class="form-group">
        <label for="eleitorycard">Cartão de Eleitor Nº</label>
        <input type="text" class="form-control" value="{{ old('eleitorycard') }}" name="eleitorycard"
            id="eleitorycard">
    </div>
</div>
<div class="col-md-4 col-12">
    <div class="form-group">
        <label for="group">Grupo</label>
        <input type="text" class="form-control" value="{{ old('group') }}" name="group" id="group">
    </div>
</div>

{{-- docs --}}
<div class="row pt-4">
    <div class="col-md-4">
        <hr>
    </div>
    <div class="col-md-4 text-center">Anexo dos Documentos Escaneados</div>
    <div class="col-md-4">
        <hr>
    </div>
</div>

<div class="col-12 pt-3">
    <div class="form-group">
        <label class="form-label" for="doc_bi">
            Selecione a Cópia do BI <small class="text-danger">*</small><br>
            <small class="text-danger"> (Tamanho Máximo: 2MB | Extensões permitidas: pdf, jpg, jpeg, png)</small>
        </label>
        <input type="file" class="form-control" name="doc_bi" id="doc_bi" required>

    </div>
</div> <!-- /.col -->
<div class="col-12 pt-3">
    <div class="form-group">
        <label class="form-label" for="doc_covid">
            Selecione o Certificado de Vacinação (Covid 19) <small class="text-danger">*</small><br>

            <small class="text-danger"> (Tamanho Máximo: 2MB | Extensões permitidas: pdf, jpg, jpeg, png)</small>
        </label>
        <input type="file" class="form-control" name="doc_covid" id="doc_covid" required>

    </div>
</div> <!-- /.col -->
<div class="col-12 pt-3">
    <div class="form-group">
        <label class="form-label" for="doc_qualifications">
            Selecione uma Declaração ou Certificado de Habilitações Literárias <small
                class="text-danger">*</small><br>
            <small class="text-danger"> (Tamanho Máximo: 2MB | Extensões permitidas: pdf, jpg, jpeg, png)</small>
        </label>
        <input type="file" class="form-control" name="doc_qualifications" id="doc_qualifications" required>
    </div>
</div> <!-- /.col -->


{{-- google recaptcha --}}
<div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
    <div class="col-md-12">
        {!! RecaptchaV3::field('register') !!}
        @if ($errors->has('g-recaptcha-response'))
            <span class="help-block">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </span>
        @endif
    </div>
    {{-- PERPAGE --}}
    <input type="text" value="@yield('titulo')" name="perpage" required hidden>
</div>


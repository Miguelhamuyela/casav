<div class="col-md-6">
    <div class="form-group">
        <label for="name">Nome*</label>
        <input type="text" name="name" id="name" value="{{ isset($cpf->name) ? $cpf->name : old('name') }}"
            class="form-control border-secondary" placeholder="Nome" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <label for="country">Pais do CPF*</label>
        <select name="country" id="country" class="form-control border-secondary">
            @if (isset($cpf->country))
                <option value="{{ $cpf->country }}" class="text-primary h6" selected>
                    {{ $cpf->country }}
                </option>
            @else
                <option disabled  value=" " label="selecione um pais... " selected="selected">selecione um pais...</option>
            @endif

            @include('extra.country.index')

        </select>
    </div>
</div>

</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="name">Link do WebSite</label>
        <input type="text" name="link" id="link" value="{{ isset($cpf->link) ? $cpf->link : old('link') }}"
            class="form-control border-secondary" placeholder="Link do WebSite">
    </div>
</div> <!-- /.col -->

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Descrição do CPF</h5>
            <p>Digite a Descrição do CPF</p>
            <!-- Create the editor container -->
            <textarea name="description" id="editor1" style="min-height:300px; min-width:100%">
       {{ isset($cpf->description) ? $cpf->description : '' }}
        </textarea>
        </div>
    </div>
</div>

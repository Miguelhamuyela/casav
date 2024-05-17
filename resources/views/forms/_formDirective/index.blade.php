<div class="col-md-6">
    <div class="form-group">
        <label for="title">Titulo </label>
        <input type="text" name="title" id="title" value="{{ isset($directive->title) ? $directive->title : '' }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>
</div> <!-- /.col -->
<div class="col-md-6">
    <div class="form-group">
        <label for="fk_idCategory">Categoria da Directiva</label>
        <select name="fk_idCategory" id="fk_idCategory" class="form-control" required>
            @if (isset($directive->fk_idCategory))
                <option value="{{ $directive->fk_idCategory }}" class="text-primary h6" selected>
                    {{ $directive->category->title }}
                </option>
            @else
                <option disabled selected>selecione a categoria</option>
            @endif
            @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->title }}</option>

            @endforeach

        </select>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <label for="link">Arquivo </label>
        <input type="file" name="file" id="file" value="{{ isset($directive->file) ? $directive->file : '' }}"
            class="form-control border-secondary">
    </div>
</div> <!-- /.col -->

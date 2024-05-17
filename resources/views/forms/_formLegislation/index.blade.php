<div class="col-md-4">
    <div class="form-group">
        <label for="legislation">Categoria da Legislação</label>
        <select name="legislation" id="legislation" class="form-control" required>
            @if (isset($legislation->legislation))
                <option value="{{ $legislation->legislation }}" class="text-primary h6" selected>
                    {{ $legislation->legislation }}
                </option>
            @else
                <option disabled selected>selecione a categoria</option>
            @endif

            <option value="Constituição Da República De Angola">Constituição Da República De Angola</option>
            <option value="Legislação Eleitoral">Legislação Eleitoral</option>
            <option value="Legislação Complementar">Legislação Complementar</option>
        </select>

    </div>
</div> <!-- /.col -->
<div class="col-md-8">
    <div class="form-group">
        <label for="title">Titulo da Legislação</label>
        <input type="text" name="title" id="title" value="{{ isset($legislation->title) ? $legislation->title : '' }}"
            class="form-control border-secondary" placeholder="Titulo da Legislação" required>
    </div>
</div> <!-- /.col -->
<div class="col-md-12">
    <div class="form-group">
        <label for="file">Selecione o ficheiro</label>
        <input type="file" name="file" id="file" value="{{ isset($legislation->file) ? $legislation->file : '' }}"
            class="form-control border-secondary">
    </div>
</div> <!-- /.col -->

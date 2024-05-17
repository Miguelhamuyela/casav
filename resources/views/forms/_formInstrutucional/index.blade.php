<div class="col-md-6">
    <div class="form-group">
        <label for="title">Titulo </label>
        <input type="text" name="title" id="title" value="{{ isset($institucion->title) ? $institucion->title : '' }}"
            class="form-control border-secondary" placeholder="Titulo do regulamento" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <label for="link">Arquivo </label>
        <input type="file" name="file" id="file" value="{{ isset($institucion->file) ? $institucion->file : '' }}"
            class="form-control border-secondary" required>
    </div>
</div> <!-- /.col -->

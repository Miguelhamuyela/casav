<div class="col-lg-6">
    <div class="form-group">
        <label for="name">Titulo do Ficheiro</label>
        <input type="text" name="name" id="name" value="{{ isset($news->name) ? $news->name : old('name') }}"
            class="form-control border-secondary" placeholder="Titulo do Ficheiro" required>
    </div>
</div> <!-- /.col -->

<div class="col-lg-6">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="file">Selecione o Ficheiro</label>
            <input type="file" class="form-control" name="file" value="{{ old('file') }}" id="file">
            <small class="text-danger">Extensões permitidas: jpeg, png, jpg, pdf, ppt, pptx</small>
        </div>
    </div>
</div> <!-- /.col -->

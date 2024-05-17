<div class="col-md-8">
    <div class="form-group">
        <label for="name">Titulo</label>
        <input type="text" name="title" id="title" value="{{ isset($audio->title) ? $audio->title : '' }}"
            class="form-control border-secondary" placeholder="Titulo do Áudio" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-4">
    <div class="form-group">
        <label for="dateAudio">Data de Gravação do Áudio</label>
        <input type="date" name="dateAudio" id="dateAudio"
            value="{{ isset($audio->dateAudio) ? $audio->dateAudio : '' }}" class="form-control border-secondary"
            required>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <label for="audio">Carregue o Áudio</label>
        <input value="{{ isset($audio->file) ? $audio->file : '' }}" class="form-control border-secondary" type="file"
            name="audio" id="audio">

    </div>
</div> <!-- /.col -->

<div class="col-md-12">
    <div class="form-group">
        <label for="description">Descrição</label>
        <input type="text" name="description" id="description"
            value="{{ isset($audio->description) ? $audio->description : '' }}" class="form-control border-secondary"
            placeholder="Descrição do Áudio" required>
    </div>
</div> <!-- /.col -->

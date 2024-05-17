<div class="col-md-6">
    <div class="form-group">
        <label for="title">Titulo </label>
        <input type="text" name="title" id="title"
            value="{{ isset($deliberation->title) ? $deliberation->title : '' }}" class="form-control border-secondary"
            placeholder="Titulo " required>
    </div>
</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <label for="link">Arquivo </label>
        <input type="file" name="file" id="file" value="{{ isset($deliberation->file) ? $deliberation->link : '' }}"
            class="form-control border-secondary" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-8">
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{ isset($election->title) ? $election->title : '' }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="date">Ano da Eleição</label>
        <input type="number" name="date" id="date"
            value="{{ isset($election->date) ? $election->date : '' }}"
            class="form-control border-secondary" placeholder="Ano da Eleição" required>
    </div>
</div>

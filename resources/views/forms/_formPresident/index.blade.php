@if ($presidents->file)
    <div class="col-12 mb-4">
        <div class="row">
            <div class="col-md-12 text-left mt-2">
                <h4>Foto do presidente</h4>
            </div>
            <div class="col-md-4"
                style='background-image:url("/storage/{{ $presidents->file }}");background-position:center;background-size:cover;height:400px;'>
            </div>
        </div>
    </div>
@endif



<div class="col-md-12">
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{ isset($presidents->title) ? $presidents->title : '' }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>
</div> <!-- /.col -->


<div class="col-md-12">
    <div class="form-group">
        <label for="file">Imagem do presidente</label>
        <input type="file" name="file" id="file" value="{{ old('file') }}" class="form-control border-secondary"
            placeholder="Titulo">
    </div>
</div>
<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Corpo da Matéria</h5>
            <p>Digite o corpo da matéria</p>
            <!-- Create the editor container -->
            <textarea name="information" id="editor1" style="min-height:300px; min-width:100%">
       {{ isset($presidents->information) ? $presidents->information : '' }}
        </textarea>
        </div>
    </div>
</div>

@isset($parties)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Capa Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $parties->image }}");background-position:center;background-size:cover;height:200px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-8">
    <div class="form-group">
        <label for="parties">Nome do partido</label>
        <input type="text" name="parties" id="parties" value="{{ isset($parties->parties) ? $parties->parties : '' }}"
            class="form-control border-secondary" placeholder="Nome do Partido" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-4">
<div class="form-group">
    <label for="date">Date de Inserção</label>
    <input type="date" name="date" id="date" value="{{ isset($parties->date) ? $parties->date : '' }}"
        class="form-control border-secondary" required>
</div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="image">Selecione a Capa</label>
            <input type="file" class="form-control" name="image" value="{{ old('image') }}" id="image">

        </div>
    </div>
</div>
</div> <!-- /.col -->


<!-- /.col -->

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Corpo da Matéria</h5>
            <p>Digite o a descrição do partido</p>
            <!-- Create the editor container -->
            <textarea name="body" id="editor1"   style="min-height:300px; min-width:100%">
           {{ isset($parties->body) ? $parties->body : '' }}
            </textarea>
        </div>
    </div>
</div>

@isset($member)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Foto Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $member->photo }}");background-position:center;background-size:cover;height:400px;width:500px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-8">
    <div class="form-group">
        <label for="name">Nome Completo</label>
        <input type="text" name="name" id="name" value="{{ isset($member->name) ? $member->name : '' }}"
            class="form-control border-secondary" placeholder="Nome Completo" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-4">
    <div class="form-group">
        <label for="function">Função/Cargo</label>
        <input type="text" name="function" id="function"
            value="{{ isset($member->function) ? $member->function : '' }}" class="form-control border-secondary"
            placeholder="Função/Cargo" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-12">
    <div class="form-group">
        <label for="photo">Selecione a foto de capa</label>
        <input value="{{ isset($member->photo) ? $member->photo : '' }}" class="form-control border-secondary"
            type="file" name="photo" id="photo" required>

    </div>
</div> <!-- /.col -->

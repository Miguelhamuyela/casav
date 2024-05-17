@isset($structure)


    <div class="col-12 col-lg-12">
        <div class="col-md-12 text-left mt-2">
            <h4>Imagem da Estrutura Orgânica</h4>
        </div>
        <div class="card-deck mb-4">

            @if ($structure->file != '/site/images/estruture/index.jpg')
                <div class="card border-0 bg-transparent">
                    <div class="card-img-top img-fluid rounded"
                        style='background-image:url("/storage/{{ $structure->file }}");background-position:center;background-size:cover;height:1000px;'>
                    </div>
            @endif


        </div> <!-- .card -->


    </div> <!-- .card-deck -->

@endisset

<div class="col-md-12">
    <div class="form-group">
        <div class="custom-file">
            <label for="file">Selecione a Capa</label>
            <input type="file" class="form-control" name="file" id="file" required>
        </div>
    </div>
</div> <!-- /.col -->

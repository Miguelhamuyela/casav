<div class="modal fade" id="registerCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-left">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">
                    Tem a Certeza que deseja reprovar candidaturas
                    do {{ urldecode($perpage) }} com o estado recebida?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{!! route('admin.candidacy.decline', urldecode($perpage)) !!}" method="POST">
                <div class="modal-body">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="state" class="col-form-label">Estado da Candidatura</label>
                        <input type="text" class="form-control" id="state" name="state" value="Não Aprovada" readonly>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>

            </form>
        </div>
    </div>
</div>

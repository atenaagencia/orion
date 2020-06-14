  <div class="modal fade" id="VinculoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Informação de Vinculo</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body ">@include('vinculos.forms.form_vinculo')</div>
        <div class="modal-footer">
          <button class="btn text-white" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-purple" href="#" data-dismiss="modal">Sair</a>
        </div>
      </div>
    </div>
  </div>
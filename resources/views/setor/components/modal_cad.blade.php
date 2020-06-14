<div class="modal fade" id="CargosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inclusão de Setor</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body ">
       <div class="row">
        <label for="teste1" id="1" class="select col-sm-3 text-center border-purple border">
          <input type="checkbox" name="teste" id="teste1" class="teste d-none">
          Teste
        </label>
        <label for="teste2" id="2" class=" select col-sm-3 text-center border-purple border">
          <input type="checkbox" name="teste" id="teste2" class="teste d-none">
          Teste
        </label>
      
      
      </div>
      </div>
      <div class="modal-footer">
        <button class="btn text-white" type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-purple" href="#" data-dismiss="modal">Sair</a>
      </div>
    </div>
  </div>
</div>

<script>
 

  $(document).ready(function (){   
     $('.select').click(function () {
      if ($('input.teste').is(':checked')) {
        $(this).removeClass('bg-admin-purple');
      }else{
         $(this).addClass('bg-admin-purple');
      }
    });

  
  });

 
</script>


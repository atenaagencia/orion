<div class="row">
    <div class="container-fluid mx-auto">   
   
   @if(isset($associado->vinculo))
    <h4 class="text-dark text-purple font-weight-bold">Informações do Vínculo</h4>
        <div class="col-md-12 border-top p-2 mb-3">
            <div class=""><span class="font-weight-bold text-dark">Setor:</span> {{$associado->vinculo->setor}}</div>            
              <div class=""><span class="font-weight-bold text-dark">Inicio do Vinculo</span> {{date('d/m/Y', strtotime($associado->vinculo->data_vinculo))}}</div>
               <div class=""><span class="font-weight-bold text-dark">Tipo de vinculo:</span> {{$associado->vinculo->tipo_vinculo}}</div>
            <div class=""><span class="font-weight-bold text-dark">Supervisor:</span>
                {{$associado->vinculo->supervisor}}
            </div>
          
           

            <div >
                <a href="" class="btn btn-purple p-1 mt-2" data-toggle="modal" data-target="#CargosModal">Adicionar Cargos</a>
            </div>

        </div>
    @else
         <div class="col-md-12 p-2 mb-3 text-center">
           <h3 class="text-dark text-purple font-weight-bold">Associado não possui vínculo cadastrado!</h4>
            <a href="#" class=" btn btn-purple"  data-toggle="modal" data-target="#VinculoModal">Cadastrar</a>
        </div>
        
    @endif
   
    @include('vinculos.components.modal_cad')
    @include('cargo.components.modal_cad')
    </div><!--container-fluid-->

    
</div>
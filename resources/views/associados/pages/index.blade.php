@extends('bases.app')

@section('content')
    <div class="container">
        <h3>Associados</h3>
         <div class="card shadow mb-4">
            <div class="card-header py-3 clearfix">
              <h6 class="m-0 font-weight-bold text-primary float-left">Relação</h6>
              <a href="" class="float-right"> Novo cadastro</a>
           </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>CPF</th>
                      <th>Cargo</th>
                      <th>Opções</th>
                    </tr>
                  </thead>
                 <tbody>
                     @foreach ($associados as $associado)
                    <tr>
                    <td>{{$associado->nome}}</td>
                       <td>{{$associado->cpf}}</td>
                       <td></td>
                       <td></td>                        
                    </tr>
                    @endforeach
                    
                 </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
    
@endsection
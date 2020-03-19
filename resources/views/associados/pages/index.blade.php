@extends('associados.layouts.associado')
@section('title', 'Associados')
@section('pages_associado')
<div class="card shadow mb-4">
  <div class="card-header py-3 clearfix">
    <a href="{{route('associado.create')}}" class="float-right btn btn-purple"> Novo cadastro</a>
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
          <td>
          <div class="btn-group">
            <a href="{{route('associado.show',$associado->id)}}" class="btn-sm p-1 pl-3 pr-3 btn btn-outline-purple fa fa-eye"></a>
            <a href="{{route('associado.edit',$associado->id)}}" class="btn-sm p-1 pl-3 pr-3 btn btn-outline-purple fa fa-edit"></a>
            <a href="" class="btn-sm p-1 pl-3 pr-3 btn btn-outline-purple fas fa-file-pdf"></a>
            <a href="" class="btn-sm p-1 pl-3 pr-3 btn btn-outline-purple fas fa-trash-alt"></a>
          </div>
          </td>                        
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>          
@endsection
 

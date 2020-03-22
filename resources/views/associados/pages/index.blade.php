@extends('associados.layouts.associado')

<style>
  .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
  }
</style>
@section('title', 'Associados')

@section('pages_associado')
<div class="card shadow mb-4">
  <div class="card-header py-3 clearfix">
    <a href="{{route('associado.create')}}" class="float-right btn btn-purple"> Novo cadastro</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="">
          <tr class="text-purple font-weight-bold">
            <th>Nome</th>
            <th>CPF</th>
            <th>Cargo(s)</th>
            <th>Opções</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($associados as $associado)
          <tr>
          <td class="font-weight-bold text-black">{{$associado->nome}}</td>
          <td class="font-weight-bold text-black">{{$associado->cpf}}</td>
          <td>
            <span class="badge badge-dark">CEO</span>
            <span class="badge badge-danger">Diretor</span>
            <span class="badge badge-warning">Supervisor</span>
            <span class="badge badge-primary">Programador</span>
          </td>
          <td class="flex-center py-auto my-auto mx-auto">
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
 

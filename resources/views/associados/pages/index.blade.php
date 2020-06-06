@extends('associados.layouts.associado')

<style>
body#page-top #wrapper>#content-wrapper>#content{
  background-color: white !important;
}
.bg-light-danger{
  background-color: #FCF6F6;
}
.text-purple {
    color: #800080 !important;
    text-transform: none !important;
}

.bg-light-info{
  background-color: #E7F6FF;
}
.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}
.table {
    margin-bottom: 0 !important;
}
.card-table .card-body{
padding:0;
}

.card-table .card-body .table-bordered{
  border-style: none;
  margin:0;
}

.card-table .card-body .table-bordered > thead > tr > th:first-of-type {
    text-align:center;
    width: 100px;
}

.card-table .card-body .table-bordered > thead > tr > th:last-of-type,
.card-table .card-body .table-bordered > tbody > tr > td:last-of-type {
  border-right: 0px;
}

.card-table .card-body .table-bordered > thead > tr > th:first-of-type,
.card-table .card-body .table-bordered > tbody > tr > td:first-of-type {
  border-left: 0px;
}

.card-table .card-body .table-bordered > tbody > tr:first-of-type > td{
  border-bottom: 0px;
}

.card-table .card-body .table-bordered > thead > tr:first-of-type > th{
  border-top: 0px !important; 
}
.table .thead-light th{
  border: 0 !important;
}
}
.table th, .table td{
  border-top: 0 !important;
}

.bg-admin-purple {
    background-color: #800080 !important;
}
</style>

{{-- @section('title', 'Associados') --}}

@section('pages_associado')

<div class="card shadow mb-4 rounded-0">
  <div class="card-header py-4 clearfix rounded-0 border-0">
    <div class="row">
        <div class="col col-xs-6">
          <h3 class="card-title font-weight-bold text-purple">Associados</h3>
        </div>
        <div class="col col-xs-6 text-right">
          <a href="{{route('associado.create')}}" class="float-right btn btn-purple"> Novo cadastro</a>
        </div>
    </div>   
  </div>
  <div class="card-body m-0 p-0 rounded-0">
    <div class="table-responsive">
      <table class="table table-hover align-items-center table-flush" id="dataTable" width="100%" cellspacing="0">
        <thead class="py-3 thead-light text-purple">
          <tr class="text-purple font-weight-bold">
            <th class="text-purple">Nome</th>
            <th class="text-purple">CPF</th>
            <th colspan="4" class="text-center text-purple">Cargo(s)</th>
            <th colspan="3" class="text-center text-purple">Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($associados as $associado)
          <tr class="">
            <td class="text-black">{{$associado->nome}}</td>
            <td class="text-black ">{{$associado->cpf}}</td>
            <td class="text-center">
              <span class="badge badge-dark">CEO</span>
            </td>
            <td class="text-center">
              <span class="badge badge-dark">Diretor</span>
            </td>
            <td class="text-center">
              <span class="badge badge-dark">Supervisor</span>
            </td>
            <td class="text-center">
              <span class="badge badge-dark">Programador</span>
            </td>

            <td class="border-left  text-center"><a href="{{route('associado.show',$associado->id)}}" class="btn-sm p-1 pl-2 pr-2 btn btn-outline-dark fa fa-eye"></a></td>
            <td class="border-right border-left text-center"><a href="{{route('associado.edit',$associado->id)}}" class="btn-sm p-1 pl-2 pr-2 btn btn-outline-dark fa fa-edit"></a></td> 
            <td class="bg-light-danger text-center"><a href="" class="btn-sm p-1 pl-2 pr-2 btn btn-outline-danger fas fa-trash-alt"></a></td>                         
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer rounded-0">
      Lista de Associados
  </div>
</div>          
@endsection
 

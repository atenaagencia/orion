@extends('regras.layouts.regras')

<style>
  .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
  }
</style>
@section('title', 'Regras de Acessos')

@section('pages_regras')
<div class="card shadow mb-4">
  <div class="card-header py-3 clearfix">
    <a href="{{route('regras.create')}}" class="float-right btn btn-purple"> Criar</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="">
          <tr class="text-purple font-weight-bold">
            <th>Associado</th>
            <th>Opções</th>
          </tr>
        </thead>
         <tbody>
            @foreach ($regras as $regra)
          <tr>
          <td class="font-weight-bold text-black w-75">{{$regra->associado->nome}}</td>

          <td class="flex-center py-auto my-auto mx-auto">
          <div class="btn-group">
            {{-- <a href="{{route('cargo.show',$cargo->id)}}" class="btn-sm p-1 pl-3 pr-3 btn btn-outline-purple fa fa-eye"></a> --}}
            <a href="{{route('regras.show',$regra->associado_id)}}" class="btn-sm p-1 pl-3 pr-3 btn btn-outline-purple fa fa-eye"></a>
            {{-- <a href="" class="btn-sm p-1 pl-3 pr-3 btn btn-outline-purple fas fa-file-pdf"></a> --}}
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
 

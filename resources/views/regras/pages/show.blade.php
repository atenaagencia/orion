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
  <div class="card-body">
    <h3>{{$associado->nome}}</h3>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="">
          <tr class="text-purple font-weight-bold">
            <th>Entidade</th>
            <th>Regra</th>
            <th>Descrição</th>
            <th>Opções</th>
          </tr>
        </thead>
         <tbody>
            @foreach ($regras as $regra)
          <tr>
          <td class="font-weight-bold text-black w-25">{{$regra->regras->entidade}}</td>
          <td class="font-weight-bold text-black w-25">{{$regra->regras->regra}}</td>
          <td class="font-weight-bold text-black w-25">{{$regra->regras->descricao}}</td>
          <td></td>

                                
          </tr>
          @endforeach
        </tbody>

      </table>
    </div>
  </div>
</div>          
@endsection
 

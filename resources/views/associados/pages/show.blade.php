@extends('associados.layouts.associado')

@section('title', 'Associado | Ficha')
@section('edit')
<a href="{{route('associado.index')}}" class="btn btn-sm text-purple"><i class="fa fa-arrow-left"></i></a>

@endsection
@section('pages_associado')

<div class="card shadow mb-4">
  <div class="card-header clearfix">
    <div class="row container-fluid mx-auto">
      <div class="col-md-10 p-2">
        <h2 class="text-dark font-weight-bold">{{$associado->nome_social}}</h2>
        <div class="mb-2">
          <span class="badge badge-dark">CEO</span>
          <span class="badge badge-danger">Diretor</span>
          <span class="badge badge-warning">Supervisor</span>
          <span class="badge badge-primary">Programador</span></div>
        <div class="">@if(isset($associado->vinculo))Desde
          {{date('Y', strtotime($associado->vinculo->data_vinculo))}}@endif</div>
      </div>
      <div class="col-md-2 p-2 d-lg-block d-none text-center">
        <img class="border p-2 img-responsive" src="{{$associado->foto}}" width="100%">

        <small href="#" data-toggle="modal" data-target="#ImagemModal-{{$associado->id}}"
          class="btn-purple rounded p-1">Alterar imagem</small>


      </div>
    </div>
    <!--container-fluid-->
  </div>
  <div class="card-body">
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="associado nav-link active" id="pills-home-tab" data-toggle="pill" href="#dados" role="tab"
          aria-controls="pills-home" aria-selected="true">Dados Pessoais</a>
      </li>
      <li class="nav-item">
        <a class="associado nav-link" id="pills-profile-tab" data-toggle="pill" href="#vinculo" role="tab"
          aria-controls="pills-profile" aria-selected="false">Vínculo</a>
      </li>
      <li class="nav-item">
        <a class="associado nav-link" id="pills-profile-tab" data-toggle="pill" href="#funcoes" role="tab"
          aria-controls="pills-profile" aria-selected="false">Funções</a>
      </li>

    </ul>
    <div class="tab-content mb-4 shadow-sm" id="pills-tabContent">
      <div class="tab-pane fade show active border border-purple p-4" id="dados" role="tabpanel"
        aria-labelledby="pills-home-tab">
        @include('associados.components.dados')
      </div>
      <div class="tab-pane fade border border-purple" id="vinculo" role="tabpanel" aria-labelledby="pills-profile-tab">
        <p class="py-4 p-4"> @include('associados.components.vinculo')</p>
      </div>

      <div class="tab-pane fade border border-purple p-5" id="funcoes" role="tabpanel"
        aria-labelledby="pills-profile-tab">

        <input type="checkbox" name="funcao[]" id="1">
        <label for="1" class="btn">Dev</label>

        <input type="checkbox" name="funcao[]" id="2">
        <label for="2" class="btn">Maker</label>
        <input type="checkbox" name="funcao[]" id="3">
        <label for="3" class="btn">Dev</label>

        <input type="checkbox" name="funcao[]" id="4">
        <label for="4" class="btn">Maker</label>
        <input type="checkbox" name="funcao[]" id="5">
        <label for="5" class="btn">Dev</label>

        <input type="checkbox" name="funcao[]" id="6">
        <label for="6" class="btn">Maker</label>

      </div>
    </div>


    <!--end of row-->

    <div class="container-fluid">
      <a class="btn btn-purple float-right" href="#"><i class="fa fa-print"></i> | Imprimir Ficha</a>
    </div>
  </div>
  <!--card-body-->
</div>
<style>
  input[type="checkbox"] {
  display:none;
  }
  input[type="checkbox"]+label {
    background-color: gainsboro;
    width: 20%;
  }

  input[type="checkbox"]:checked+label {
    background-color: purple;
    color: white;
  }
</style>
@include('associados.components.modal_imagem')
@endsection
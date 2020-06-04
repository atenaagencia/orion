@extends('associados.layouts.associado')

@section('title', 'Associado | Ficha')
@section('edit')
<a href="{{route('associado.index')}}" class="btn btn-sm text-purple"><i class="fa fa-arrow-left"></i></a>
<a href="{{route('associado.edit',$associado->id)}}" class="btn btn-sm text-purple"><i class="fa fa-edit"></i></a>
@endsection
@section('pages_associado')

<div class="card shadow mb-4">
<div class="card-header clearfix">
    <div class="row container-fluid mx-auto">
        <div class="col-md-10 p-2">
            <h2 class="text-dark font-weight-bold">{{$associado->nome}}</h2>
            <div class="mb-2">
              <span class="badge badge-dark">CEO</span>
            <span class="badge badge-danger">Diretor</span>
            <span class="badge badge-warning">Supervisor</span>
            <span class="badge badge-primary">Programador</span></div>
            {{-- <div class="">@if(isset($associado->vinculo))Desde {{date('Y', strtotime($associado->vinculo->data_vinculo))}}@endif</div> --}}
        </div>
        <div class="col-md-2 p-2 d-lg-block d-none">
            <img class="border p-2 img-responsive" src="https://2.bp.blogspot.com/-c3xXGFDjNak/UEd_HcvsDuI/AAAAAAAAGcw/5KO5BHbRxnI/s1600/7.jpg" width="100%">
            
        </div>
    </div><!--container-fluid-->
</div>
<div class="card-body">
<ul class="nav nav-pills" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="associado nav-link active" id="pills-home-tab" data-toggle="pill" href="#dados" role="tab" aria-controls="pills-home" aria-selected="true">Dados Pessoais</a>
  </li>
  <li class="nav-item">
    <a class="associado nav-link" id="pills-profile-tab" data-toggle="pill" href="#vinculo" role="tab" aria-controls="pills-profile" aria-selected="false">Vínculo</a>
  </li>

</ul>
<div class="tab-content mb-4 shadow-sm" id="pills-tabContent">
  <div class="tab-pane fade show active border border-purple p-4" id="dados" role="tabpanel" aria-labelledby="pills-home-tab">
       @include('associados.components.dados')
  </div>
  <div class="tab-pane fade border border-purple" id="vinculo" role="tabpanel" aria-labelledby="pills-profile-tab">
    <p class="py-4 p-4">  @include('associados.components.vinculo')</p>
  </div>
</div>

  
<!--end of row-->

<div class="container-fluid">
    <a class="btn btn-purple float-right" href="#"><i class="fa fa-print"></i> | Imprimir Ficha</a>
</div>
</div><!--card-body-->
</div>
@endsection
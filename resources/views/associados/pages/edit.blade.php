@extends('associados.layouts.associado')

@section('title', 'Associado | Editar')
@section('edit')
<a href="{{route('associado.show',$associado->id)}}" class="btn btn-sm text-purple"><i class="fa fa-arrow-left"></i></a>
@endsection
@section('pages_associado')
<div class="card shadow mb-4 clearfix">
    <div class="card-header clearfix">
        <div class="row container-fluid mx-auto">
            <div class="col-md-10 p-2">
                <h2 class="text-dark font-weight-bold">{{$associado->nome}}</h2>
                <div class="">CEO</div>
                <div class="">Desenvolvedor</div>
                <div class="">Desde 2019</div>
            </div>
            <div class="col-md-2 p-2 d-lg-block d-none">
                <img class="border p-2 img-responsive" src="https://2.bp.blogspot.com/-c3xXGFDjNak/UEd_HcvsDuI/AAAAAAAAGcw/5KO5BHbRxnI/s1600/7.jpg" width="100%">
              
            </div>
        </div><!--container-fluid-->
    </div>
    <div class="card-body">
        <div class="pl-3 pr-3">
            @include('associados.forms.form_associado')
        </div>
    </div>
</div><!--card-->
@endsection
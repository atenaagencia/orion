@extends('associados.layouts.associado')

@section('title', 'Associado | Ficha')
@section('pages_associado')

<div class="card shadow mb-4">
<div class="card-header py-3 clearfix">
<h4 class="float-left">{{$associado->nome}}</h4>
<a href="{{route('associado.index')}}" class="float-right btn btn-purple"> Voltar</a>
</div>
<div class="card-body">

</div>
</div>
@endsection
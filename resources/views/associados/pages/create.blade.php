@extends('associados.layouts.associado')

@section('title', 'Associado | Cadastro')
@section('pages_associado')

<div class="card shadow mb-4">
<div class="card-header py-3 clearfix">
<a href="{{route('associado.index')}}" class="float-right btn btn-purple"> Voltar</a>
</div>
<div class="card-body">
@include('associados.forms.form_associado')
</div>
</div>
@endsection
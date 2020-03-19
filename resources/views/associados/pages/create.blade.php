@extends('associados.layouts.associado')

@section('title', 'Associado | Cadastro')
@section('pages_associado')

<div class="card shadow mb-4">
<div class="card-header py-3 clearfix">
    <div class="btn-group float-right">
        <a href="{{route('associado.index')}}" class="btn btn-purple"><i class="fas fa-arrow-left mr-3"></i>Voltar</a>
    </div>
</div>
<div class="card-body">
@include('associados.forms.form_associado')
</div>
</div>
@endsection
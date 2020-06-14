@extends('setor.layouts.setor')

@section('title', 'Setor | Cadastro')
@section('pages_setor')

<div class="card shadow mb-4">
<div class="card-header py-3 clearfix">
    <div class="btn-group float-right">
        <a href="{{route('setor.index')}}" class="btn btn-purple"><i class="fas fa-arrow-left mr-3"></i>Voltar</a>
    </div>
</div>
<div class="card-body">
    @include('setor.forms.form_setor')
</div>
</div>
@endsection
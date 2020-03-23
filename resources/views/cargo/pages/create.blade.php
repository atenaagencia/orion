@extends('cargo.layouts.cargo')

@section('title', 'Cargo | Cadastro')
@section('pages_cargo')

<div class="card shadow mb-4">
<div class="card-header py-3 clearfix">
    <div class="btn-group float-right">
        <a href="{{route('cargo.index')}}" class="btn btn-purple"><i class="fas fa-arrow-left mr-3"></i>Voltar</a>
    </div>
</div>
<div class="card-body">
    @include('cargo.forms.form_cargo')
</div>
</div>
@endsection
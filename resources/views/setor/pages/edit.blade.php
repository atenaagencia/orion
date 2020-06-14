@extends('setor.layouts.setor')

@section('title', 'Setor | Editar')
@section('edit')
<a href="{{route('setor.index')}}" class="btn btn-sm text-purple"><i class="fa fa-arrow-left"></i></a>
@endsection
@section('pages_setor')
<div class="card shadow mb-4 clearfix">
    <div class="card-header clearfix">
        <div class="row container-fluid mx-auto">
            <div class="col-md-10 p-2">
                <h2 class="text-dark font-weight-bold">{{$setor->nome}}</h2>
            </div>
        </div><!--container-fluid-->
    </div>
    <div class="card-body">
        <div class="pl-3 pr-3">
                        @include('setor.forms.form_setor')
            
        </div>
    </div>
</div><!--card-->
@endsection
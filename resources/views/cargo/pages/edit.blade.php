@extends('cargo.layouts.cargo')

@section('title', 'Cargo | Editar')
@section('edit')
<a href="{{route('cargo.index')}}" class="btn btn-sm text-purple"><i class="fa fa-arrow-left"></i></a>
@endsection
@section('pages_cargo')
<div class="card shadow mb-4 clearfix">
    <div class="card-header clearfix">
        <div class="row container-fluid mx-auto">
            <div class="col-md-10 p-2">
                <h2 class="text-dark font-weight-bold">{{$cargo->nome}}</h2>
            </div>
        </div><!--container-fluid-->
    </div>
    <div class="card-body">
        <div class="pl-3 pr-3">
                        @include('cargo.forms.form_cargo')
            
        </div>
    </div>
</div><!--card-->
@endsection
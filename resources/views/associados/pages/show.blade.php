@extends('associados.layouts.associado')

@section('title', 'Associado | Ficha')
@section('edit')
<a href="{{route('associado.edit',$associado->id)}}" class="btn btn-sm text-purple"><i class="fa fa-edit"></i></a>
@endsection
@section('pages_associado')

<div class="card shadow mb-4">
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
<div class="row">
    <div class="container-fluid mx-auto">
    <h4 class="text-dark font-weight-bold py-2">Dados Pessoais</h4>
        <div class="col-md-12 border p-2 mb-3">
            <div class=""><span class="font-weight-bold text-dark">Nome do Associado:</span> {{$associado->nome}}</div>
            <div class=""><span class="font-weight-bold text-dark">CPF:</span> {{$associado->cpf}}</div>
            <div class=""><span class="font-weight-bold text-dark">DATA DE NASCIMENTO:</span> {{$associado->data_nasc}}</div>
            <div class=""><span class="font-weight-bold text-dark">RG:</span> {{$associado->rg}}</div>
            <div class=""><span class="font-weight-bold text-dark">MÃE:</span> {{$associado->nome_mae}}</div>
        </div>
    </div><!--container-fluid-->
    <div class="container-fluid mx-auto">
    <h4 class="text-dark font-weight-bold py-2">Endereço</h4>
        <div class="col-md-12 border p-2 mb-3">
            <div class=""><span class="font-weight-bold text-dark">CEP:</span> {{$associado->cep}}</div>
            <div class=""><span class="font-weight-bold text-dark">RUA:</span> {{$associado->rua}}</div>
            <div class=""><span class="font-weight-bold text-dark">BAIRRO:</span> {{$associado->bairro}}</div>
            <div class=""><span class="font-weight-bold text-dark">NÚMERO:</span> {{$associado->numero}}</div>
            <div class=""><span class="font-weight-bold text-dark">CIDADE:</span> {{$associado->cidade}}</div>
            <div class=""><span class="font-weight-bold text-dark">UF:</span> {{$associado->uf}}</div>
            <div class=""><span class="font-weight-bold text-dark">EMAIL PESSOAL:</span> {{$associado->email_pessoal}}</div>
            <div class=""><span class="font-weight-bold text-dark">EMAIL INSTITUCIONAL:</span> {{$associado->email_inst}}</div>
        </div>
    </div>
    <div class="container-fluid mx-auto">
    <h4 class="text-dark font-weight-bold py-2">Dados Acadêmicos</h4>
        <div class="col-md-12 border p-2 mb-3">
            <div class=""><span class="font-weight-bold text-dark">ESCOLARIDADE:</span> {{$associado->escolaridade}}</div>
            <div class=""><span class="font-weight-bold text-dark">INSTITUIÇÃO:</span> {{$associado->instituicao}}</div>
            <div class=""><span class="font-weight-bold text-dark">TURNO:</span> {{$associado->turno_aula}}</div>
            <div class=""><span class="font-weight-bold text-dark">AREA DE FORMAÇÃO:</span> {{$associado->area_formacao}}</div>
            <div class=""><span class="font-weight-bold text-dark">ESPECIALIZACAO:</span> {{$associado->especializacao}}</div>
            <div class=""><span class="font-weight-bold text-dark">TALENTOS:</span> {{$associado->talentos}}</div>
        </div>
    </div>
</div><!--end of row-->

<div class="container-fluid">
    <a class="btn btn-purple float-right" href="#"><i class="fa fa-print"></i> | Imprimir Ficha</a>
</div>
</div><!--card-body-->
</div>
@endsection
@extends('associados.layouts.associado')

@section('title', 'Associado | Ficha')
@section('pages_associado')

<div class="card shadow mb-4">
    <div class="card-header py-3 clearfix">
        <h4 class="float-left">{{$associado->nome}}</h4>
        <a href="{{route('associado.index')}}" class="float-right btn btn-purple"> Voltar</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="row container-fluid mx-auto">
                <div class="col-md-10 bg-light p-2 mb-3">
                    <div class=""><span class="font-weight-bold text-dark">Nome do Associado:</span> {{$associado->nome}}</div>
                    <div class=""><span class="font-weight-bold text-dark">CPF:</span> {{$associado->cpf}}</div>
                    <div class=""><span class="font-weight-bold text-dark">DATA DE NASCIMENTO:</span> {{$associado->data_nasc}}</div>
                    <div class=""><span class="font-weight-bold text-dark">RG:</span> {{$associado->rg}}</div>
                    <div class=""><span class="font-weight-bold text-dark">MÃE:</span> {{$associado->nome_mae}}</div>
                </div>
                <div class="col-md-2 p-2 mb-3" style="background-color: #B4B4B4 !important">
                    <img class="img-responsive" src="https://2.bp.blogspot.com/-c3xXGFDjNak/UEd_HcvsDuI/AAAAAAAAGcw/5KO5BHbRxnI/s1600/7.jpg" width="100%">
                    <div class="text-center"><a href="" class="btn btn-sm btn-light">Trocar foto</a></div>
                </div>
            </div><!--container-fluid-->
            <div class="container-fluid mx-auto">
                <div class="col-md-12 bg-light p-2 mb-3">
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
                <div class="col-md-12 bg-light p-2 mb-3">
                    <div class=""><span class="font-weight-bold text-dark">ESCOLARIDADE:</span> {{$associado->escolaridade}}</div>
                    <div class=""><span class="font-weight-bold text-dark">INSTITUIÇÃO:</span> {{$associado->instituicao}}</div>
                    <div class=""><span class="font-weight-bold text-dark">TURNO:</span> {{$associado->turno_aula}}</div>
                    <div class=""><span class="font-weight-bold text-dark">AREA DE FORMAÇÃO:</span> {{$associado->area_formacao}}</div>
                    <div class=""><span class="font-weight-bold text-dark">ESPECIALIZACAO:</span> {{$associado->especializacao}}</div>
                    <div class=""><span class="font-weight-bold text-dark">TALENTOS:</span> {{$associado->talentos}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
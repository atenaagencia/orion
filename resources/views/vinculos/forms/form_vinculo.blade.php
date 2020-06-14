@inject('setores', 'App\Setor')
@inject('supervisores', 'App\Associado')

@php
$setor = $setores->pluck('setor', 'id')->all();
$sup = $supervisores->where('supervisor','sim')->get()->pluck('nome', 'id');
$botao = null;
@endphp
@if(isset($associado->vinculo))
@php
 $vinculo =  $associado->vinculo; 
@endphp
@endif

@if(isset($vinculo) == null)
@php $botao='Enviar' @endphp
{!! Form::open(['route'=>'vinculo.store','class'=>'user']) !!}
@else
@php $botao='Alterar' @endphp
{!! Form::model($vinculo,['class'=>'user','route' => ['vinculo.update',$vinculo->id]]) !!}
@method('PUT')
@endif
<div class="container-fluid py-3">
   {{-- <h3 class="font-weight-bold text-dark">Informe o cargo</h3><hr> --}}
</div>
<div class="form-group row">
   {!! Form::hidden('associado_id', $associado->id, ['class'=> ['form-control'],'readonly']) !!}
   <div class="col-sm-6">
      {!! Form::label('setor', 'Setor:', ['']) !!}
      {!! Form::select('setor_id', $setor, $value=null, ['class'=> ['form-control'],'required']) !!}

   </div>
   <div class="col-sm-6">
      {!! Form::label('data_vinculo', 'Inicio do Vinculo:', ['']) !!}
      {!! Form::date('data_vinculo', $value=null, ['class'=> ['form-control',],'required']) !!}
   </div>
   <div class="col-sm-6">
      {!! Form::label('tipo_vinculo', 'Tipo do Vinculo:', ['']) !!}
      {!! Form::select('tipo_vinculo', ['' => '---','associado' => 'Associado','estagiario'=> 'Estágiario'],$value=null,
      ['class'=> ['form-control'],'required']) !!}
   </div>
   <div class="col-sm-6">
      {!! Form::label('supervisor', 'Supervisor:', ['']) !!}
    {!! Form::select('supervisor_id', $sup, $value=null, ['class'=> ['form-control'],'required']) !!}
   </div>

   <div class="col-sm-12 mt-3">
      {!! Form::submit($botao, ['class' => ['btn', 'btn-purple', 'btn-user', 'btn-block', 'form-nonresize']]) !!}
   </div>
</div>


{!! Form::close() !!}
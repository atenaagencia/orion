@if(isset($vinculo) == null)
{!! Form::open(['route'=>'vinculo.store','class'=>'user']) !!}
@else
{!! Form::model($vinculo,['class'=>'user','route' => ['vinculo.update',$vinculo->id]]) !!}
@method('PUT')
@endif
<div class="container-fluid py-3">
      {{-- <h3 class="font-weight-bold text-dark">Informe o cargo</h3><hr> --}}
</div>
 <div class="form-group row">
  <div class="col-sm-6">
        {!! Form::label('codigo', 'Codigo:', ['']) !!}
        {!! Form::text('associado_id', $associado->id, ['class'=> ['form-control'],'readonly']) !!}
     </div>
     <div class="col-sm-6">
        {!! Form::label('setor', 'Setor:', ['']) !!}
        {!! Form::text('setor', $value=null, ['class'=> ['form-control'],'required']) !!}
        
     </div>
     <div class="col-sm-6">
        {!! Form::label('data_vinculo', 'Inicio do Vinculo:', ['']) !!}
        {!! Form::date('data_vinculo', $value=null, ['class'=> ['form-control',],'required']) !!}
     </div>
     <div class="col-sm-6">
        {!! Form::label('tipo_vinculo', 'Tipo do Vinculo:', ['']) !!}
        {!! Form::select('tipo_vinculo', ['' => '---','associado' => 'Associado','estagiario'=> 'Estágiario'],[''], ['class'=> ['form-control'],'required']) !!}
     </div>
     <div class="col-sm-6">
        {!! Form::label('supervisor', 'Supervisor:', ['']) !!}
        {!! Form::text('supervisor', $value=null, ['class'=> ['form-control'],'required']) !!}
     </div>
     
     <div class="col-sm-12 mt-3">    
         {!! Form::submit('Enviar', ['class' => ['btn', 'btn-purple', 'btn-user', 'btn-block', 'form-nonresize']]) !!}
     </div> 
 </div>


{!! Form::close() !!}

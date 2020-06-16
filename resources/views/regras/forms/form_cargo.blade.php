@if(isset($cargo) == null)
{!! Form::open(['route'=>'cargo.store','class'=>'user']) !!}
@else
{!! Form::model($cargo,['class'=>'user','route' => ['cargo.update',$cargo->id]]) !!}
@method('PUT')
@endif
<div class="container-fluid py-3">
      {{-- <h3 class="font-weight-bold text-dark">Informe o cargo</h3><hr> --}}
</div>
 <div class="form-group row">
     <div class="col-sm-12">
        {!! Form::label('cargo', 'Cargo:', ['']) !!}
        {!! Form::text('cargo', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
     </div>
     
     <div class="col-sm-12 mt-3">    
         {!! Form::submit('Enviar', ['class' => ['btn', 'btn-purple', 'btn-user', 'btn-block', 'form-nonresize']]) !!}
     </div> 
 </div>


{!! Form::close() !!}

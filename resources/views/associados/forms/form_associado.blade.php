{!! Form::open(['route'=>'associado.store','class'=>'user']) !!}
 <div class="form-group row">
     <div class="col-sm-4">
         {!! Form::label('nome', 'Nome:', ['']) !!}
        {!! Form::text('nome', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
      <div class="col-sm-4">
      {!! Form::label('cpf', 'CPF:', ['']) !!}
        {!! Form::text('cpf', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
      <div class="col-sm-4">
         {!! Form::label('rg', 'RG:', ['']) !!}
        {!! Form::text('rg', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
      <div class="col-sm-4">
         {!! Form::label('data_nasc', 'Data de Nascimento:', ['']) !!}
        {!! Form::text('data_nasc', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
     {!! Form::submit('Enviar', ['']) !!}
 </div>


{!! Form::close() !!}
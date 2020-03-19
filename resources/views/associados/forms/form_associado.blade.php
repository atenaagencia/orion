{!! Form::open(['route'=>'associado.store','class'=>'user']) !!}
 <div class="form-group row">

     <div class="container-fluid py-3">
      <h3 class="font-weight-bold">Informações Pessoais</h3><hr>
     </div>
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
     <div class="col-sm-4">
         {!! Form::label('nome_mae', 'Nome da Mãe:', ['']) !!}
         {!! Form::text('nome_mae', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
     <div class="col-sm-4">
         {!! Form::label('cep', 'Cep:', ['']) !!}
         {!! Form::text('cep', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
     <div class="col-sm-4">
         {!! Form::label('rua', 'Rua:', ['']) !!}
         {!! Form::text('rua', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
     <div class="col-sm-3">
         {!! Form::label('bairro', 'Bairro:', ['']) !!}
         {!! Form::text('bairro', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
     <div class="col-sm-2">
         {!! Form::label('numero', 'Numero:', ['']) !!}
         {!! Form::text('numero', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
     <div class="col-sm-3">
         {!! Form::label('cidade', 'Cidade:', ['']) !!}
         {!! Form::text('cidade', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
     <div class="col-sm-4">
         {!! Form::label('uf', 'Uf:', ['']) !!}
         {!! Form::text('uf', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
     <div class="col-sm-4">
         {!! Form::label('email_pessoal', 'Email Pessoal:', ['']) !!}
         {!! Form::text('email_pessoal', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
     <div class="col-sm-4">
         {!! Form::label('email_inst', 'Email Institucional:', ['']) !!}
         {!! Form::email('email_inst', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
     <div class="container-fluid py-3">
      <h3 class="font-weight-bold">Formação Acadêmica</h3><hr>
     </div>
     <div class="col-sm-4">
         {!! Form::label('escolaridade', 'Escolaridade:', ['']) !!}
         {!! Form::text('escolaridade', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
     <div class="col-sm-4">
         {!! Form::label('instituicao', 'Instituicao:', ['']) !!}
         {!! Form::text('instituicao', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
     <div class="col-sm-4">
         {!! Form::label('turno_aula', 'Turno Aula:', ['']) !!}
         {!! Form::text('turno_aula', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
     <div class="col-sm-4">
         {!! Form::label('area_formacao', 'Area de Formacao:', ['']) !!}
         {!! Form::text('area_formacao', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
     <div class="col-sm-4">
         {!! Form::label('especializacao', 'Especializacao:', ['']) !!}
         {!! Form::text('especializacao', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
     </div>
     <div class="col-sm-12 py-4">
         {!! Form::label('talentos', 'Talentos:', ['']) !!}
         {!! Form::textarea('talentos', $value=null, ['class'=> ['form-control']]) !!}
     </div>
     <div class="col-sm-12 mt-3">    
         {!! Form::submit('Enviar', ['class' => ['btn', 'btn-purple', 'btn-user', 'btn-block', 'form-nonresize']]) !!}
     </div> 
 </div>


{!! Form::close() !!}
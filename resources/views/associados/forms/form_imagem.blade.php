{!! Form::model($associado,['files'=>true, 'class'=>'user','route' => ['associado.update',$associado->id]]) !!}
@method('PUT')
{!! Form::hidden('tipo', 'imagem', ['']) !!}
{!! Form::file('foto', ['class'=> 'form-control']) !!}
{!! Form::submit('Alterar', ['class'=> 'btn btn-block btn-purple']) !!}
{!! Form::close() !!}
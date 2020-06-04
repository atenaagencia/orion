@if(isset($associado) == null)
{!! Form::open(['route'=>'associado.store','class'=>'user']) !!}
@else
{!! Form::model($associado,['class'=>'user','route' => ['associado.update',$associado->id]]) !!}
@method('PUT')
@endif
<div class="container-fluid py-3">
    <h3 class="font-weight-bold text-dark">Dados Pessoais</h3>
    <hr>
</div>
<div class="form-group row">
    <div class="col-sm-4">
        {!! Form::label('nome', 'Nome:', ['']) !!}
        {!! Form::text('nome', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::label('cpf', 'CPF:', ['']) !!}
        {!! Form::number('cpf', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::label('rg', 'RG:', ['']) !!}
        {!! Form::number('rg', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::label('data_nasc', 'Data de Nascimento:', ['']) !!}
        {!! Form::date('data_nasc', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::label('nome_mae', 'Nome da Mãe:', ['']) !!}
        {!! Form::text('nome_mae', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::label('telefone', 'Telefone:', ['']) !!}
        {!! Form::text('telefone', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::label('nome_mae', 'WhatsApp:', ['']) !!}
        {!! Form::text('whatsapp', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::label('cep', 'Cep:', ['']) !!}
        {!! Form::text('cep', $value=null, ['maxlength'=>'8','class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::label('rua', 'Rua:', ['']) !!}
        {!! Form::text('rua', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-3">
        {!! Form::label('bairro', 'Bairro:', ['']) !!}
        {!! Form::text('bairro', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-2">
        {!! Form::label('numero', 'Numero:', ['']) !!}
        {!! Form::number('numero', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-3">
        {!! Form::label('cidade', 'Cidade:', ['']) !!}
        {!! Form::text('cidade', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::label('uf', 'Uf:', ['']) !!}
        {!! Form::text('uf', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::label('email_pessoal', 'E-mail Pessoal:', ['']) !!}
        {!! Form::email('email_pessoal', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::label('email_inst', 'E-mail Institucional:', ['']) !!}
        {!! Form::email('email_inst', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
    </div>
    <div class="container-fluid py-3">
        <h3 class="font-weight-bold text-dark">Formação Acadêmica</h3>
        <hr>
    </div>
    <div class="col-sm-4">
        {!! Form::label('escolaridade', 'Escolaridade:', ['']) !!}
        {!! Form::text('escolaridade', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::label('instituicao', 'Instituicao:', ['']) !!}
        {!! Form::text('instituicao', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
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
        {!! Form::textarea('talentos', $value=null, ['class'=> 'form-control', 'id'=>'editor']) !!}
    </div>
    @if(isset($associado) == null)
    <div class="col-sm-12 mt-3">
        {!! Form::submit('Enviar', ['class' => ['btn', 'btn-purple', 'btn-user', 'btn-block', 'form-nonresize']]) !!}
    </div>
    @else
    {!! Form::submit('Alterar', ['class' => ['btn', 'btn-purple', 'btn-user', 'btn-block', 'form-nonresize']]) !!}
    @endif
</div>


{!! Form::close() !!}

<script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script type="text/javascript">
    $(document).ready(function() {

        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#rua").val("");
            $("#bairro").val("");
            $("#cidade").val("");
            $("#uf").val("");
        }

        $("#cep").keyup(function() {
        $("#cep").val(this.value.match(/[0-9]*/));
        });
        //Quando o campo cep perde o foco.
        $("#cep").blur(function() {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#rua").val("...");
                    $("#bairro").val("...");
                    $("#cidade").val("...");
                    $("#uf").val("...");

                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#rua").val(dados.logradouro);
                            $("#bairro").val(dados.bairro);
                            $("#cidade").val(dados.localidade);
                            $("#uf").val(dados.uf);
                        } //end if.
                        else{
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        });
    });
</script>
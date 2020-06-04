<div class="row py-4">
    <div class="container-fluid mx-auto">   
        <a href="{{route('associado.edit',$associado->id)}}" class="btn btn-sm text-purple float-right"><i class="fa fa-edit"></i></a>
    <h4 class="text-dark text-purple font-weight-bold py-2">Dados Pessoais</h4>
        <div class="col-md-12 border-top p-2 mb-3">
            <div class=""><span class="font-weight-bold text-dark">Nome:</span> {{$associado->nome}}</div>
            <div class=""><span class="font-weight-bold text-dark">CPF:</span> {{$associado->cpf}}</div>
            <div class=""><span class="font-weight-bold text-dark">Data de Nascimento:</span> {{date('d/m/Y', strtotime($associado->data_nasc))}}</div>
            <div class=""><span class="font-weight-bold text-dark">RG:</span> {{$associado->rg}}</div>
            <div class=""><span class="font-weight-bold text-dark">Mãe:</span> {{$associado->nome_mae}}</div>
            <div class=""><span class="font-weight-bold text-dark">Telefone:</span> {{$associado->telefone}}</div>
            <div class=""><span class="font-weight-bold text-dark">WhatsApp:</span> {{$associado->whatsapp}}</div>
        </div>
    </div><!--container-fluid-->
    <div class="container-fluid mx-auto">
    <h4 class="text-dark text-purple font-weight-bold py-2">Endereço</h4>
        <div class="col-md-12 border-top p-2 mb-3">
            <div class=""><span class="font-weight-bold text-dark">CEP:</span> {{$associado->cep}}</div>
            <div class=""><span class="font-weight-bold text-dark">Rua:</span> {{$associado->rua}}</div>
            <div class=""><span class="font-weight-bold text-dark">Bairro:</span> {{$associado->bairro}}</div>
            <div class=""><span class="font-weight-bold text-dark">Número:</span> {{$associado->numero}}</div>
            <div class=""><span class="font-weight-bold text-dark">Cidade:</span> {{$associado->cidade}}</div>
            <div class=""><span class="font-weight-bold text-dark">UF:</span> {{$associado->uf}}</div>
            <div class=""><span class="font-weight-bold text-dark">E-mail Pessoal:</span> {{$associado->email_pessoal}}</div>
            <div class=""><span class="font-weight-bold text-dark">E-mail Institucional:</span> {{$associado->email_inst}}</div>
        </div>
    </div>
    <div class="container-fluid mx-auto">
    <h4 class="text-dark text-purple font-weight-bold py-2">Dados Acadêmicos</h4>
        <div class="col-md-12 border-top p-2 mb-3">
            <div class=""><span class="font-weight-bold text-dark">Escolaridade:</span> {{$associado->escolaridade}}</div>
            <div class=""><span class="font-weight-bold text-dark">Instituição:</span> {{$associado->instituicao}}</div>
            <div class=""><span class="font-weight-bold text-dark">Turno:</span> {{$associado->turno_aula}}</div>
            <div class=""><span class="font-weight-bold text-dark">Área de Formação:</span> {{$associado->area_formacao}}</div>
            <div class=""><span class="font-weight-bold text-dark">Especialização:</span> {{$associado->especializacao}}</div>
            <div class=""><span class="font-weight-bold text-dark">talentos:</span> {{$associado->talentos}}</div>
        </div>
    </div>
    
</div>
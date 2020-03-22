<div class="row py-4">
    <div class="container-fluid mx-auto">   
    <h4 class="text-dark text-purple font-weight-bold py-2">Dados Pessoais</h4>
        <div class="col-md-12 border-top p-2 mb-3">
            <div class=""><span class="font-weight-bold text-dark">Nome do Associado:</span> {{$associado->nome}}</div>
            <div class=""><span class="font-weight-bold text-dark">CPF:</span> {{$associado->cpf}}</div>
            <div class=""><span class="font-weight-bold text-dark">DATA DE NASCIMENTO:</span> {{$associado->data_nasc}}</div>
            <div class=""><span class="font-weight-bold text-dark">RG:</span> {{$associado->rg}}</div>
            <div class=""><span class="font-weight-bold text-dark">MÃE:</span> {{$associado->nome_mae}}</div>
        </div>
    </div><!--container-fluid-->
    <div class="container-fluid mx-auto">
    <h4 class="text-dark text-purple font-weight-bold py-2">Endereço</h4>
        <div class="col-md-12 border-top p-2 mb-3">
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
    <h4 class="text-dark text-purple font-weight-bold py-2">Dados Acadêmicos</h4>
        <div class="col-md-12 border-top p-2 mb-3">
            <div class=""><span class="font-weight-bold text-dark">ESCOLARIDADE:</span> {{$associado->escolaridade}}</div>
            <div class=""><span class="font-weight-bold text-dark">INSTITUIÇÃO:</span> {{$associado->instituicao}}</div>
            <div class=""><span class="font-weight-bold text-dark">TURNO:</span> {{$associado->turno_aula}}</div>
            <div class=""><span class="font-weight-bold text-dark">AREA DE FORMAÇÃO:</span> {{$associado->area_formacao}}</div>
            <div class=""><span class="font-weight-bold text-dark">ESPECIALIZACAO:</span> {{$associado->especializacao}}</div>
            <div class=""><span class="font-weight-bold text-dark">TALENTOS:</span> {{$associado->talentos}}</div>
        </div>
    </div>
    
</div>
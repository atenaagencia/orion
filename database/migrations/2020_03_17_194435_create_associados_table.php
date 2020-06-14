<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('cpf',11);
            $table->string('rg')->nullable();
            $table->date('data_nasc');
            $table->string('nome_mae');
            $table->string('telefone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('cep')->nullable();
            $table->string('rua');
            $table->string('bairro');
            $table->string('numero');
            $table->string('cidade');
            $table->string('uf');
            $table->string('email_pessoal');
            $table->string('email_inst')->nullable();
            $table->string('escolaridade');
            $table->string('instituicao');
            $table->string('turno_aula')->nullable();
            $table->string('area_formacao')->nullable();
            $table->string('especializacao')->nullable();
            $table->longText('talentos')->nullable();
            $table->enum('supervisor', ['sim', 'nao'])->nullable();
            $table->enum('status', ['ativo', 'inativo'])->nullable()->default('ativo');
            $table->string('password')->nullable();       
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('associados');
    }
}

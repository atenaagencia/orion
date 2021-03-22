<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo', ['pf', 'pj'])->nullable();
            $table->enum('situacao', ['ativo', 'inativo', 'pre'])->nullable();
            $table->string('nome_social');
            $table->string('nome_fantasia');
            $table->string('razao_social');
            $table->string('nome');
            $table->string('cpf')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('rg')->nullable();
            $table->string('fone1')->nullable();
            $table->string('fone2')->nullable();
            $table->string('email')->nullable();
            $table->string('ins_estadual')->nullable();
            $table->string('ins_municipal')->nullable();
            $table->string('tipo_end')->nullable();
            $table->string('cep')->nullable();
            $table->string('numero')->nullable();
            $table->string('rua')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('uf')->nullable();
            $table->longtext('info')->nullable();
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
        Schema::dropIfExists('cliente');
    }
}

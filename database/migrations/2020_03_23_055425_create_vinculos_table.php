<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vinculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('associado_id');
            $table->foreign('associado_id')->references('id')->on('associados');
            $table->unsignedBigInteger('setor_id');
            $table->foreign('setor_id')->references('id')->on('setors');
            $table->unsignedBigInteger('cargo_id');
            $table->foreign('cargo_id')->references('id')->on('cargos');
            $table->date('data_vinculo');
            $table->string('tipo_vinculo');
            $table->unsignedBigInteger('supervisor_id')->nullable();
            $table->foreign('supervisor_id')->references('id')->on('associados');
            $table->enum('status', ['ativo', 'inativo'])->nullable()->default('ativo');
            $table->date('data_saida')->nullable();
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
        Schema::dropIfExists('vinculos');
    }
}

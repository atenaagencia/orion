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
            $table->string('setor');
            $table->date('data_vinculo');
            $table->string('tipo_vinculo');
            $table->string('supervisor')->nullable();
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegrasAssociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regras_associados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('associado_id');
            $table->foreign('associado_id')->references('id')->on('associados');
            $table->unsignedBigInteger('regra_id');
            $table->foreign('regra_id')->references('id')->on('regras');
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
        Schema::dropIfExists('regras_associados');
    }
}

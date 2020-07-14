<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogAssociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_associados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vinculo_id');
            $table->foreign('vinculo_id')->references('id')->on('vinculos');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('associados');
            $table->longText('descricao');
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
        Schema::dropIfExists('log_associados');
    }
}

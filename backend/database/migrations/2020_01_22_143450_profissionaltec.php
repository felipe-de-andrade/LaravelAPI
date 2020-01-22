<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProfissionalTec extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissionaltec', function (blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profissionais_id');
            $table->foreign('profissionais_id')->references('id')->on('profissionais');
            $table->unsignedBigInteger('tecnologias_id');
            $table->foreign('tecnologias_id')->references('id')->on('tecnollogias');
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
        //
    }
}

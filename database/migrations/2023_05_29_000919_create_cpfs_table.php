<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpfs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cpf');
            $table->string('nome_inst');
            $table->string('nome_modal');
            $table->string('codigo_modal');
            $table->string('qtdmin_parc');
            $table->string('qtdmax_parc');
            $table->string('vlrmin');
            $table->string('vlrmax');
            $table->string('jurmes');
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
        Schema::dropIfExists('cpfs');
    }
}

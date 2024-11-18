<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokenHistoricoControllsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('token_historico_controlls', function (Blueprint $table) {
            $table->id();
            $table->string('nome_instituicao');
            $table->string('email_instituicao');
            $table->string('nome_utilizador');
            $table->string('tokem');
            $table->integer('tempo_vida');
            $table->date('data_expiracao');
            $table->integer('estado');
            $table->unsignedBigInteger('token_controll_id')->nullable();
            $table->foreign('token_controll_id')->references('id')->on('token_controlls')->onDelete('cascade')->onUpdate('cascade')->nullable();
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
        Schema::dropIfExists('token_historico_controlls');
    }
}

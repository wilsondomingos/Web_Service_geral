<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokenControllsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('token_controlls', function (Blueprint $table) {
            $table->id();
            $table->string('nome_instituicao');
            $table->string('email_instituicao');
            $table->string('nome_utilizador');
            $table->longText('tokem');
            $table->integer('tempo_vida');
            $table->date('data_expiracao');
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
        Schema::dropIfExists('token_controlls');
    }
}

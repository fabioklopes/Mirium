<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastroCompradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_compradores', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 80);
            $table->string('sobrenome', 50);
            $table->string('usuario', 25)->unique();
            $table->string('senha',255);
            $table->string('email', 80);
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
        Schema::dropIfExists('cadastro_compradores');
    }
}

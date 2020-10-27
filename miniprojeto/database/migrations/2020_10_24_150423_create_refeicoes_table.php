<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefeicoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refeicaos', function (Blueprint $table) {
            $table->id();
            $table->enum('altura_dia', ['Pequeno-Almoço', 'Almoço', 'Jantar', 'Lanche manhã', 'Lanche tarde', 'Ceia']);
            $table->date('data_refeicao');
            $table->integer('total_cal');
            $table->text('notas')->nullable();
            $table->integer('user')->nullable();
            $table->timestamps();
        });

        Schema::create('refeicaos_pratos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('refeicaos_id');
            $table->unsignedBigInteger('pratos_id');
            $table->timestamps();

            $table->unique(['refeicaos_id', 'pratos_id']);
            $table->foreign('pratos_id')->references('id')->on('pratos')->onDelete('cascade');
            $table->foreign('refeicaos_id')->references('id')->on('refeicaos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refeicoes');
    }
}

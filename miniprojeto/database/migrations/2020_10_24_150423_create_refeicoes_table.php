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
            $table->integer('total_cal')->nullable();
            $table->text('notas')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });


        Schema::create('prato_refeicao', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('refeicao_id');
            $table->unsignedBigInteger('prato_id');
            $table->timestamps();

            $table->unique(['refeicao_id', 'prato_id']);
            $table->foreign('prato_id')->references('id')->on('pratos')->onDelete('cascade');
            $table->foreign('refeicao_id')->references('id')->on('refeicaos')->onDelete('cascade');
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

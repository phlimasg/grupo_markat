<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('produtos_id')->nullable();
            $table->unsignedBigInteger('orcamentos_id')->nullable();
            $table->bigInteger('quantidade');
            $table->foreign('produtos_id')->references('id')->on('produtos')->onDelete('cascade');
            $table->foreign('orcamentos_id')->references('id')->on('orcamentos')->onDelete('cascade');

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
        Schema::dropIfExists('itens');
    }
}

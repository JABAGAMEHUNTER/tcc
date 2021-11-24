<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {//Cria tabela de produtos
            $table->id();
            $table->string('title', 160)->unique();
            $table->string('image');
            $table->string('categoria');
            $table->text('content')->nullable();
            $table->text('descricao')->nullable();
            $table->string('valor')->nullable();
            $table->string('procedencia')->nullable(); 
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
        Schema::dropIfExists('produto');
    }
}

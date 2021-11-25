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
        Schema::create('produtos', function (Blueprint $table) {//Cria tabela de produtos
            $table->increments("id");
            $table->string("title", 100);
            $table->string("image")->nullable();
            $table->enum('categoria',['hortifruti','peixes','carnes','naturais'])->default('hortifruti');
            $table->integer("categoria_id")->unsigned();
            $table->text("descricao", 255)->nullable();
            $table->decimal("valor",10,2)->nullable(); 
            $table->timestamps();
            
            $table->foreign("categoria_id")
                ->references("id")->on("categorias")
                ->onDelete("cascade");
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

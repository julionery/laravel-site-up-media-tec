<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_id')->unsigned();
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->decimal('preco');
            $table->decimal('preco_custo')->nullable();
            $table->decimal('preco_compra')->nullable();
            $table->string('unidade_medida')->nullable();
            $table->text('imagem')->nullable();
            $table->enum('ativo', ['sim', 'nao'])->default('sim');
            $table->string('usuario_inclusao')->nullable();
            $table->string('usuario_alteracao')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('produtos', function($table){
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produtos');
    }
}

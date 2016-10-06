<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->increments('id');
            //Referencia de Quem doou o livro
            $table->integer('user_donate_id')->unsigned();
            $table->foreign('user_donate_id')->references('id')->on('users')->onDelete('cascade');
            //Referencia de quem reservou o livro
            $table->integer('user_receive_id')->unsigned();
            $table->foreign('user_receive_id')->references('id')->on('users')->onDelete('cascade');
            //Informações do LIVRO
            $table->integer('status')->default('0');
            $table->string('titulo');
            $table->text('desc_livro')->nullable();
            $table->string('idioma')->nullable();
            $table->string('isbn')->unique()->nullable();
            $table->string('editora')->nullable();
            $table->string('image')->nullable();
            //Sistema de pontuação
            $table->integer('pontos');
            $table->integer('n_paginas');
            $table->string('tipo');
            //TimeStamps
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
        Schema::drop('livros');
    }
}

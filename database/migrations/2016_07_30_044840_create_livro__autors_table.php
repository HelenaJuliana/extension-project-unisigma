<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivroAutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livro__autors', function (Blueprint $table) {

          $table->integer('livro_id')->unsigned();
          $table->foreign('livro_id')->references('id')->on('livros')->onDelete('cascade');
          $table->integer('autor_id')->unsigned();
          $table->foreign('autor_id')->references('id')->on('autores')->onDelete('cascade');

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
        Schema::drop('livro__autors');
    }
}

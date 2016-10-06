<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = "livros";

    //getValues
    public function getTitulo(){
      return $this->titulo;
    }

    //RelationShips
    public function categorias(){
      return $this->belongsToMany(Categoria::class, 'livro_categoria','livro_id','categoria_id');
    }

    public function autores(){
      return $this->belongsToMany(Autor::class, 'livro__autors','livro_id','autor_id');
    }
}

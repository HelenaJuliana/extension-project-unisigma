<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categoria";

    public function livros(){
      return $this->belongsToMany(Livro::class, 'livro_categoria','livro_id','categoria_id');
    }
}

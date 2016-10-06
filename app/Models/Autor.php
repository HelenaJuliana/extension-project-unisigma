<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autors';


    public function livros(){
      return $this->belongsToMany(Livro::class, 'livro_autor','livro_id','autor_id');
    }
}

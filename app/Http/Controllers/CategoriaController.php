<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Categoria;
use App\Models\UserLog;
use App\User;
use Illuminate\Support\Facades\Input;//Usado para Obter os dados dos inputs.
use Validator;
use Redirect;
use Auth;
class CategoriaController extends Controller
{

    public function addCategoria(){
      $categoria = new Categoria();
      $categoria->descricao = ucwords(Input::get('categoria'));
      $categoria->save();
      //Registrando LOG
      $log = new UserLog();
      $log->user_id = Auth::user()->id;
      $log->action = 8;//Nova Categoria
      $log->descricao = "Adicionado nova Categoria: ".$categoria->descricao;
      $log->save();
      return redirect()->back()->with(['msg'=>'Categoria cadastrada com sucesso!','class'=>'success','categorias'=>Categoria::all()]);
    }
    public function deletarCategoria($id){
      $categoria = Categoria::find($id);
      $categoria->delete();
    }
}

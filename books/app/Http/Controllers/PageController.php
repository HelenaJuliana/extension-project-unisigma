<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\Livro;
use App\Models\Livro_Categoria;
use App\Models\Livro_Autor;
use App\Models\Categoria;
use App\Models\UserLog;
use App\User;
use Auth;
use DB;
use Crypt;
use Hash;
use Illuminate\Contracts\Encryption\DecryptException;
class PageController extends Controller
{
    public function index_Site(){
      $livros = Livro::where('status',1)->orderBy('id', 'asc')->take(9)->get();
      return view('site.index')->with('livros',$livros);
      // return view('site.index');
    }
    public function dashboard(){
      $logs = UserLog::orderBy('created_at','desc')->take(30)->get();
      $livros = Livro::query()->where('status',0)->get();

      return view('admin.index')->with(['livros'=>$livros, 'logs'=>$logs]);
    }
    public function listagemUsuarios(){
      $users = User::all();
      // $u = user::find(1);
      // dd();
      return view('admin.usuarios-cadastrados')->with(['users'=>$users]);
    }
    public function livrosCadastrados(){
      $livros = Livro::paginate(4);
      return view('admin.livros-cadastrados')->with('livros',$livros);
    }
    public function myDonates(){
      $livros = Livro::where('user_donate_id',Auth::user()->id)->paginate(4);
      return view('admin.minhas-doacoes')->with(['livros'=>$livros]);
    }
    public function getPageCriarConta(){
      return view('auth.criar-conta');
    }

    public function getPageCategoria(){
      if(Auth::user()->tipo ==0){
        abort(403);
      }
      $categorias = Categoria::all();
      $users = User::all();
      return view('admin.categoria')->with(array('categorias'=>$categorias,'users'=>$users));
    }

    public function viewBookDetails($id){
      // $id = Crypt::decrypt($id); Crypt::encrypt para criptografar

      //10 Categorias em ordem alfabetica
      $categorias = Categoria::orderBy('descricao','ASC')->take(10)->get();
      //Ultimas 9 doações
      $news_donates = Livro::orderBy('id','DESC')->take(9)->get();

      $livro = Livro::find($id);

      if($livro != null){
        //Livros Relacionados ao Livro que está sendo visualizado
        $livros_r = Livro::join('livro_categoria', 'livros.id', '=', 'livro_categoria.livro_id')
                ->whereIn('livro_categoria.categoria_id', $livro->categorias()->lists('id'))
                ->where('livros.id', '<>', $id)
                ->take(9)->get();
          return view('site.book-details',['livro'=>$livro, 'categorias'=>$categorias, 'news_donates'=>$news_donates, 'livros_r' =>$livros_r]);
      }
      return "<h1>Livro não encontrado</h1>";
    }
}

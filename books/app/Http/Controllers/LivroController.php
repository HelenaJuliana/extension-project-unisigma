<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\Models\Livro;
use App\Models\Categoria;
use App\Models\Livro_Categoria;
use App\Models\Autor;
use App\Models\Livro_Autor;
use App\Models\UserLog;
use App\Models\UserReservaLivro;
use App\User;
use Carbon\Carbon;
use Auth;
use File;
use Response;
class LivroController extends Controller
{
    public function index(){
      $categorias = DB::table('categoria')->orderBy('descricao','asc')->get();
      $autores = DB::table('autors')->orderBy('autor','asc')->get();
      // $destinatario = 'juniorpaiva95@gmail.com';
      // $subject	 = 'Assunto do Email';
      // $mensagem = "Olá cara tudo bem?";
      // mail($destinatario, $subject, $mensagem);
      return view('admin.cadastrar-livro')->with(array('categorias' => $categorias, 'autores' => $autores));
    }
    public function searchLivroSite(Request $request){
      $q = Input::get('pesquisa');
      $results = Livro::where('titulo','like','%'.$q.'%')->orderBy('titulo','asc')->paginate(3);
      // foreach ($results as $k => $v) {
      //   $relations = Livro::find($results[$k]['id'])->autores->toArray();
      //   array_push($results[$k],$relations);
      // }
      //return response()->json($results);
      return view('site.busca-livro')->with(['results' => $results, 'pesquisa' => $q]);
    }
    public function searchLivroAdmin(Request $request)
    {
      $q = Input::get('query');
      $livros = Livro::where('titulo','like',$q.'%')->orderBy('titulo','asc')->paginate(4);
      return view('admin.livros-cadastrados')->with(['livros' => $livros,'pesquisa' => $q]);
    }
    public function addAutor(){
      $autor = new Autor();
      $autor->autor = ucwords(Input::get('novoautor'));
      $autor->save();
      //Registrando Log
      $log = new UserLog();
      $log->user_id = Auth::user()->id;
      $log->action = 7;//Novo Autor
      $log->descricao = "Autor cadastrado: ".$autor->autor;
      $log->save();
    }

    public function addLivro(Request $request){
      //Upload image
      if(Input::file('arquivo'))//Se existir algum arquivo no input file ele entra se não retorna falso.
      {
        $arquivo = Input::file('arquivo');// Se cair aqui a var imagem recebe o inputfile de imagem
        $extensao = $arquivo->getClientOriginalExtension();//a var Extensao vai obter a extensao do arquivo que esta na var imagem
        if($extensao != 'jpg' && $extensao != 'png' && $extensao != 'jpeg')
        {
          return back()->with(array('erro' => 'Erro: Este arquivo não é válido.', 'class' => 'danger'));
        }
      }
      $livro = new Livro();
      //Pontuação
      $livro->n_paginas = Input::get('qtd_paginas');
      $livro->tipo = Input::get('tipoLivro');
      if($livro->tipo == 1){//Literario
          $livro->pontos = 5 + intval($livro->n_paginas/100);
      }else if($livro->tipo == 2){//Tecnico
        $livro->pontos = 10 + intval($livro->n_paginas/100);
      }
      //Informações do Livro
      $livro->titulo = ucwords(Input::get("titulo"));
      $livro->desc_livro = ucfirst(Input::get('descricao'));
      $livro->idioma = Input::get('idioma');
      $livro->user_donate_id = Auth::user()->id;
      if(Input::get('isbn') != ""){
        $livro->isbn = Input::get('isbn');
      }
      $livro->editora = Input::get('editora');
      $livro->image = "http://www.rigathisweek.lv/image/3b562a94.70c3fb494";
      if($livro->save()){//Se salvou com sucesso.
        if(Input::file('arquivo')){
          File::move($arquivo,public_path().'/admin/img/img_livros/'.$livro->titulo.$livro->id.'.'.$extensao);
          $livro->image = '/admin/img/img_livros/'.$livro->titulo.$livro->id.'.'.$extensao;
          $livro->save();
        }
        //Relacionamentos 1:N
        foreach ($request->categoria as $key => $v) {
            $l_categ = new Livro_Categoria();
            $l_categ->livro_id = $livro->id;
            $l_categ->categoria_id = $request->categoria[$key];
            $l_categ->save();
        }
        //Save many recorders Autors
        foreach($request->autor as $key => $v){
          $l_autor = new Livro_Autor();
          $l_autor->livro_id = $livro->id;
          $l_autor->autor_id = $request->autor[$key];
          $l_autor->save();
        }
      }
      //Registrando log
      $log = new UserLog();
      $log->user_id = Auth::user()->id;
      $log->action = 4;//Doação
      $log->descricao = "Livro doado: ".$livro->titulo;
      $log->save();

      //Salvando os pontos
      $saldo_antigo = User::where('id',Auth::user()->id)->value('saldo_pontos');
      $user = User::where('id',Auth::user()->id)->update(['saldo_pontos' => $saldo_antigo+$livro->pontos]);
      return Redirect::to('admin/livros/cadastrar-livro')->with(array('status' => 'Livro cadastrado com sucesso! Pontos adquiridos '.$livro->pontos, 'class' => 'success'));
    }

    public function aprovarLivro($idLivro){
      $livro = Livro::find($idLivro);
      $livro->status = 1;
      $livro->save();
      //Registrando Log
      $log = new UserLog();
      $log->user_id = Auth::user()->id;
      $log->action = 6;
      $log->descricao = "Aprovou a doação do Livro: ".$livro->titulo;
      $log->save();

      $logs = UserLog::orderBy('created_at','desc')->take(30)->get();
      $livros = Livro::query()->where('status',0)->get();
      return redirect::back()->with(['livros'=>$livros, 'logs'=>$logs]);
    }
    public function reprovarLivro($idLivro){
      $livro = Livro::find($idLivro);
      $livro->delete();
      //Registrando Log
      $log = new UserLog();
      $log->user_id = Auth::user()->id;
      $log->action = 9;
      $log->descricao = "Reprovou a doação do Livro: ".$livro->titulo;
      $log->save();

      $logs = UserLog::orderBy('created_at','desc')->take(30)->get();
      $livros = Livro::query()->where('status',0)->get();
      return redirect::back()->with(['livros'=>$livros, 'logs'=>$logs]);
    }
    public function reservarLivro($idLivro){
      if(Auth::check()){
        $reserva = new UserReservaLivro();
        $reserva->user_id = Auth::user()->id;
        $reserva->livro_id = $idLivro;
        $reserva->reservado = Carbon::now()->addDay(2);
        $reserva->save();

        Livro::where('id',$idLivro)->update(['status' => 2]);
        return redirect::to('view-book/'.$idLivro);
      }
      //Caso o usuário nao esteja logado.
    }
}

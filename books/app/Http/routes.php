<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
  Aqui estará as rotas necessárias para navegar no site
*/
Route::get('/','PageController@index_Site');
Route::get('/busca','LivroController@searchLivroSite');
// Route::post('/busca?busca={busca}','LivroController@searchLivroSite');

Route::get('/confirm-account/email={email}&email_code={email_code}','AuthController@confirmAccount');

Route::controller('auth','AuthController',
  array(
      'getLogin'  =>  'auth.pageLogin',
      'getLogout' =>  'auth.logout',
      'postLogin' =>  'auth.login',
  )
);
Route::get('/criar-conta','PageController@getPageCriarConta');
Route::post('/criar-conta','AuthController@criarConta');
Route::get('/view-book/{id}','PageController@viewBookDetails');
Route::get('reservar-livro/{id}', ['as' => 'reservar-livro', 'uses' => 'LivroController@reservarLivro']);
Route::group(['middleware'=> 'auth'],function(){
  Route::group(['prefix' => 'admin'],function(){
    Route::get('dashboard', ['as' => 'admin.index', 'uses' => 'PageController@dashboard']);

    //Reserva de Livro


    //Route #Livros
    Route::group(['prefix'=> 'livros'], function () {
         Route::get('categoria', ['as' => 'livros/categoria', 'uses' => 'PageController@getPageCategoria']);
         Route::get('cadastrar-livro', ['as' => 'livros/cadastrar-livro', 'uses' => 'LivroController@index']);
         Route::get('livros-cadastrados', ['as' => 'livros/livros-cadastrados', 'uses' => 'PageController@livrosCadastrados']);
         Route::post('search-livro-admin', ['as' => 'search-livro-admin', 'uses' => 'LivroController@searchLivroAdmin']);
         Route::get('minhas-doacoes', ['as' => 'livros/minhas-doacoes', 'uses' => 'PageController@myDonates']);
         //Cadastrando o livro
         Route::post('cadastrar-livro', ['as' => 'livros/cadastrar-livro', 'uses' => 'LivroController@addLivro']);
         //Aprovando o livro
         Route::get('aprovar-livro/{id}', ['as' => 'livros/aprovar-livro', 'uses' => 'LivroController@aprovarLivro']);
         //Reprovando o Livro (Deleta o Livro)
         Route::get('reprovar-livro/{id}', ['as' => 'livros/reprovar-livro', 'uses' => 'LivroController@reprovarLivro']);
         //Cadastrando autor
         Route::post('cadastrar-autor', ['as' => 'livros/cadastrar-autor', 'uses' => 'LivroController@addAutor']);
         //Cadastrando Categoria
         Route::post('add-categoria',['as' => 'livros/cadastrar-categoria', 'uses' => 'CategoriaController@addCategoria']);
    });
    Route::group(['prefix'=>'usuarios'],function(){
      Route::get('usuarios-cadastrados',['as'=>'usuarios/usuarios-cadastrados', 'uses'=>'PageController@listagemUsuarios']);
    });
  });
});


Route::get('/livros/deletar-categoria/{id}',"CategoriaController@deletarCategoria");
Route::get('/livros/refresh-categoria',"CategoriaController@refreshCategoria");

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get("livros/search-livros",'LivroController@searchLivro');

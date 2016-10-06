<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Contracts\Auth\Guard;
use Auth;
use Redirect;
use App\User;
use App\Models\Livro;
use Hash;
use Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Models\UserLog;
use Mail;
/**
 *
 */
class AuthController extends Controller
{
  private $auth;
  public function __construct(Guard $auth)
  {
    $this->auth = $auth;
  }
  public function getLogin(){
    return view('auth.index');
  }
  public function criarConta(Request $request){
    //Verificando os campos
    if($request->nome == "" && $request->email == "" && $request->password == ""){
      return redirect()->back()->with(['msgcreateuser'=>'Campos inválidos','class'=>'danger']);
    }
    //Verificando se há algum usuário com o mesmo ema il
    $user_email = User::query()->where('email', $request->email)->first();

    if(!$user_email){
        $user = new User();
        $user->nome = $request->nome;
        $user->email = $request->email;
        $user->email_code = md5($request->nome+microtime());
        $user->password = Hash::make($request->password);
        $user->remember_token = $request->_token;
        $user->save();

        // $all = $request->all();
        $user = User::find($user->id);
        // dd($user);
        Mail::queue('emails.welcome', compact('user'), function ($m) use ($user) {
           $m->from('developer.junior@unisigma.com.br', 'Ubooks');
           $m->to($user->email, $user->name)->subject('Bem-vindo ao Ubooks!');
       });
        // Auth::login($user);
        //Registrar no LOG
        $log = new UserLog();
        $log->user_id = $user->id;
        $log->action = 1;//Novo usuário
        $log->descricao = "Novo usuário cadastrado";
        $log->save();
        // return redirect('/admin/dashboard');
        return redirect()->back()->with(['msgcreateuser'=>'Usuário cadastrado com sucesso, verifique seu e-mail para confirmação.','class'=>'success']);
    }
    return redirect()->back()->with(['msgcreateuser'=>'E-mail informado já está cadastrado.', 'class'=>'danger'])->withInput();;

  }
  public function confirmAccount($email,$email_code){
    $id = User::where('email',$email)->value('id');
    if(User::where('email',$email)->where('email_code',$email_code)->where('ativo',0)->count() == 1){
      $logs = UserLog::orderBy('created_at','desc')->take(30)->get();
      $livros = Livro::query()->where('status',0)->get();
      User::where('email_code',$email_code)->update(['ativo'=>1]);

      Auth::loginUsingId($id);
      return redirect::to('/admin/dashboard')->with(['livros'=>$livros, 'logs'=>$logs,'msg'=>'Seja bem-vindo, '.User::where('email_code',$email_code)->value('nome').'. Sua conta está confirmada.','class'=>'success']);
    }
    else{
      if(User::where('id',$id)->value('ativo')==1){
        return "Código de confirmação já foi utilizado.";
      }
      return "Houve um problema na sua ativação";
    }
  }
  public function postLogin(Request $request){
    $user = User::where('email',$request->email)->first();
    if ($user != null && Hash::check($request->password, $user->password) && $user->ativo == 0) {
        return redirect()->back()->with(['msglogin'=>'Prezado usuário, para fazer seu login pela primeira vez é necessário que confirme sua conta com o link que foi enviado para seu e-mail.','class'=>'info']);
    }
    // $data = $request->only(['email', 'password']);
    if($this->auth->attempt(['email'=>$request->email,'password'=>$request->password,'ativo'=>1])){
        //Registrar no LOG
        $user_id = User::query()->where('email',$request->email)->value('id');
        $nome = User::where('id',$user_id)->value('nome');

        $log = new UserLog();
        $log->user_id = $user_id;
        $log->action = 2;//Login
        $log->descricao = "Usuário realizou Login";
        $log->save();
        return redirect('/admin/dashboard');
    }
    return redirect()->back()->with(['msglogin'=>'Verifique suas credenciais e tente novamente','class'=>'danger']);
  }

  public function getLogout(){
    //Registrando no LOG
    $log = new UserLog();
    $log->user_id = Auth::user()->id;
    $log->action = 3;//Logout
    $log->descricao = "Usuário realizou Logout";
    $log->save();
    Auth::logout();
    return redirect('/auth/login');
  }
}

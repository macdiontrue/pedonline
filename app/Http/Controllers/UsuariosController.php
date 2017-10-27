<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Classe\GeradorDeSenha;
class UsuariosController extends Controller
{

    //===========================================================
    public function recuperarSenha()
    {
        return view('recuperar');
    }
    //=============================================================
    public function executarRecuperarSenha(Request $request)
    {
 			$this->validate($request,[
                'email'=>'required|email'
            ]);

            //Verificao do email se eh valido ou nao

            $user=usuarios::where('email',$request->email)->get();
            if($user->count()==0){
            	$erros_bd=['O email nao esta associado a nenhuma conta de usuario'];
            	return view('recuperar',compact('erros_bd'));
            }

            //Atualizacao da senha na base de dados

            $user=$user->first();
            $novasenha=GeradorDeSenha::criarCodigo();
            $user->senha=Hash::make($novasenha);
            $user->save();

            //Enviando a Mensagem





        return $novasenha;
    }
    //==========================================user index-======
     public function userindex()
    {
        return view('userindex');
    }
    //===========================================================
    public function login()
    {
        return view('login');
    }

    public function logout()
    {
    	Session::flush();
        return redirect('/');
    }
    //===========================================================
    public function executarLogin(Request $request){
        //validacao
        $this->validate($request,[
                'email'=>'required|email',
                'senha'=>'required'
         ]);
    	

    	//verificar se o email de usuario existe
    	$user=usuarios::where('email',$request->email)->first();
        

    	if(count($user)==0){
    		$erros_bd=['Essa conta de usuario nao existe'];
    		return view('login',compact('erros_bd'));
    	}

    	//verificar se a senha existe
    	if(!Hash::check($request->senha,$user->senha)){
    		$erros_bd=['A Senha esta Incorrecta'];
    		return view('login',compact('erros_bd'));
    	}

    	//Abrindo Sessao de usuario
    	Session::put('login','sim');
    	Session::put('nome',$user->nome." ". $user->apelido);

    	return redirect('/index');
    }

   //============================================================
    public function registarCliente()
    {
        return view('clienteform');
    }

      //===========================================================
    public function registarRestaurante(){
         return view('restauranteform');
    }

    public function executarRegistarUser(Request $request)
    {
            //Validacao
            $this->validate($request,[
                'nome'=>'required|between:3,30|alpha_num',
                'apelido'=>'required|between:3,30|alpha_num',
                'senha'=>'required|between:8,30',
                'senhaf'=>'required|same:senha',
                'email'=>'required|email',
                'termos'=>'accepted'
            ]);

            //Verificacao do usuario
            $dados=usuarios::where('nome','=',$request->nome)
            ->orWhere('email','=',$request->email)
            ->get();

            if($dados->count()!=0){
            	$erros_bd=['Ja existe um usuario com mesmo nome ou com mesmo email'];
            	return view('clienteform',compact('erros_bd'));
            }

            //Inserir na base de dados
            $novo=new usuarios;
            $novo->nome=$request->nome;
            $novo->apelido=$request->apelido;
            $novo->senha=hash::make($request->senha);
            $novo->email=$request->email;
            $novo->save();


            return redirect('/autenticar');
    }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
	//Verfifica se a sessao esta aberta e redireciona para a pagina home ou dashboard
    public function home(){
    	
    	if(!Session::has('login')){
    		return $this->exibirHome();
    	}else{
    		return view('userdashboard');
    	}
    }
    
    //Exibe a pagina inicial
    public function exibirHome(){
    	return view('index');
    }

    public function endereco(){
    	return view('endereco');
    }

    public function apresentaDashboard(){
     	 if(!Session::has('login')){return redirect('/'); }
    	 return view('userdashboard');
    }
}

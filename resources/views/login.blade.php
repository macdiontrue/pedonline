@extends('layouts.cliente.main')
<br><br><br>
@section('conteudo')
	 <form method="post" action="{{url('login')}}">

		 	<!--csrf_field-->
		 	{{csrf_field()}}
			<div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12">
		 		@include('inc.erros')
		 	   </div>
		 	<div class="row">
		 	<!--Formulario de Login-->
		 	<div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12">
		 		 <!--Imagem-->
		 		<center><img src="img/login.png" class="img-responsive"></center><br>
		 		 <a type="submit" class="btn btn-primary btn-block btn-lg">Facebook</a><br>
		 		  <!--Introducao de email-->
		 	      <div class="form-group">
				    <input type="email" class="form-control input-lg" name="email" id="email"  placeholder="Introduza o email">
				  </div>
				  <!--Introducao da senha-->
				  <div class="form-group">
				    <input type="password" class="form-control input-lg" name="senha" id="senha" placeholder="Introduza a senha">
				  </div>
				  <!--Submissao de dados-->
			 	 <button type="submit" class="btn btn-success btn-block btn-lg">Entrar</button><br>
			 	  <!--Link pra recuperar a senha-->
			 	 <div class="text-center"><a href="{{url('recuperar')}}">Esqueceu a Senha?</a></div>
			 	 <!--Link pra criar nove conta de usuario-->
			 	 <div class="text-center"><a href="{{url('registar/cliente')}}">Criar Nova Conta</a></div>
		 	</div>
	 	</div><!--Fim row-->
	</form><br>
@endsection
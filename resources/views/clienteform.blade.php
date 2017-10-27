@extends('layouts.cliente.main')
@section('conteudo')
 <form method="post" action="{{url('exe_store')}}">

 	<!--csrf_field-->
 	{{csrf_field()}}
 		
	 	<div class="row"><br>
	 		 <div class="col-md-5 col-md-offset-3 col-sm-8  col-xs-12">
	 			@include('inc.erros')
	 	     </div>
		    <div class="col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12"><!--Segunda  coluna-->
		     <br>
			  <div class="form-group">
			    <label for="nome">Nome:</label>
			    <input type="text" class="form-control" name="nome"  id="nome"  placeholder="Introduza o nome">
			  </div>
			 <div class="form-group">

			    <label for="apelido">Apelido:</label>
			    <input type="text" class="form-control" name="apelido"  id="apelido"  placeholder="Introduza o apelido">
			 </div>	
				<div class="form-group">
			    <label for="email">Email:</label>
			    <input type="email" class="form-control" name="email"  id="email"  placeholder="Introduza o email">
			  </div>
			  <div class="form-group">
			    <label for="senha">Senha:</label>
			    <input type="password" class="form-control"  id="senha" name="senha" placeholder="Introduza a senha">
			  </div>

			   <div class="form-group">
			    <label for="senhaf">Confirmar Senha:</label>
			    <input type="password" class="form-control" id="senhaf
			    " name="senhaf"  placeholder="confirme a senha">
			   </div>
			   <div class="form-group text-center">
			   	<input type="checkbox" name="termos" id="termos" value="1" placeholder="confirme a senha">
			    <label for="termos">Concordo com os termos  condicoes</label>
			   </div>
			
 		 	   <center><button type="submit" class="btn btn-success btn-md">Criar Nova Conta</button></center>

 		 	   <div class="text-center">
				   <a href="{{url('/autenticar')}}">Login</a>
			   </div>

		   </div>

		  
	
		   
	
	 	</div>
	</form><br>
@endsection
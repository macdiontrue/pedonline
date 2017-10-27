@extends('layouts.cliente.main')

@section('conteudo')
 <form>
	 	<div class="row">
	 		<div class="col-md-6 col-md-offset-3 col-sm-8  col-xs-12"><br>
				  <div class="form-group">
				    <label for="nome">Nome:</label>
				    <input type="text" class="form-control" id="nome"  placeholder="Introduza o nome">
				  </div>

				 <div class="form-group">
				    <label for="cell">Telefone:</label>
				    <input type="text" class="form-control" id="cell"  placeholder="Introduza o seu telefone">
				 </div>	

				 <div class="form-group">
					  <label for="sel1">Tipo de Comida:</label>
					  <select class="form-control" id="sel1">
					    <option>Mocambicana</option>
					    <option>Mediterania</option>
					    <option>Chinesa</option>
					    <option>Brasileira</option>
					    <option>Portuguesa</option>
					    <option>Alema</option>
					  </select>
				</div>

				<div class="form-group">
			    <label for="email">Email:</label>
			    <input type="email" class="form-control" id="email"  placeholder="Introduza o email">
			  </div>
			  <div class="form-group">
			    <label for="senha">Senha:</label>
			    <input type="password" class="form-control" id="senha" placeholder="Introduza a senha">
			  </div>

			   <div class="form-group">
			    <label for="senhaf">Confirmar Senha:</label>
			    <input type="password" class="form-control" id="senhaf"  placeholder="confirme a senha">
			   </div>	

			 <div class="form-group text-center">
			   	<input type="checkbox" name="termos" id="termos" value="1" placeholder="confirme a senha">
			    <label for="termos">Concordo com os termos  condicoes</label>
			  </div>
		 	 <center><button type="submit" class="btn btn-success btn-md btn-inline btn-right">Criar Nova Conta</button></center>

		   </div>

	 	</div>

		
	</form><br><br><br><br>
@endsection

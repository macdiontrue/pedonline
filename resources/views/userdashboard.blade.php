@extends('layouts.cliente.main')

@section('jumbotron')
<div class="jumbotron jumbotron-dash text-center navbar-fixed-top">
	<div class="container">
		<div class="row">
			<!--Pesquisar-->
			<div class="col-sm-6 col-sm-offset-3" >
				<form>
				  <div class="input-group">
				    <input type="text" class="form-control" placeholder="Informe a sua cidade...">
				    <div class="input-group-btn">
				      <button class="btn btn-success" type="submit">
				        <i class="glyphicon glyphicon-search"></i>
				      </button>
				    </div>
				  </div>
				</form>
			</div>

		</div>
		
	</div>
</div><p><br><br><br><br></p>
@endsection
@section('conteudo')
	 <div class="row">@yield('usercontent')</div>
	 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection

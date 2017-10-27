<!--Apersentacao dos erros de validacao-->
@if(count($errors)!=0)
	<div class="alert alert-danger">
		
		@if(count($errors)==1)
			<p>Erro:</p>
			@else
			<p>Erros</p>
		@endif

		<ul>
			@foreach($errors->all() as $erro)
				<li>{{$erro}}</li>
			@endforeach
		</ul>
	</div>
@endif

<!--Apersentacao dos erros de Base de dados-->
		
@if(isset($erros_bd))
	<div class="alert alert-danger">
		@foreach($erros_bd as $erro)
			<p>{{$erro}}</p>
		@endforeach
	</div>
@endif

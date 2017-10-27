@extends('layouts.cliente.main')
@section('jumbotron')
<div class="jumbotron jumbotron-index text-center">
<br><br><br><br>
 <h2 class="text-success">Informe a Sua Localizacao</h2>
<form class="form-block">
  	<div class="row">
  		<div class="col-sm-4"></div>
  		<div class="col-sm-4">
  			  <div class="form-group">
					  <select class="form-control" id="sel1">
					    <option>Cidade</option>
					    <option>2</option>
					    <option>3</option>
					    <option>4</option>
					  </select>
				</div>
				 <div class="form-group">
					  <select class="form-control" id="sel1">
					    <option>Distrito</option>
					    <option></option>
					    <option>3</option>
					    <option>4</option>
					  </select>
				</div>
				 <div class="form-group">
					  <select class="form-control" id="sel1">
					    <option>Bairro</option>
					    <option>2</option>
					    <option>3</option>
					    <option>4</option>
					  </select>
				</div>

				 <div class="input-group">
			      <input type="text" class="form-control input-md size="50" placeholder="Introduza o seu endereco..." required="">
			      <div class="input-group-btn">
			        <a href="{{url('cliente/dashboard')}}" class="btn btn-danger btn-md">Pesquisar</a>
			      </div>
			    </div>
  		</div>
  		<div class="col-sm-4"></div>
  	</div>
  </form>
</div>
@endsection
@section('conteudo')
	 <div class="starter-template">
        <h1>Swakuda Software Development</h1>
        <p class="lead">Somos especialisados em desenvolvimento de software's de inovacao para o mercado actual, atualmente desenvolvemos uma plataforma que permite que qualquer pessoa possa comprar comida online e receber em sua casa sem se deslocar um centimetro se quer,veja os termos de referencia e comece a usar Swakuda.</p>
     </div>

<div class="container">
	<div class="row">
		<div class='list-group gallery'>
            
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="#">
                    <img class="img-responsive" alt="" src="{{asset('img/f2.jpg')}}" />
                </a>
            </div> <!-- col-6 / end -->

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="#">
                    <img class="img-responsive" alt="" src="{{asset('img/f3.jpg')}}" />
                </a>
            </div> <!-- col-6 / end -->

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="#">
                    <img class="img-responsive" alt="" src="{{asset('img/f4.jpg')}}" />
                </a>
            </div> <!-- col-6 / end -->


            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="#">
                    <img class="img-responsive" alt="" src="{{asset('img/r5.jpg')}}" />
                </a>
            </div> <!-- col-6 / end -->            
        </div> <!-- list-group / end -->
	</div> <!-- row / end -->
</div> <!-- container / end -->
@endsection
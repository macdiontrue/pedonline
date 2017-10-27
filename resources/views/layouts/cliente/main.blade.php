<!DOCTYPE html>
<!-- saved from url=(0060)https://getbootstrap.com/docs/3.3/examples/starter-template/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Sistema de pedidos online para restaurantes">
    <meta name="author" content="Rodrigues Mafumo,Dionisio Macamo, Costa Tangune">
    <link rel="icon" href="{{asset('img/logokuda1.png')}}">

    <title>@yield('titulo','Swakuda Software Development')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{asset('css/workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/estilo.css')}}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{asset('js/emulador.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('img/logokuda1.png')}}" alt="Swakuda" class="img-responsive img-logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
              @if (Session::has('login'))
                         <center>
                            <li class="dropdown"  class="divider"><span class="sms">Seja bem vindo(a),{{session('nome')}}</span>
                              <a data-toggle="dropdown" class="dropdown-toggle"><img   src="{{url('img/user.png')}}" class="img-resposinve img-circle  img-user" ></a>

                            <ul class="dropdown-menu col-md-offset-4">
                                <li><a href="#">Buscar Restaurantes</a></li>
                                <li role="presentation" class="divider"></li>
                                <li><a href="#">Meus Pedidos</a></li>
                                <li role="presentation" class="divider"></li>
                                <li><a href="#">Editar Perfil</a></li>
                                <li role="presentation" class="divider"></li>
                                <li><a href="{{url('logout')}}" >Sair</a></li>
                            </ul>
                           </li>
                       </center>
                    @else
                          <li><a href="{{url('registar/restaurante')}}"><span class="glyphicon glyphicon-home"></span>Registe seu restaurante</a></li>
                          <li><a href="{{url('registar/cliente')}}"><span class="glyphicon glyphicon-user"></span>Registe-se</a></li>
                          <li><a href="{{url('autenticar')}}"><span class="glyphicon glyphicon-log-in"></span>Entrar</a></li>
                    
              @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!--jumbotron-->
     @yield('jumbotron')
    <!--Conteudo-->
    <div class="container">

      @yield('conteudo')

    </div>
    <!-- /.container -->
    <!--Footer-->
   <footer class="container-fluid text-center">
        <a href="#" title="To Top">
          <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
      <p>Copyright@2017<a href="{{url('/')}}"> www.Swakuda.cdr.com</a></p>
    </footer>
        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}/"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{asset('js/workaround.js')}}"></script>
    <script type="text/javascript">
  var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
 
$(".next").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  next_fs = $(this).parent().next();
  
  //activate next step on progressbar using the index of next_fs
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  
  //show the next fieldset
  next_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale current_fs down to 80%
      scale = 1 - (1 - now) * 0.2;
      //2. bring next_fs from the right(50%)
      left = (now * 50)+"%";
      //3. increase opacity of next_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
      next_fs.css({'left': left, 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});
 
$(".previous").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();
  
  //de-activate current step on progressbar
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
  
  //show the previous fieldset
  previous_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale previous_fs from 80% to 100%
      scale = 0.8 + (1 - now) * 0.2;
      //2. take current_fs to the right(50%) - from 0%
      left = ((1-now) * 50)+"%";
      //3. increase opacity of previous_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({'left': left});
      previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});
 
$(".submit").click(function(){
  return false;
})
</script>


  
</body>
</html>
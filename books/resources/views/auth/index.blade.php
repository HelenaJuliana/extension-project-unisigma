<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Login</title>
  <!-- CUSTOM STYLE -->
  <link href="{{ asset('site/css/style.css') }}" rel="stylesheet" />
  <!-- THEME TYPO -->
  <link href="{{ asset('site/css/themetypo.css') }}" rel="stylesheet" />
  <!-- BOOTSTRAP -->
  <link href="{{ asset('site/css/bootstrap.css') }}" rel="stylesheet" />
  <!-- COLOR FILE -->
  <link href="{{ asset('site/css/color.css') }}" rel="stylesheet" />
  <!-- FONT AWESOME -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <!-- BX SLIDER -->
  <link href="{{ asset('site/css/jquery.bxslider.css') }}" rel="stylesheet" />
  <!-- BX SLIDER -->
  <link href="{{ asset('site/css/bootstrap-slider.css') }}" rel="stylesheet" />
  <!-- BX SLIDER -->
  <link href="{{ asset('site/css/widget.css') }}" rel="stylesheet" />
  <!-- BX SLIDER -->
  <link href="{{ asset('site/css/shortcode.css') }}" rel="stylesheet" />
  <!-- responsive -->
  <link href="{{ asset('site/css/responsive.css') }}" rel="stylesheet" />
  <!-- Component -->
  <link href="{{ asset('site/js/dl-menu/component.css') }}" rel="stylesheet" />
  <!-- Slick Carousel -->
  <!-- <link rel="stylesheet" href="{{ asset('site/css/slick.css') }}" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="{{ asset('site/css/slick-theme.css') }}" media="screen" title="no title" charset="utf-8"> -->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
  <![endif]-->
</head>
<body>
  <div id="loader-wrapper">
    <!-- <div id="loader"></div> -->

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

  </div>
  <!--WRAPPER START-->
  <div class="wrapper">
    @include('layouts_site.cabecalho')
    <!--CONTENT START-->
    <div class="kode-content">
      <div class="container">

        @if(Auth::check())
          <h3>Já existe um usuário logado.</h3>
        @else
          <!-- LOGIN START -->
          <div class="col-lg-5">
            <p class="text-center">Login</p>
            <hr>
            <form class="" action="{{ url::route('auth.login') }}" method="post">
              @if(session('msglogin'))
              <div class="alert alert-{{session('class')}}">
                <b>{{session('msglogin')}}</b>
              </div>
              @endif

              {{ csrf_field() }}
              <div class="form-group">
                <label>Email</label>
                <input type="email" required class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
              </div>
              <div class="form-group">
                <label>Senha</label>
                <input type="password" required class="form-control" name="password" placeholder="Senha" value="">
              </div>
              <div class="form-group">
                <button type="submit" class="button-default">Entrar</button>
              </div>
            </form>
          </div>
          <!-- LOGIN END -->
          <div class="col-lg-2">
            <p class="text-center">ou</p>
            <!-- <hr> -->
          </div>
          <div class="col-lg-5">
            <p class="text-center">Criar conta</p>
            <hr>
            <form class="" action="{{ url('/criar-conta') }}" method="post">
              @if(session('msgcreateuser'))
              <div class="alert alert-{{session('class')}}">
                <b>{{session('msgcreateuser')}}</b>
              </div>
              @endif

              {{ csrf_field() }}
              <div class="form-group">
                <label>Nome</label>
                <input type="text" required placeholder="Nome" class="form-control" name="nome" value="{{ old('nome') }}">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" required placeholder="Email" class="form-control" name="email" value="{{ old('email') }}">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" required min="6" placeholder="Senha" class="form-control" name="password">
              </div>
              <div class="form-group">
                <button type="submit" class="button-default" name="criar">Criar</button>
              </div>
            </form>
          </div>
        @endif

      </div>
    </div>
    <!--CONTENT END-->

  </div>
  @include('layouts_site.footer')


  <!--WRAPPER END-->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{ asset('site/js/jquery.min.js') }}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('site/js/jquery.bxslider.min.js') }}"></script>
  <script src="{{ asset('site/js/bootstrap-slider.js') }}"></script>
  <script src="{{ asset('site/js/waypoints.min.js') }}"></script>
  <script src="{{ asset('site/js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('site/js/dl-menu/modernizr.custom.js') }}"></script>
  <script src="{{ asset('site/js/dl-menu/jquery.dlmenu.js') }}"></script>
  <script src="{{ asset('site/js/classie.js') }}"></script>
  <script src="{{ asset('site/js/functions.js') }}"></script>

  <!-- Slick Carousel -->
  <script src="{{ asset('site/js/slick.js') }}" charset="utf-8"></script>

</body>
</html>

<!--HEADER START-->
<header class="" id="cabecalho">
  <div class="top-strip">
    <div class="container">
      <div class="site-info">
        <ul>
          <li><a href="mailto:Info@vevlivros.com"><i class="fa fa-envelope-o"></i>Info@vevlivros.com</a></li>
          <li><a href="#"><i class="fa fa-heart"></i></a></li>
          <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
          <li><a href="#" id="search-box"><i class="fa fa-search"></i></a></li>

        </ul>
      </div>
    </div>
  </div>
  <!--Search Overlay Box Starts -->
  <div id="kode_search_box" class="kode_search_box">
    <form class="kode_search_box-form">
      <input class="kode_search_box-input" type="search" placeholder="Search..."/>
      <button class="kode_search_box-submit" type="submit">Search</button>
    </form>
    <span class="kode_search_box-close"></span>
  </div><!-- /kode_search_box -->
  <div class="overlay"></div>
  <div class="overlay"></div>
  <div class="logo-container">
    <div class="container">
      <!--LOGO START-->
      <div class="logo">
        <a href="#"><img src="{{ asset('site/images/logobranco.png') }}" alt=""></a>
      </div>
      <!--LOGO END-->
      <div class="kode-navigation">
        <ul>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="about-us.html">Sobre nós</a></li>
          <li><a href="contact-us.html">Contato</a></li>
          <li><a href="{{ url('/criar-conta') }}">Criar Conta</a></li>
          @if(Auth::check())
              <li class="last"><a href="{{ url('/login') }}"><i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->nome }}</a>
                <ul>
                  <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i> Meu espaço</a></li>
                  <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                </ul>
              </li>
          @else
          <li class="last"><a href="{{ url('/login') }}"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
          @endif
        </ul>
      </div>
      <div id="kode-responsive-navigation" class="dl-menuwrapper">
        <button class="dl-trigger">Open Menu</button>
        <ul class="dl-menu">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="#">Sobre nós</a></li>
          <li><a href="#">Contato</a></li>
          <li><a href="{{ url('/criar-conta') }}">Criar Conta</a></li>
          @if(Auth::check())
              <li class="menu-item kode-parent-menu last"><a href="{{ url('/login') }}"><i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->nome }}</a>
                <ul class="dl-submenu">
                  <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i> Meu espaço</a></li>
                  <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                </ul>
              </li>
          @else
          <li class="last"><a href="{{ url('/login') }}"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
          @endif
        </ul>
      </div>
    </div>
  </div>
</header>
<!--HEADER END-->
<!--BANNER START-->
<div class="kode-inner-banner" style="background-image:url( {{ asset('site/images/inner-banner.png') }} )">
  <div class="kode-page-heading">
    <h2>@yield('place')</h2>
      <!-- <ol class="breadcrumb">
        <li><a href="#"></a>@yield('place1')</li>
        <li><a href="#"></a>@yield('place2')</li>
        <li class="active">@yield('place3')</li>
      </ol> -->
  </div>
  <div class="container">
    <div class="banner-search">
      <div class="row">
        <form method="get" action="{{ url('/busca') }}"  id="formBusca">
          <div class="col-md-2">
            <h2>Pesquise<br> Seus Livros</h2>
          </div>
          <div class="col-md-8">
            <input type="text" name="pesquisa" placeholder="Informe o Título">
          </div>
        <div class="col-md-2">
          <button type="submit">Pesquisar</button>
        </div>
        </form>
    </div>
  </div>
</div>
</div>
<!--BANNER END-->
<!-- <script src="{{ asset('Admin/js/jquery-2.1.1.js') }}"></script> -->
<!-- <script type="text/javascript">
$(document).ready(function(){
  var dados = $("#formBusca").serialize();
  $("#formBusca").on('submit',function(){
    $.ajax({
  		url : "/busca?busca="+$("pesquisa").val(),
  		type : "POST",
  		data: dados,
  		success : function(result) {
        alert(url);
        alert('sucesso');
  			if (result.isValid) {

  			} else {

  			}
  		}
  	});
  });
});

</script> -->

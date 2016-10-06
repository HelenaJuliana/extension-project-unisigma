<nav class="navbar-default navbar-static-side" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav metismenu" id="side-menu">
      <li class="nav-header">
        <div class="dropdown profile-element"> <span>
          <img alt="image" class="img-circle" src="{{ asset('Admin/img/profile_small.jpg') }}" />
        </span>
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
          <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->nome }}</strong>
          </span> <span class="text-muted text-xs block">@if(Auth::user()->tipo == 0) USUÁRIO @else MASTER @endif<b class="caret"></b></span> </span> </a>
          <ul class="dropdown-menu animated fadeInRight m-t-xs">
            <li><a href="profile.html">Profile</a></li>
            <li><a href="contacts.html">Contacts</a></li>
            <li><a href="mailbox.html">Mailbox</a></li>
            <li class="divider"></li>
            <li><a href="{{ url('/logout') }}">Logout</a></li>
          </ul>
        </div>
        <div class="logo-element">
          UNI
        </div>
      </li>
      <li class="{{ Request::is('/admin/dashboard') ? 'active' : null }}"><a href="{{ URL('/admin/dashboard') }}"><i class="fa fa-th-large"></i><span class="nav-label"> Dashboards</span></a></li>
      <li class="{{ Request::is('/admin/livros/*') ? 'active' : null }}">
        <a href="#"><i class="fa fa-book"></i><span class="nav-label">Livros</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">

          @if(Auth::user()->tipo == 0)
            <li class="{{ Request::is('/admin/livros/cadastrar-livro') ? 'active' : null }}"><a href="{{ URL::route('livros/cadastrar-livro') }}"><i class="fa fa-plus"></i> Novo</a></li>
            <li class="{{ Request::is('/admin/livros/minhas-doacoes') ? 'active' : null }}"><a href="{{ URL::route('livros/minhas-doacoes') }}"><i class="fa fa-plus"></i> Minhas Doações</a></li>
          @else
            <li class="{{ Request::is('/admin/livros/cadastrar-livro') ? 'active' : null }}"><a href="{{ URL::route('livros/cadastrar-livro') }}"><i class="fa fa-plus"></i> Novo</a></li>
            <li class="{{ Request::is('/admin/livros/minhas-doacoes') ? 'active' : null }}"><a href="{{ URL::route('livros/minhas-doacoes') }}"><i class="fa fa-book"></i> Minhas Doações</a></li>
            <li class="{{ Request::is('/admin/livros/categoria') ? 'active' : null }}"><a href="{{ URL::route('livros/categoria') }}"><i class="fa fa-tags"></i> Categoria</a></li>
            <li class="{{ Request::is('/admin/livros/livros-cadastrados') ? 'active' : null }}"><a href="{{ URL::route('livros/livros-cadastrados') }}"><i class="fa fa-list"></i> Cadastrados</a></li>
          @endif
        </ul>
      </li>
      @if(Auth::user()->tipo == 1)
      <li class="{{ Request::is('/admin/usuarios/*') ? 'active' : null }}">
        <a href="#"><i class="fa fa-user"></i><span class="nav-label">Usuários</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li class="{{ Request::is('/admin/usuarios/usuarios-cadastrados') ? 'active' : null }}"><a href="{{ URL::route('usuarios/usuarios-cadastrados') }}"><i class="fa fa-list"></i> Cadastrados</a></li>
        </ul>
      </li>
      @endif
    </ul>

  </div>
</nav>

<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Livros Cadastrados</title>

  <link href="{{ asset('Admin/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

  <link href="{{ asset('Admin/css/animate.css') }}" rel="stylesheet">
  <link href="{{ asset('Admin/css/style.css') }}" rel="stylesheet">

  <!-- DataTables -->
  <link href="{{ asset('Admin/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
  <!-- Sweet Alert -->
  <link href="{{ asset('Admin/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">

  <link href="{{ asset('Admin/css/plugins/slick/slick.css') }}" rel="stylesheet">
  <link href="{{ asset('Admin/css/plugins/slick/slick-theme.css') }}" rel="stylesheet">

  <style media="screen">
  .product-imitation img{
    width: 100%;
    height: 0 auto;
    min-height: 100%;
    min-width: 100%;
  }
  .product-imitation{
    border: solid 1px;
  }
  img.resize {

  }
  input[name=query]{
    background: transparent;
    border-right: 0px transparent;
    border-left: 0px transparent;
    border-top: transparent;
    border-bottom: 5px solid #ddd;
  }
  </style>
</head>

<body class="">

  <div id="wrapper">

    @include('layouts_admin.menu')
    <div id="page-wrapper" class="gray-bg">
      @include('layouts_admin.cabecalho')
      <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
          <h2><i class="fa fa-book"></i> Livros</h2>
          <ol class="breadcrumb">
            <li>
              <a href="/">Dashboard</a>
            </li>
            <li class="active">
              <strong><i class="fa fa-book"></i> Livros</strong>
            </li>
          </ol>
        </div>
      </div>

      <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">

          <!-- Search Livro -->
          <!-- <a class="btn btn-default" href="{{ url('livros/search-livros') }}">Teste</a> -->
          <form role="form" method="post" action="{{ url('/admin/livros/search-livro-admin') }}">
            {{ csrf_field() }}
            <div class="form-group col-lg-12">
              <input type="text" name="query" required class="form-control" placeholder="Informe o Titulo ou Autor do Livro.">
            </div>
          </form>
          @if(Request::isMethod('post'))
          <div class="col-lg-12">
            <h4 class="text-center">Você pesquisou por : {{ $pesquisa }}</h4>
          </div>
          @endif
          <div class="">

            <?php $pos=1 ?>
            @foreach($livros as $p)
            @if($pos % 4 == 0)
            <div class="row">
              @endif
              <div class="col-md-3">
                <div class="ibox">
                  <div class="ibox-content product-box">
                    <div class="product-imitation">
                      <img alt="image" class="" height="292" width="236" src="{{ $p->image }}" />
                    </div>
                    <div class="product-desc">
                      <!-- <span class="product-price">
                      10
                    </span> -->
                    <h4 style="color: #1ab394">Titulo:</h4>
                    <h4>{{ $p->titulo }}</h4>
                    <!-- <a href="#" class="product-name">{{ $p->titulo }}</a> -->
                    <h4 style="color: #1ab394">Categorias:</h4>
                    <div class="" style="padding: 5px 0px 5px 0px;">
                      @foreach($p->categorias as $c)
                      <i class="fa fa-tags"></i> {{ $c->descricao }}
                      @endforeach
                    </div>
                  </small>
                  <h4 style="color: #1ab394">Autores:</h4>
                  <div class="" style="padding: 5px 0px 5px 0px;">
                    @foreach($p->autores as $a)
                    <i class="fa fa-tags"></i> {{ $a->autor }}
                    @endforeach
                  </div>
                </small>
                <div class="small m-t-xs">
                  {{ $p->desc_livro }}
                </div>
                <div class="m-t text-righ">
                  <a href="#" class="btn btn-xs btn-outline btn-primary">Visualizar </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @if($pos % 4 == 0)
      </div>
      @endif
      <?php $pos++ ?>
      @endforeach
      <div class="col-md-12 text-center">
        {{ $livros->links() }}
      </div>

    </div>


  </div>
</div>


<div class="footer">
  <div class="pull-right">
    Development <strong>UNISIGMA</strong> Consultoria.
  </div>
  <div>
    <strong>Copyright</strong> Unisigma &copy;
  </div>
</div>

</div>
</div>

<!-- Mainly scripts -->
<script src="{{ asset('Admin/js/jquery-2.1.1.js') }}"></script>
<script src="{{ asset('Admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('Admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('Admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('Admin/js/inspinia.js') }}"></script>
<script src="{{ asset('Admin/js/plugins/pace/pace.min.js') }}"></script>

<!-- slick carousel-->
<script src="{{ asset('Admin/js/plugins/slick/slick.min.js') }}"></script>

<!-- Jquery Validate -->
<script src="{{ asset('Admin/js/plugins/validate/jquery.validate.min.js') }}"></script>

<!-- Sweet alert -->
<script src="{{ asset('Admin/js/plugins/sweetalert/sweetalert.min.js') }}"></script>




<!-- DataTables -->
<script src="{{ asset('Admin/js/plugins/dataTables/datatables.min.js') }}"></script>


</body>

</html>

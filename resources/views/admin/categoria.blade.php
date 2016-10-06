<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Cadastro Categoria</title>

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

  <link rel="stylesheet" href="{{ asset('Admin/css/bootstrap.min.css') }}" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="{{ asset('Admin/css/animate.css') }}" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="{{ asset('Admin/css/style.css') }}" media="screen" title="no title" charset="utf-8">

  <!-- DataTables -->
  <link href="{{ asset('Admin/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
  <!-- Sweet Alert -->
  <link href="{{ asset('Admin/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">

</head>

<body class="">

  <div id="wrapper">

    @include('layouts_admin.menu')

    <div id="page-wrapper" class="gray-bg">
      <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
              <div class="form-group">
                <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
              </div>
            </form>
          </div>
          <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
              </a>
              <ul class="dropdown-menu dropdown-messages">
                <li>
                  <div class="dropdown-messages-box">
                    <a href="profile.html" class="pull-left">
                      <img alt="image" class="img-circle" src="{{ asset('Admin/img/a7.jpg') }}">
                    </a>
                    <div class="media-body">
                      <small class="pull-right">46h ago</small>
                      <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                      <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                    </div>
                  </div>
                </li>
                <li class="divider"></li>
                <li>
                  <div class="dropdown-messages-box">
                    <a href="profile.html" class="pull-left">
                      <img alt="image" class="img-circle" src="{{ asset('Admin/img/a4.jpg') }}">
                    </a>
                    <div class="media-body ">
                      <small class="pull-right text-navy">5h ago</small>
                      <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                      <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                    </div>
                  </div>
                </li>
                <li class="divider"></li>
                <li>
                  <div class="dropdown-messages-box">
                    <a href="profile.html" class="pull-left">
                      <img alt="image" class="img-circle" src="{{ asset('Admin/img/profile.jpg') }}">
                    </a>
                    <div class="media-body ">
                      <small class="pull-right">23h ago</small>
                      <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                      <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                    </div>
                  </div>
                </li>
                <li class="divider"></li>
                <li>
                  <div class="text-center link-block">
                    <a href="mailbox.html">
                      <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                    </a>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
              </a>
              <ul class="dropdown-menu dropdown-alerts">
                <li>
                  <a href="mailbox.html">
                    <div>
                      <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                      <span class="pull-right text-muted small">4 minutes ago</span>
                    </div>
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="profile.html">
                    <div>
                      <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                      <span class="pull-right text-muted small">12 minutes ago</span>
                    </div>
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="grid_options.html">
                    <div>
                      <i class="fa fa-upload fa-fw"></i> Server Rebooted
                      <span class="pull-right text-muted small">4 minutes ago</span>
                    </div>
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <div class="text-center link-block">
                    <a href="notifications.html">
                      <strong>See All Alerts</strong>
                      <i class="fa fa-angle-right"></i>
                    </a>
                  </div>
                </li>
              </ul>
            </li>


            <li>
              <a href="login.html">
                <i class="fa fa-sign-out"></i> Log out
              </a>
            </li>
          </ul>

        </nav>
      </div>
      <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
          <h2><i class="fa fa-book"></i> Livros</h2>
          <ol class="breadcrumb">
            <li>
              <a href="/">Dashboard</a>
            </li>
            <li class="active">
              <strong><i class="fa fa-tags"></i> Categoria</strong>
            </li>
          </ol>
        </div>
      </div>

      <div class="wrapper wrapper-content">
        <div class="animated fadeInRightBig">

          <div class="ibox float-e-margins">
            <div class="ibox-title">
              <h5>Cadastro de Categoria</h5>
            </div>

            <!-- Box Cadastro -->
            <div class="ibox-content" style="display: block;">
              <div class="row">
                <div class="col-sm-12">
                  @if(session('msg'))
                    <div class="alert alert-{{session('class')}}">
                      <b>{{session('msg')}}</b>
                    </div>
                  @endif
                  <form role="form" id="formCategoria" method="post" action="{{ url::route('livros/cadastrar-categoria') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label>Nome da categoria</label>
                      <input type="text" name="categoria" placeholder="Nome da Categoria" class="form-control capitalize">
                    </div>
                    <div>
                      <button class="btn btn-sm btn-primary pull-left m-t-n-xs message1" type="submit">
                        <i class="fa fa-check"></i>
                        <strong>Adicionar</strong>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- End Box Cadastro -->

          <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
              <div class="col-lg-12">
                <div class="ibox float-e-margins">
                  <div class="ibox-title">
                    <h5>Tabela de Categorias Cadastradas</h5>
                  </div>
                  <div class="ibox-content" id="reload">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover " id="tableCategoria" >
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Descricao</th>
                            <th>Ação</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($categorias as $categoria)
                          <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->descricao }}</td>
                            <td>
                              <a href="#" id="{{ $categoria->id }}" class="btn btn-danger deletar-categoria" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash"></i></a>
                              <a href="#" class="btn btn-info" data-toggle="tooltip" title="Editar"><i class="fa fa-pencil-square-o"></i></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                  </table>
                </div>

              </div>
            </div>
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

<!-- Jquery Validate -->
<script src="{{ asset('Admin/js/plugins/validate/jquery.validate.min.js') }}"></script>

<!-- Sweet alert -->
<script src="{{ asset('Admin/js/plugins/sweetalert/sweetalert.min.js') }}"></script>

<!-- DataTables -->
<script id="scriptDataTable" src="{{ asset('Admin/js/plugins/dataTables/datatables.min.js') }}"></script>

<script type="text/javascript">
  $(document).ready(function(){
      $('#tableCategoria').DataTable({
      destroy: true,
      "processing": true,
      "language": {
        "sEmptyTable": "Nenhum registro encontrado",
        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
        "sInfoPostFix": "",
        "sInfoThousands": ".",
        "sLengthMenu": "_MENU_ resultados por página",
        "sLoadingRecords": "Carregando...",
        "sProcessing": "Processando...",
        "sZeroRecords": "Nenhum registro encontrado",
        "sSearch": "Pesquisar",
        "oPaginate": {
          "sNext": "Próximo",
          "sPrevious": "Anterior",
          "sFirst": "Primeiro",
          "sLast": "Último"
        },
        "oAria": {
          "sSortAscending": ": Ordenar colunas de forma ascendente",
          "sSortDescending": ": Ordenar colunas de forma descendente"
        },
      },
      dom: '<"html5buttons"B>lTfgitp',
      buttons: [
        {extend: 'copy'},
        {extend: 'csv'},
        {extend: 'excel', title: 'Relatorio_Categoria'},
        {extend: 'pdf', title: 'Relatorio_Categoria'},
        {extend: 'print',
        customize: function (win){
          $(win.document.body).addClass('white-bg');
          $(win.document.body).css('font-size', '10px');

          $(win.document.body).find('table')
          .addClass('compact')
          .css('font-size', 'inherit');
        }
      }
    ]
  });

  });
</script>
<script type="text/javascript">
// $(document).ready(function(){
//   $(".deletar-categoria").click(function(){
//     var id = this.id;
//     swal({
//       title: "Você tem certeza?",
//       text: "Deseja remover esta categoria ?",
//       type: "warning",
//       showCancelButton: true,
//       confirmButtonColor: "#DD6B55",
//       confirmButtonText: "Sim",
//       cancelButtonText: "Não",
//       closeOnConfirm: false,
//       closeOnCancel: false },
//       function(isConfirm){
//         if (isConfirm) {
//           swal("Excluido", "Categoria excluída com sucesso!.", "success");
//           $.ajax({
//             type: "GET",
//             url: "deletar-categoria/"+id,
//           });
//           RefreshTable();
//         }
//         else {
//           swal({
//             title: "Cancelado",
//             type: "error",
//             confirmButtonColor: "#DD6B55",
//           });
//         }
//       });
//     });
//   });
//   function RefreshTable(data) {
//     $( "#reload" ).load( " #reload" );
//     $("#scriptDataTable").load("#scriptDataTable");
//   }
  </script>
  <script>
  $(document).ready(function(){
    $("#formCategoria").validate({
      rules: {
        categoria: {
          required: true,
          minlength: 3
        }
      },
      messages: {
        categoria: {
          required: "Este campo é necessário",
          minlength: "Minímo de 3 caracteres",
        },
      }
      // submitHandler: function(form){
      //   var dados = jQuery(form).serialize();
      //   //alert(dados);
      //   $.ajax({
      //     type: "POST",
      //     url: "add-categoria",
      //     data: dados,
      //     success: function(){
      //       swal("Categoria Adicionada", "" , "success");
      //       RefreshTable();
      //       $("input[name=categoria]").val("");
      //     },
      //     error: function(){
      //       swal("Dado já registrado!", "" , "error");
      //     }
      //   });///ajax
      // }///submitHandler
    });
  });
  </script>

  <script type="text/javascript">
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();

    function fnClickAddRow() {
        $('#editable').dataTable().fnAddData( [
            "Custom row",
            "New row",
            "New row",
            "New row",
            "New row" ] );
    }


  });
</script>

</body>

</html>

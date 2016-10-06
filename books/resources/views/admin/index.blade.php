<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Dashboard</title>

  <link href="{{ asset('Admin/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

  <link href="{{ asset('Admin/css/animate.css') }}" rel="stylesheet">
  <link href="{{ asset('Admin/css/style.css') }}" rel="stylesheet">

  <!-- DataTables -->
  <link href="{{ asset('Admin/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
</head>

<body>
  <div id="wrapper">
    @include('layouts_admin.menu')

    <div id="page-wrapper" class="gray-bg">
      @include('layouts_admin.cabecalho')
      <div class="wrapper wrapper-content">
        @if(session('msg'))
        <div class="alert alert-{{session('class')}}">
          <b>{{ session('msg') }}</b>
        </div>
        @endif
        @include('layouts_admin.info-dashboard')

        @if(Auth::user()->tipo == 1)
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5>Cadastro de Livros Pendentes</h5>
              </div>
              <div class="ibox-content">
                <!-- Start table -->
                <div class="table-responsive">
                  <table class="table table-bordered table-hover" id="tableLivrosPendentes">
                    <thead>
                      <td>Id</td>
                      <td>Livro</td>
                      <td>Status</td>
                      <td>Ações</td>
                    </thead>
                    <tbody>
                      @if($livros->count() > 0)
                      @foreach($livros as $l)
                      <tr>
                        <td>{{ $l->id }}</td>
                        <td>{{ $l->titulo }}</td>
                        <td>Pendente</td>
                        <td>
                          <a href="#" class="btn btn-info"><i class="fa fa-eye"></i></a>
                          <a href="{{ url('admin/livros/aprovar-livro/'.$l->id) }}" class="btn btn-success"><i class="fa fa-check"></i></a>
                          <a href="{{ url('admin/livros/reprovar-livro/'.$l->id) }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                      </tr>
                      @endforeach
                      @endif
                    </tbody>
                  </table>
                </div>
                <!-- End Table -->
              </div>
            </div>
          </div>
        </div>

        <!-- Start Table Logs -->
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5>Logs de Usuários</h5>
              </div>
              <div class="ibox-content">
                <!-- Start table -->
                <div class="table-responsive">
                  <table class="table table-bordered table-hover" id="tableLogs">
                    <thead>
                      <td>Nome do Usuário</td>
                      <td>Tipo Usuário</td>
                      <td>Ação</td>
                      <td>Descrição</td>
                      <td>Data / Hora</td>
                    </thead>
                    <tbody>
                      @foreach($logs as $log)
                      <tr>
                        <td>{{ DB::table('users')->where('id',$log->user_id)->value('nome') }}</td>
                        <td>
                          @if(DB::table('users')->where('id',$log->user_id)->value('tipo') == 0)
                          Normal
                          @else
                          Administrativo
                          @endif
                        </td>
                        <td>
                          @if($log->action == 1)Criação de Conta
                          @elseif($log->action == 2)Login
                          @elseif($log->action == 3)Logout
                          @elseif($log->action == 4)Doação de Livro
                          @elseif($log->action == 5)Reserva de Livro
                          @elseif($log->action == 6)Aprovação de Doação
                          @elseif($log->action == 7)Novo Autor cadastrado
                          @elseif($log->action == 8)Nova Categoria cadastrada
                          @elseif($log->action == 9)Reprovação de Doação
                          @endif
                        </td>
                        <td>{{ $log->descricao }}</td>
                        <td>{{ $log->created_at }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- End Table -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Table Logs -->
        @endif

      </div>
      <div class="footer">
        <div class="pull-right">
          10GB of <strong>250GB</strong> Free.
        </div>
        <div>
          <strong>Copyright</strong> Example Company &copy; 2014-2015
        </div>
      </div>
    </div>
    <div id="right-sidebar">
      <div class="sidebar-container">

        <ul class="nav nav-tabs navs-3">

          <li class="active"><a data-toggle="tab" href="#tab-1">
            Notes
          </a></li>
          <li><a data-toggle="tab" href="#tab-2">
            Projects
          </a></li>
          <li class=""><a data-toggle="tab" href="#tab-3">
            <i class="fa fa-gear"></i>
          </a></li>
        </ul>

        <div class="tab-content">


          <div id="tab-1" class="tab-pane active">

            <div class="sidebar-title">
              <h3> <i class="fa fa-comments-o"></i> Latest Notes</h3>
              <small><i class="fa fa-tim"></i> You have 10 new message.</small>
            </div>

            <div>

              <div class="sidebar-message">
                <a href="#">
                  <div class="pull-left text-center">
                    <img alt="image" class="img-circle message-avatar" src="img/a1.jpg">

                    <div class="m-t-xs">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                    </div>
                  </div>
                  <div class="media-body">

                    There are many variations of passages of Lorem Ipsum available.
                    <br>
                    <small class="text-muted">Today 4:21 pm</small>
                  </div>
                </a>
              </div>
              <div class="sidebar-message">
                <a href="#">
                  <div class="pull-left text-center">
                    <img alt="image" class="img-circle message-avatar" src="img/a2.jpg">
                  </div>
                  <div class="media-body">
                    The point of using Lorem Ipsum is that it has a more-or-less normal.
                    <br>
                    <small class="text-muted">Yesterday 2:45 pm</small>
                  </div>
                </a>
              </div>
              <div class="sidebar-message">
                <a href="#">
                  <div class="pull-left text-center">
                    <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">

                    <div class="m-t-xs">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                    </div>
                  </div>
                  <div class="media-body">
                    Mevolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    <br>
                    <small class="text-muted">Yesterday 1:10 pm</small>
                  </div>
                </a>
              </div>
              <div class="sidebar-message">
                <a href="#">
                  <div class="pull-left text-center">
                    <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">
                  </div>

                  <div class="media-body">
                    Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                    <br>
                    <small class="text-muted">Monday 8:37 pm</small>
                  </div>
                </a>
              </div>
              <div class="sidebar-message">
                <a href="#">
                  <div class="pull-left text-center">
                    <img alt="image" class="img-circle message-avatar" src="img/a8.jpg">
                  </div>
                  <div class="media-body">

                    All the Lorem Ipsum generators on the Internet tend to repeat.
                    <br>
                    <small class="text-muted">Today 4:21 pm</small>
                  </div>
                </a>
              </div>
              <div class="sidebar-message">
                <a href="#">
                  <div class="pull-left text-center">
                    <img alt="image" class="img-circle message-avatar" src="img/a7.jpg">
                  </div>
                  <div class="media-body">
                    Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    <br>
                    <small class="text-muted">Yesterday 2:45 pm</small>
                  </div>
                </a>
              </div>
              <div class="sidebar-message">
                <a href="#">
                  <div class="pull-left text-center">
                    <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">

                    <div class="m-t-xs">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                    </div>
                  </div>
                  <div class="media-body">
                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below.
                    <br>
                    <small class="text-muted">Yesterday 1:10 pm</small>
                  </div>
                </a>
              </div>
              <div class="sidebar-message">
                <a href="#">
                  <div class="pull-left text-center">
                    <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">
                  </div>
                  <div class="media-body">
                    Uncover many web sites still in their infancy. Various versions have.
                    <br>
                    <small class="text-muted">Monday 8:37 pm</small>
                  </div>
                </a>
              </div>
            </div>

          </div>

          <div id="tab-2" class="tab-pane">

            <div class="sidebar-title">
              <h3> <i class="fa fa-cube"></i> Latest projects</h3>
              <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
            </div>

            <ul class="sidebar-list">
              <li>
                <a href="#">
                  <div class="small pull-right m-t-xs">9 hours ago</div>
                  <h4>Business valuation</h4>
                  It is a long established fact that a reader will be distracted.

                  <div class="small">Completion with: 22%</div>
                  <div class="progress progress-mini">
                    <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                  </div>
                  <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="small pull-right m-t-xs">9 hours ago</div>
                  <h4>Contract with Company </h4>
                  Many desktop publishing packages and web page editors.

                  <div class="small">Completion with: 48%</div>
                  <div class="progress progress-mini">
                    <div style="width: 48%;" class="progress-bar"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="small pull-right m-t-xs">9 hours ago</div>
                  <h4>Meeting</h4>
                  By the readable content of a page when looking at its layout.

                  <div class="small">Completion with: 14%</div>
                  <div class="progress progress-mini">
                    <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-primary pull-right">NEW</span>
                  <h4>The generated</h4>
                  <!--<div class="small pull-right m-t-xs">9 hours ago</div>-->
                  There are many variations of passages of Lorem Ipsum available.
                  <div class="small">Completion with: 22%</div>
                  <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="small pull-right m-t-xs">9 hours ago</div>
                  <h4>Business valuation</h4>
                  It is a long established fact that a reader will be distracted.

                  <div class="small">Completion with: 22%</div>
                  <div class="progress progress-mini">
                    <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                  </div>
                  <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="small pull-right m-t-xs">9 hours ago</div>
                  <h4>Contract with Company </h4>
                  Many desktop publishing packages and web page editors.

                  <div class="small">Completion with: 48%</div>
                  <div class="progress progress-mini">
                    <div style="width: 48%;" class="progress-bar"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="small pull-right m-t-xs">9 hours ago</div>
                  <h4>Meeting</h4>
                  By the readable content of a page when looking at its layout.

                  <div class="small">Completion with: 14%</div>
                  <div class="progress progress-mini">
                    <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-primary pull-right">NEW</span>
                  <h4>The generated</h4>
                  <!--<div class="small pull-right m-t-xs">9 hours ago</div>-->
                  There are many variations of passages of Lorem Ipsum available.
                  <div class="small">Completion with: 22%</div>
                  <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                </a>
              </li>

            </ul>

          </div>

          <div id="tab-3" class="tab-pane">

            <div class="sidebar-title">
              <h3><i class="fa fa-gears"></i> Settings</h3>
              <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
            </div>

            <div class="setings-item">
              <span>
                Show notifications
              </span>
              <div class="switch">
                <div class="onoffswitch">
                  <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                  <label class="onoffswitch-label" for="example">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="setings-item">
              <span>
                Disable Chat
              </span>
              <div class="switch">
                <div class="onoffswitch">
                  <input type="checkbox" name="collapsemenu" checked class="onoffswitch-checkbox" id="example2">
                  <label class="onoffswitch-label" for="example2">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="setings-item">
              <span>
                Enable history
              </span>
              <div class="switch">
                <div class="onoffswitch">
                  <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                  <label class="onoffswitch-label" for="example3">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="setings-item">
              <span>
                Show charts
              </span>
              <div class="switch">
                <div class="onoffswitch">
                  <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                  <label class="onoffswitch-label" for="example4">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="setings-item">
              <span>
                Offline users
              </span>
              <div class="switch">
                <div class="onoffswitch">
                  <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example5">
                  <label class="onoffswitch-label" for="example5">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="setings-item">
              <span>
                Global search
              </span>
              <div class="switch">
                <div class="onoffswitch">
                  <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example6">
                  <label class="onoffswitch-label" for="example6">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="setings-item">
              <span>
                Update everyday
              </span>
              <div class="switch">
                <div class="onoffswitch">
                  <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                  <label class="onoffswitch-label" for="example7">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                  </label>
                </div>
              </div>
            </div>

            <div class="sidebar-content">
              <h4>Settings</h4>
              <div class="small">
                I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                And typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mainly scripts -->
  <script src="{{ asset('Admin/js/jquery-2.1.1.js') }}"></script>
  <script src="{{ asset('Admin/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('Admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
  <script src="{{ asset('Admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

  <!-- Flot -->
  <script src="{{ asset('Admin/js/plugins/flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('Admin/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
  <script src="{{ asset('Admin/js/plugins/flot/jquery.flot.spline.js') }}"></script>
  <script src="{{ asset('Admin/js/plugins/flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('Admin/js/plugins/flot/jquery.flot.pie.js') }}"></script>
  <script src="{{ asset('Admin/js/plugins/flot/jquery.flot.symbol.js') }}"></script>
  <script src="{{ asset('Admin/js/plugins/flot/jquery.flot.time.js') }}"></script>

  <!-- Peity -->
  <script src="{{ asset('Admin/js/plugins/peity/jquery.peity.min.js') }}"></script>
  <script src="{{ asset('Admin/js/demo/peity-demo.js') }}"></script>

  <!-- Custom and plugin javascript -->
  <script src="{{ asset('Admin/js/inspinia.js') }}"></script>
  <script src="{{ asset('Admin/js/plugins/pace/pace.min.js') }}"></script>

  <!-- jQuery UI -->
  <script src="{{ asset('Admin/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

  <!-- Jvectormap -->
  <script src="{{ asset('Admin/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
  <script src="{{ asset('Admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

  <!-- EayPIE -->
  <script src="{{ asset('Admin/js/plugins/easypiechart/jquery.easypiechart.js') }}"></script>

  <!-- Sparkline -->
  <script src="{{ asset('Admin/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

  <!-- Sparkline demo data  -->
  <script src="{{ asset('Admin/js/demo/sparkline-demo.js') }}"></script>

  <!-- DataTables -->
  <script src="{{ asset('Admin/js/plugins/dataTables/datatables.min.js') }}"></script>

  <!-- C3 Charts -->
  <script src="{{ asset('Admin/js/plugins/d3/d3.min.js') }}"></script>
  <script src="{{ asset('Admin/js/plugins/c3/c3.min.js') }}"></script>

  <script type="text/javascript">
  $(document).ready(function(){
    c3.generate({
        bindto: '#pie',
        data:{
            columns: [
                ['Ativos', {!! app\User::where('ativo',1)->count() !!}],
                ['Inativos', {!! app\User::where('ativo',0)->count() !!}]
            ],
            colors:{
                Ativos: '#1ab394',
                Inativos: '#BABABA'
            },
            type : 'pie'
        }
    });
    $('#tableLivrosPendentes').DataTable({
      "language": {
        "lengthMenu": "_MENU_ Registros por página",
        "zeroRecords": "Nenhum registro encontrado.",
        "info": "Mostrando página _PAGE_ de _PAGES_",
        "infoEmpty": "Nenhum registro encontrado",
        "infoFiltered": "(filtrado de _MAX_ registros)"
      }
    });

    $('#tableLogs').DataTable({
      "order": [[ 4, "desc" ]],
      "language": {
        "lengthMenu": "_MENU_ Registros por página",
        "zeroRecords": "Nenhum registro encontrado.",
        "info": "Mostrando página _PAGE_ de _PAGES_",
        "infoEmpty": "Nenhum registro encontrado",
        "infoFiltered": "(filtrado de _MAX_ registros)"
      }
    });
  });
  </script>
  <script type="text/javascript">
  $(document).ready(function() {
    var sparklineCharts = function(){
      $("#sparkline6").sparkline([{!! app\Models\Livro::where('status',1)->count() !!},{!! app\Models\Livro::where('status',0)->count() !!}], {
        type: 'pie',
        height: '140',
        sliceColors: ['#1ab394', '#F5F5F5']
      });
    };

    var sparkResize;

    $(window).resize(function(e) {
      clearTimeout(sparkResize);
      sparkResize = setTimeout(sparklineCharts, 500);
    });

    sparklineCharts();
  });

  //Flot Pie Chart
$(function() {
    var data = [{
        label: "Pendentes",
        data: {!! app\Models\Livro::where('status',0)->count() !!},
        color: "#79d2c0",
    }, {
        label: "Disponíveis",
        data: {!! app\Models\Livro::where('status',1)->count() !!},
        color: "#1ab394",
    },
    ];
    var plotObj = $.plot($("#chartLivros"), data, {
        series: {
            pie: {
                show: true
            }
        },
        grid: {
            hoverable: true
        },
        tooltip: true,
        tooltipOpts: {
            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
            shifts: {
                x: 20,
                y: 0
            },
            defaultTheme: false
        }
    });

});
  </script>
</body>
</html>

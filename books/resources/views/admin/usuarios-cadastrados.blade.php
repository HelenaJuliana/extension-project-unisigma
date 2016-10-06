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
      <div class="col-sm-8">
        <div class="ibox">
          <div class="ibox-content">
            <span class="text-muted small pull-right">Last modification: <i class="fa fa-clock-o"></i> 2:10 pm - 12.06.2014</span>
            <h2>Clients</h2>
            <p>
              All clients need to be verified before you can send email and set a project.
            </p>
            <div class="input-group">
              <input type="text" placeholder="Search client " class="input form-control">
              <span class="input-group-btn">
                <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> Search</button>
              </span>
            </div>
            <div class="clients-list">
              <ul class="nav nav-tabs">
                <span class="pull-right small text-muted">{{$users->count()}} Usuários</span>
                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i> Contacts</a></li>
                <li class=""><a data-toggle="tab" href="#tab-2"><i class="fa fa-briefcase"></i> Companies</a></li>
              </ul>
              <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                  <div class="full-height-scroll">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <tbody>
                          @foreach($users as $u)
                          <tr>
                            <td class="client-avatar"><img alt="image" src="{{ asset('admin/img/a2.jpg') }}"> </td>
                            <td><a data-toggle="tab" href="#contact-{{$u->id}}" class="client-link">{{$u->nome}}</a></td>
                            <td> Tellus Institute</td>
                            <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                            <td> {{ $u->email }}</td>
                            <td class="client-status"><span class="label label-@if($u->ativo == 1)primary @elseif($u->ativo==0)danger @endif">@if($u->ativo == 1) Ativo @elseif($u->ativo == 0) Inativo @endif</span></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- <div id="tab-2" class="tab-pane">
                  <div class="full-height-scroll">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <tbody>
                          <tr>
                            <td><a data-toggle="tab" href="#company-1" class="client-link">Tellus Institute</a></td>
                            <td>Rexton</td>
                            <td><i class="fa fa-flag"></i> Angola</td>
                            <td class="client-status"><span class="label label-primary">Active</span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="ibox ">

          <div class="ibox-content">
            <div class="tab-content">
              @foreach($users as $u)
              <div id="contact-{{$u->id}}" class="tab-pane">
                <div class="row m-b-lg">
                  <div class="col-lg-4 text-center">
                    <h2>{{ $u->nome }}</h2>
                    <div class="m-b-sm">
                      <img alt="image" class="img-circle" src="{{ asset('admin/img/a2.jpg') }}"
                      style="width: 62px">
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <strong>
                      About me
                    </strong>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <button type="button" class="btn btn-primary btn-sm btn-block"><i
                      class="fa fa-envelope"></i> Send Message
                    </button>
                  </div>
                </div>
                <div class="client-detail">
                  <div class="full-height-scroll">

                    <strong>Ultimas Atividades</strong>

                    <ul class="list-group clear-list">
                      <li class="list-group-item fist-item">
                        <span class="pull-right">{{ DB::table('user_logs')->where('user_id',$u->id)->where('action',2)->value('created_at') }}</span>
                        Último Login
                      </li>
                      <li class="list-group-item">
                        <span class="pull-right">{{ DB::table('user_logs')->where('user_id',$u->id)->where('action',1)->value('created_at') }}</span>
                        Usuário criado desde
                      </li>
                      <li class="list-group-item">
                        <span class="pull-right"> 08:22 pm </span>
                        Open new shop
                      </li>
                      <li class="list-group-item">
                        <span class="pull-right"> 11:06 pm </span>
                        Call back to Sylvia
                      </li>
                      <li class="list-group-item">
                        <span class="pull-right"> 12:00 am </span>
                        Write a letter to Sandra
                      </li>
                    </ul>
                    <strong>Notes</strong>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <hr/>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="wrapper wrapper-content">
        <!-- Start Table Logs -->
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5>Listagem de Usuarios</h5>
              </div>
              <div class="ibox-content">
                <!-- Start table -->
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="tableUsers"
                  data-provide="datatable"
                  data-display-rows="25"
                  data-info="false"
                  data-search="false"
                  data-length-change="false"
                  data-paginate="true">
                  <thead>
                    <td data-filterable="true">Id</td>
                    <td data-filterable="true">Ativo</td>
                    <td data-filterable="true">Nome</td>
                    <td data-filterable="true">Email</td>
                    <td data-filterable="true">Tipo</td>
                    <td data-filterable="true">Saldo</td>
                    <td data-filterable="true">Criado em</td>
                    <td data-filterable="true">Ultima Atualização</td>
                    <td data-sortable="false">Ações</td>
                  </thead>
                  <tbody>
                    @foreach($users as $u)
                    <tr>
                      <td>{{ $u->id }}</td>
                      <td>@if($u->ativo == 1) Sim @else Não @endif</td>
                      <td>{{ $u->nome }}</td>
                      <td>{{ $u->email }}</td>
                      <td>@if($u->tipo==1) Administrativo @else Normal @endif</td>
                      <td>{{ $u->saldo_pontos }}</td>
                      <td>{{ $u->created_at }}</td>
                      <td>{{ $u->updated_at }}</td>
                      <td>
                        <a href="#" class="btn-info btn btn-xs"><i class="fa fa-eye"></i></a>
                        <a href="#" class="btn-danger btn btn-xs"><i class="fa fa-trash"></i></a>
                        <a href="#" class="btn-warning btn btn-xs"><i class="fa fa-pencil"></i></a>
                      </td>
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
  $('#tableUsers').DataTable({
    "order": [[ 6, "desc" ]],
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

</body>
</html>

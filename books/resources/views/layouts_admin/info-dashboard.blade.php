<div class="row">
  <div class="col-lg-3">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <!-- <span class="label label-success pull-right">Monthly</span> -->
        <h5>Reservas de Livros</h5>
      </div>
      <div class="ibox-content">
        <!-- <h1 class="no-margins">{{ App\Models\Livro::where('status',0)->get()->count() }}</h1> -->
        <!-- <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div> -->
        <!-- <h2>{!! app\Models\Livro::where('status',1)->count() !!}/{!! app\Models\Livro::where('status',0)->count() !!}</h2> -->
        <div class="text-center">
          <div id="sparkline6"></div>
        </div>
        <!-- <small>Total Pendentes</small> -->
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <!-- <span class="label label-info pull-right">Annual</span> -->
        <h5>Aprovados / Pendentes</h5>
      </div>
      <div class="ibox-content">
        <!-- <h1 class="no-margins">{{ App\Models\Livro::where('status',1)->get()->count() }}</h1> -->
        <!-- <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div> -->
        <div class="flot-chart">
            <div class="flot-chart-pie-content" id="chartLivros"></div>
        </div>
        <small>Disponíveis: {!! app\Models\Livro::where('status',1)->count() !!}</small> |
        <small>Pendentes: {!! app\Models\Livro::where('status',0)->count() !!}</small>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <!-- <span class="label label-primary pull-right">Today</span> -->
        <h5>Vistits</h5>
      </div>
      <div class="ibox-content">
        <h1 class="no-margins">106,120</h1>
        <!-- <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div> -->
        <small>New visits</small>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <!-- <span class="label label-danger pull-right">Low value</span> -->
        <h5>Usuários Ativos</h5>
      </div>
      <div class="ibox-content">
        <!-- <h1 class="no-margins">{{ App\User::all()->count() }}</h1> -->
        <!-- <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div> -->
        <div>
            <div id="pie" style="height: 200px;"></div>
        </div>
        <small>Ativos: {!! app\User::where('ativo',1)->count() !!}</small> |
        <small>Inativos: {!! app\User::where('ativo',0)->count() !!}</small>
      </div>
    </div>
  </div>
</div>

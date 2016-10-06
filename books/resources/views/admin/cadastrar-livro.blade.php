<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Cadastro de Livros</title>

  <link href="{{ asset('Admin/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

  <link href="{{ asset('Admin/css/animate.css') }}" rel="stylesheet">
  <link href="{{ asset('Admin/css/style.css') }}" rel="stylesheet">

  <!-- Select2 -->
  <link href="{{ asset('Admin/css/plugins/select2/select2.min.css') }}" rel="stylesheet">
  <!-- DATAPICKER -->
  <link href="{{ asset('Admin/css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">
  <!-- DataTables -->
  <link href="{{ asset('Admin/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
  <!-- Sweet Alert -->
  <link href="{{ asset('Admin/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
  <!-- Toastr style -->
  <link href="{{ asset('Admin/css/plugins/myToastNotifications/jquery.toast.css') }}" rel="stylesheet">



</head>

<body class="">

  <div id="wrapper">

    @include("layouts_admin.menu")

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

      <div class="wrapper wrapper-content">
        <div class="animated fadeInRightBig">

          <div class="ibox float-e-margins">
            <div class="ibox-title">
              <h5>CADASTRO DE LIVROS</h5>
            </div>

            <!-- Box Cadastro -->
            <div class="ibox-content" style="display: block;">
              <div class="row">
                <div class="col-sm-12">
                  @if(session('status') || session('erro'))
                  <div class="alert alert-{{ session('class') }} alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    @if(session('status'))
                    {{ session('status') }}
                    @else
                    {{ session('erro') }}
                    @endif
                  </div>
                  @endif
                  <form role="form" id="formLivro" action="/admin/livros/cadastrar-livro" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-lg-6">

                          <div class="form-group">
                            <label>TÍTULO <span style="color:red">*</span></label>
                            <input type="text" name="titulo" placeholder="TÍTULO" class="form-control capitalize">
                          </div>

                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                            <label>Tipo do Livro <span style="color:red">*</span></label>
                            <select class="form-control" name="tipoLivro">
                              <option value="">Selecione uma Opção</option>
                              <option value="1">Literário</option>
                              <option value="2">Tecnicos</option>
                            </select>
                          </div>
                      </div>


                      <div id="categorias">
                        <div class="form-group col-lg-6">
                          <label>CATEGORIA <span style="color:red">*</span></label>
                          <select class=" form-control" name="categoria[]">
                            <option value="" >Selecione uma Categoria</option>
                            @foreach($categorias as $c)
                            <option value="{{ $c->id }}">{{ $c->descricao }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="form-group col-lg-6">
                        <label for="">Opções</label><br>
                        <button type="button" class="btn btn-sm btn-primary addCategoria" name="button">ADICIONAR OUTRA CATEGORIA <i class="fa fa-plus"></i></button>
                        <!-- <button type="button" name="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalCategoria">CADASTRAR CATEGORIA</button> -->
                      </div>

                      <!-- Linha -->
                      <div id="autores">
                        <div class="form-group col-lg-6" >
                          <label class="col-lg-12">AUTOR <span style="color:red">*</span></label>
                          <select class="form-control" name="autor[]">
                            <option value="" >Selecione um Autor</option>
                            @foreach($autores as $a)
                            <option value="{{ $a->id }}">{{ $a->autor }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="form-group col-lg-6">
                        <label for="">Opções</label><br>
                        <button type="button" class="btn btn-sm btn-primary addSelectAutor" name="button">ADICIONAR OUTRO AUTOR <i class="fa fa-plus"></i></button>
                        <button type="button" name="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalAutor">CADASTRAR AUTOR</button>
                      </div>

                      <!-- Linha -->
                      <div class="form-group col-lg-6">
                        <label>I.S.B.N</label>
                        <input type="text" name="isbn" data-mask="999 99 999 9999 9" placeholder="ISBN" class="form-control">
                      </div>
                      <div class="form-group col-lg-6">
                        <label>EDITORA</label>
                        <input type="text" name="editora" placeholder="EDITORA" class="form-control capitalize">
                      </div>
                      <!-- Linha -->
                      <div class="form-group col-lg-2">
                        <label>NÚMERO DE PÁGINAS</label>
                        <input type="text" name="qtd_paginas" placeholder="PÁGINAS" class="form-control">
                      </div>

                      <div class="form-group col-lg-4" id="data_1">
                        <label class="font-normal">DATA LANÇAMENTO</label>
                        <div class="input-group date">
                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="data" class="form-control" placeholder="DATA DO LANÇAMENTO">
                        </div>
                      </div>

                      <div class="form-group col-lg-6">
                        <label>IDIOMA</label>
                        <select class="form-control" name="idioma">
                          <option value="">SELECIONE UM IDIOMA</option>
                          <option value="Português">Português</option>
                          <option value="Inglês">Inglês</option>
                          <option value="Espanhol">Espanhol</option>
                        </select>
                      </div>
                      <!-- Linha -->
                      <div class="btn-group col-lg-12">
                        <label title="Upload image file" for="inputImage" class="btn btn-primary">
                          <input type="file" accept="image/*" multiple name="arquivo" id="inputImage" class="hide">
                          Upload Image
                        </label>
                      </div>

                      <div class="form-group col-lg-12">
                        <label class="font-normal">DESCRIÇÃO</label>
                        <textarea name="descricao" rows="8" cols="40" class="form-control"></textarea>
                      </div>

                      <div class="form-group col-lg-12">
                        <button class="btn btn-sm btn-primary pull-left m-t-n-xs message1" type="submit">
                          <i class="fa fa-check"></i>
                          <strong>ADICIONAR</strong>
                        </button>
                      </div>
                    </div><!-- Finish Row -->
                  </form>
                </div>
              </div>
            </div>
            <!-- End Box Cadastro -->


          </div><!-- Animação -->
        </div><!-- Wrapper Content -->
      </div><!-- End page center -->

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

  <div class="modal inmodal" id="modalCategoria" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content animated bounceInRight">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <i class="fa fa-laptop modal-icon"></i>
          <h4 class="modal-title">Modal title</h4>
          <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
        </div>
        <div class="modal-body">
          <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.</p>
            <div class="form-group"><label>Sample Input</label> <input type="email" placeholder="Enter your email" class="form-control"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal inmodal" id="modalAutor" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">
          <form action="cadastrar-autor" method="post" id="formAutor">
            {{ csrf_field() }}
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title">Cadastro de Autor</h4>
            </div>
            <div class="modal-body">
              <div class="form-group"><label>NOME DO AUTOR</label>
                <input type="text" name="novoautor" placeholder="NOME DO AUTOR" class="form-control">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('Admin/js/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset('Admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('Admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Toastr script -->
    <script src="{{ asset('Admin/js/plugins/myToastNotifications/jquery.toast.js') }}"></script>

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
    //Adicionando o autor
    $(document).ready(function(){
      $("#formAutor").validate({
        rules: {
          novoautor: {
            required: true,
            minlength: 5,
          },
        },
        messages: {
          novoautor:{
            required: "Este campo é necessário",
            minlength: "Informe um nome com no mínimo 5 caracteres",
          },
        },
        submitHandler: function(form){
          var dados = jQuery(form).serialize();
          //alert(dados);
          $.ajax({
            type: "POST",
            url: "cadastrar-autor",
            data: dados,
            success: function(){
              $.toast({
                    heading: 'Sucesso',
                    text: 'Autor cadastrado',
                    textAlign: 'center',
                    loader: false,
                    icon: 'success',
                    bgColor: '#1ab394'
              });
              $('#modalAutor').modal('hide');
              $("#autores").load(' #autores');
            },
            error: function(){
              alert("Deu errado");
            }
          });///ajax
        }///submitHandler
      });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function(){
      $("#formLivro").validate({
        rules: {
          titulo:{
            required: true,
          },
          categoria: {
            required: true,
          },
          autor: {
            required: true,
          },
          qtd_paginas:{
            required: true,
            number: true,
          },
        },
        messages: {
          titulo: {
            required: "Este campo é necessário",
          },
          categoria: {
            required: "Este campo é necessário",
            minlength: "Minímo de 3 caracteres",
          },
          autor: {
            required: "Este campo é necessário",
          },
          qtd_paginas:{
            required: "Este campo é necessário",
            number: "Informe um valor válido",
          },
        }
      });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function(){
      //Select
      $(".select_categoria").select2();
      $(".select_autor").select2();

      //DataPicker
      $('#data_1 .input-group.date').datepicker({
        format: 'dd/mm/yyyy',
        todayBtn: false,
        keyboardNavigation: true,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true
      });
    });
    $(document).ready(function() {
      var templateAutor = '<div class="form-group col-lg-6" >'+
      '<label class="col-lg-12">AUTOR <span style="color:red">*</span></label>'+
      '<div class="row">'+
      '<div class="col-lg-11">'+
      '<select class="form-control" name="autor[]">'+
      '<option value="" >Selecione um Autor</option>'+
      '@foreach($autores as $a)'+
      '<option value="{{ $a->id }}">{{ $a->autor }}</option>'+
      '@endforeach'+
      '</select>'+
      '</div>'+
      '<div class="col-lg-1 row">'+
      '<button type="button" name="button" class="btn btn-danger removerAutor"><i class="fa fa-trash"></i></button>'+
      '</div>'+
      '</div>'+
      '</div>';
      var templateCategoria = '<div class="form-group col-lg-6">'+
        '<label>CATEGORIA <span style="color:red">*</span></label>'+
        '<div class="row">'+
        '<div class="col-lg-11">'+
        '<select class=" form-control" name="categoria[]">'+
          '<option value="" >Selecione uma Categoria</option>'+
          '@foreach($categorias as $c)'+
          '<option value="{{ $c->id }}">{{ $c->descricao }}</option>'+
          '@endforeach'+
        '</select>'+
        '</div>'+
        '<div class="col-lg-1 row">'+
        '<button type="button" name="button" class="btn btn-danger removeCategoria"><i class="fa fa-trash"></i></button>'+
        '</div>'+
        '</div>'+
      '</div>';
      var campos_max_autor = 10;   //max de 10 campos
      var campos_max_categoria = 10;
      var qtd_autor =  1; // campos iniciais
      var qtd_categoria = 1;
      $('.addSelectAutor').click(function(e) {
        e.preventprimary();     //prevenir novos clicks
        //alert(x);
        if (qtd_autor < campos_max_autor) {
          $('#autores').append(templateAutor);
          qtd_autor++;
        }
      });
      // Remover o div anterior
      $('#autores').on("click",".removerAutor",function(e) {
        e.preventprimary();
        $(this).parent('div').parent('div').parent('div').remove();
        qtd_autor--;
      });
      //Add Categoria campos
      $('.addCategoria').click(function(e){
        e.preventprimary();     //prevenir novos clicks
        //alert(x);
        if (qtd_categoria < campos_max_categoria) {
          $('#categorias').append(templateCategoria);
          qtd_categoria++;
        }
      });

      $('#categorias').on("click",".removeCategoria",function(e){
        e.preventprimary();
        $(this).parent('div').parent('div').parent('div').remove();
        qtd_categoria--;
      });

    });
    </script>


    <!-- Select2 -->
    <script src="{{ asset('Admin/js/plugins/select2/select2.full.min.js') }}"></script>
    <!-- Data picker -->
    <script src="{{ asset('Admin/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>
    <!-- Input Mask-->
    <script src="{{ asset('Admin/js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
  </body>

  </html>

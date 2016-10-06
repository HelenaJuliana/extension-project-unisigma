<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Ubooks</title>
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
      <!--BOOK GUIDE SECTION START-->
      <section>
        <div class="container">
          <!--SECTION CONTENT START-->
          <div class="section-content margin-bottom-zero">
            <h2>BEM-VINDO AO UBOOKS</h2>
          </div>
          <!--SECTION CONTENT END-->
          <div class="book-guide">
            <div class="row">
              <div class="col-md-5">
                <img src="{{ asset('site/images/about-img2.png') }}" alt="">
              </div>
              <div class="col-md-7">
                <p class="cap">Os livros não mudam o mundo. Quem muda o mundo são as pessoas. Os livros só mudam as pessoas. Mário Quitana</p>
                <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="row">
                  <div class="col-md-6">
                    <ul class="kd-list2">
                      <li><p>Consectetur adipiscing elit</p></li>
                      <li><p>Sed do eiusmod tempor incididunt ut labore</p></li>
                      <li><p>Labore et dolore magna aliqua</p></li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="kd-list2">
                      <li><p>Consectetur adipiscing elit</p></li>
                      <li><p>Sed do eiusmod tempor incididunt ut labore</p></li>
                      <li><p>Labore et dolore magna aliqua</p></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--BOOK GUIDE SECTION END-->
      <section class="kode-service-section">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="kode-service-2">
                <i class="fa fa-gift"></i>
                <h3><a href="#"> Free Gift Wrap</a></h3>
                <p>Free gift wrapping on all purchases. Wrapping includes a blue box with your choice with Ribbon.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="kode-service-2">
                <i class="fa fa-book"></i>
                <h3><a href="#">Buy Selling Used Books</a></h3>
                <p>We provide you the best selling of the used books. You can sell them to us if you have read them once.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="kode-service-2">
                <i class="fa fa-truck"></i>
                <h3><a href="#">Free Shipping</a></h3>
                <p>We provide free shipping over the $1000 purchase from one country to another with extra discount.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="kode-service-2">
                <i class="fa fa-calculator"></i>
                <h3><a href="#">Returns &amp; Exchange</a></h3>
                <p>Return and Exchange is possible in 5 days. In case of lost or damage Return & Exchange is not possible.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="kode-content padding-tb-50">
        <div class="container">
          <div class="row">
            <!--LIST ITEM START-->
            @foreach($livros as $l)
            <div class="col-lg-4">
              <div class="kode-single-blog">
                <figure>
                  <a href="{{ url('/view-book/'.$l->id) }}"><img src="{{ asset('site/images/blog-single2.png') }}" height="180" width="200" alt=""></a>
                </figure>
                <div class="kode-text">
                  <div class="kode-date">
                    {{ $l->created_at->format('d') }}
                    <span>{{ substr(DateTime::createFromFormat('!m', $l->created_at->format('m'))->format('F'), 0, 3) }}</span>
                  </div>
                  <h3>{{ $l->titulo }}</h3>
                  <p>Doado por: {{ App\User::where('id',$l->user_donate_id)->value('nome') }}</p>
                </div>
              </div>
            </div>
            @endforeach


            <!--LIST ITEM END-->
          </div>
        </div>
      </div>
      <!--CONTENT END-->


      <!--TABS SECTION START-->
      <div class="tab-head-section-top">
        <div class="container">
          <div class="kd-tab-2">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Sed ut Perspiciatis Unde omnis</a></li>
              <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Perspiciatis Unde omnis</a></li>
              <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Sed Perspiciatis Unde omnis</a></li>
              <li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Ledut Perspiciatis Unde omnis</a></li>
              <li role="presentation"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Sed ut Perspiciatis Unde omnis</a></li>
              <li role="presentation"><a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab">Perspiciatis Unde omnis</a></li>
              <li role="presentation"><a href="#tab7" aria-controls="tab7" role="tab" data-toggle="tab">Sed Perspiciatis Unde omnis</a></li>
              <li role="presentation"><a href="#tab8" aria-controls="tab8" role="tab" data-toggle="tab">Ledut Perspiciatis Unde omnis</a></li>
              <li role="presentation"><a href="#tab9" aria-controls="tab9" role="tab" data-toggle="tab">Perspiciatis Unde omnis</a></li>
              <li role="presentation"><a href="#tab10" aria-controls="tab10" role="tab" data-toggle="tab">Sed Perspiciatis Unde omnis</a></li>
              <li role="presentation"><a href="#tab11" aria-controls="tab11" role="tab" data-toggle="tab">Ledut Perspiciatis Unde omnis</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                <div class="kode-thumb">
                  <ul class="bxslider">
                    <li><img src="{{ asset('site/images/tabs-img4.png') }}" alt=""></li>
                    <li><img src="{{ asset('site/images/tabs-img3.png') }}" alt=""></li>
                    <li><img src="{{ asset('site/images/tabs-img5.png') }}" alt=""></li>
                  </ul>
                </div>
                <div class="kode-text">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy </p>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab2">
                <div class="kode-thumb">
                  <img src="{{ asset('site/images/tabs-img3.png') }}" alt="">
                </div>
                <div class="kode-text">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonum.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab3">
                <div class="kode-thumb">
                  <img src="{{ asset('site/images/tabs-img3.png') }}" alt="">
                </div>
                <div class="kode-text">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et acclor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab4">
                <div class="kode-thumb">
                  <img src="{{ asset('site/images/tabs-img3.png') }}" alt="">
                </div>
                <div class="kode-text">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voto duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab5">
                <div class="kode-thumb">
                  <img src="{{ asset('site/images/tabs-img3.png') }}" alt="">
                </div>
                <div class="kode-text">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et  et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab6">
                <div class="kode-thumb">
                  <img src="{{ asset('site/images/tabs-img3.png') }}" alt="">
                </div>
                <div class="kode-text">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam numy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab7">
                <div class="kode-thumb">
                  <img src="{{ asset('site/images/tabs-img3.png') }}" alt="">
                </div>
                <div class="kode-text">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab8">
                <div class="kode-thumb">
                  <img src="{{ asset('site/images/tabs-img3.png') }}" alt="">
                </div>
                <div class="kode-text">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.t Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab9">
                <div class="kode-thumb">
                  <img src="{{ asset('site/images/tabs-img3.png') }}" alt="">
                </div>
                <div class="kode-text">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctrmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab10">
                <div class="kode-thumb">
                  <img src="{{ asset('site/images/tabs-img3.png') }}" alt="">
                </div>
                <div class="kode-text">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam volupest Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab11">
                <div class="kode-thumb">
                  <img src="{{ asset('site/images/tabs-img3.png') }}" alt="">
                </div>
                <div class="kode-text">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--TABS SECTION END-->
      <!--VIDEO SECTION START-->
      <section class="kode-video-section-2">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="kode-video">
                <a href="#">
                  <img src="{{ asset('site/images/video-bg2.png') }}" alt="">
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="kode-text">
                <h2> Authors, Publications Brief detail Video</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor.</p>
                <a href="#" class="more">See More</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--VIDEO SECTION END-->
      <!--COUNT UP SECTION START-->
      <div class="count-up-section-2">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="count-up">
                <span class="counter circle">{{ DB::table('livros')->where('status','=',1)->count() }}</span>
                <p>Livros Disponíveis</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="count-up">
                <span class="counter circle">{{ DB::table('users')->count() }}</span>
                <p>Total de Usuários</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="count-up">
                <span class="counter circle">{{ DB::table('autors')->count() }}</span>
                <p>Autores</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="count-up">
                <span class="counter circle">5700</span>
                <p>Awards</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--COUNT UP SECTION END-->
      <!--ABOUT INFO SECTION START-->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="kode-profile-tabs">
                <div class="kd-horizontal-tab">
                  <div class="kode-thumb">
                    <img src="{{ asset('site/images/tabs-imgs.png') }}" alt="">
                  </div>
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Info" aria-controls="Info" role="tab" data-toggle="tab">Info</a></li>
                    <li role="presentation"><a href="#Why" aria-controls="Why" role="tab" data-toggle="tab">Why Us</a></li>
                    <li role="presentation"><a href="#Involve" aria-controls="Involve" role="tab" data-toggle="tab">Involve</a></li>
                    <li role="presentation"><a href="#Support" aria-controls="Support" role="tab" data-toggle="tab">Support</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="Info">
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Why">
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Involve">
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omnis iste natus error.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Support">
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="kd-accordion">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Our Mission and Vision
                          <i class="fa fa-minus"></i>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          24 Hours full video support
                          <i class="fa fa-minus"></i>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Userfriendly Design
                          <i class="fa fa-minus"></i>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--ABOUT INFO SECTION END-->
      <!--TOP AUTHERS START-->
      <section class="kode-top-author gray-bg">
        <div class="container">
          <!--SECTION HEADING START-->
          <div class="section-content">
            <h2>The Top Writers of 2015</h2>
            <p>The Top Authors Books are available and are presented in the Book Guide and in Books Library where every user can purchase the books easily. The top writers and authors books are also published here. Dont miss the change of getting those precious books from here.</p>
          </div>
          <!--SECTION HEADING END-->
          <div class="row">
            <!--AUTHOR LIST START-->
            <div class="col-md-4 col-sm-6">
              <div class="kode-author kode-author-2">
                <a href="#"><img alt="" src="{{ asset('site/images/author2.png') }}"></a>
                <div class="kode-caption">
                  <h4>christina noto</h4>
                  <p>Co-Founder</p>
                  <div class="social-icon">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!--AUTHOR LIST END-->
            <!--AUTHOR LIST START-->
            <div class="col-md-4 col-sm-6">
              <div class="kode-author kode-author-2">
                <a href="#"><img alt="" src="{{ asset('site/images/author.png') }}"></a>
                <div class="kode-caption">
                  <h4>Allen Jack</h4>
                  <p>Co-Founder</p>
                  <div class="social-icon">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!--AUTHOR LIST END-->
            <!--AUTHOR LIST START-->
            <div class="col-md-4">
              <div class="kode-author kode-author-2">
                <a href="#"><img alt="" src="{{ asset('site/images/author3.png') }}"></a>
                <div class="kode-caption">
                  <h4>Sarah Marlin</h4>
                  <p>Co-Founder</p>
                  <div class="social-icon">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!--AUTHOR LIST END-->
          </div>
        </div>
      </section>
      <!--TOP AUTHERS END-->
    </div>
    <!--CONTENT END-->
    @include('layouts_site.footer')

  </div>
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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Book Store - Book Guide Author, Publication and Store</title>
	<!-- CUSTOM STYLE -->
	<link href="{{ asset('site/css/style.css') }}" rel="stylesheet">
	<!-- THEME TYPO -->
	<link href="{{ asset('site/css/themetypo.css') }}" rel="stylesheet">
	<!-- BOOTSTRAP -->
	<link href="{{ asset('site/css/bootstrap.css') }}" rel="stylesheet">
	<!-- COLOR FILE -->
	<link href="{{ asset('site/css/color.css') }}" rel="stylesheet">
	<!-- FONT AWESOME -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<!-- BX SLIDER -->
	<link href="{{ asset('site/css/jquery.bxslider.css') }}" rel="stylesheet">

	<link href="{{ asset('site/css/bootstrap-slider.css') }}" rel="stylesheet">

	<link href="{{ asset('site/css/widget.css') }}" rel="stylesheet">

	<link href="{{ asset('site/css/shortcode.css') }}" rel="stylesheet">
	<!-- responsive -->
	<link href="{{ asset('site/css/responsive.css') }}" rel="stylesheet">
	<!-- Component -->
	<link href="{{ asset('site/js/dl-menu/component.css') }}" rel="stylesheet">

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
		<div class="kode-content padding-tb-50">
			<div class="container">
				<div class="row">
					<div class="col-md-3 sidebar">
						<!--SEARCH WIDGET START-->
						<div class="widget widget-search">
							<h2>Search</h2>
							<div class="input-container">
								<input type="text" placeholder="Enter Keyword">
								<i class="fa fa-search"></i>
							</div>
						</div>
						<!--SEARCH WIDGET END-->
						<!--PRICE FILTER WIDGET START-->
						<div class="widget widget-price-filter">
							<h2>Filter by Price</h2>
							<b>$ 10</b>
							<b class="pull-right">$ 1000</b>
							<input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[10,400]"/>
							<a href="#" class="filter">Filter</a>
						</div>
						<!--PRICE FILTER WIDGET END-->
						<!--NEW ARRIVAL WIDGET START-->
						<div class="widget widget-new-arrival">
							<h2>New Arrival</h2>
							<ul>
								<li>
									<div class="new-arrival">
										<div class="kode-thumb">
											<a href="#"><img src="{{ asset('site/images/new-arrival1.png') }}" alt=""></a>
										</div>
										<div class="kode-text">
											<h3>consetetur sadip scing</h3>
											<p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
										</div>
									</div>
								</li>
								<li>
									<div class="new-arrival">
										<div class="kode-thumb">
											<a href="#"><img src="{{ asset('site/images/new-arrival2.png') }}" alt=""></a>
										</div>
										<div class="kode-text">
											<h3>consetetur sadip scing</h3>
											<p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
										</div>
									</div>
								</li>
								<li>
									<div class="new-arrival">
										<div class="kode-thumb">
											<a href="#"><img src="{{ asset('site/images/new-arrival3.png') }}" alt=""></a>
										</div>
										<div class="kode-text">
											<h3>consetetur sadip scing</h3>
											<p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<!--NEW ARRIVAL WIDGET END-->
						<!--CATEGORY WIDGET START-->
						<div class="widget widget-categories">
							<h2>Categorias</h2>
							<ul>

							</ul>
						</div>
						<!--CATEGORY WIDGET END-->
						<!--NEW ARRIVAL WIDGET START-->
						<div class="widget widget-new-arrival">
							<h2>Doados Recentemente</h2>
							<ul class="bxslider">
							</ul>
						</div>
						<!--NEW ARRIVAL WIDGET END-->
					</div>
					<div class="col-md-9">
            <!-- Resultado da busca -->
    					@if($results->count() == 0)
    					<h3>Nenhum resultado encontrado para sua pesuisa "{{ $pesquisa }}"</h3>
    					@else
    					<h4>Mostrando @if($results->count() < 9) {{$results->count()}} @else 9 @endif de {{$results->count()}} resultados...</h4>
    					<div class="row">
    						@foreach($results as $r)
    						<div class="col-md-3">
    							<div class="best-seller-pro">
    								<figure>
    									<img src="{{ $r->image }}" heigth="292" width="236" alt="">
    								</figure>
    								<div class="kode-text">
    									<h3><a href="#">{{ $r->titulo }}</a></h3>
    								</div>
    								<div class="kode-caption">
    									<h3>{{ $r->titulo }}</h3>
    									<!-- <div class="rating">
    										<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
    									</div> -->
    									<p>{{ $r->autores->lists('autor')->first() }}</p>
    									<!-- <p class="price">$24.75</p> -->
    									<a href="{{ url('/view-book/'.$r->id) }}" class="add-to-cart">Visualizar</a>
    								</div>
    							</div>
    						</div>
    						@endforeach
    					</div>
    					{{ $results->links() }}
    					@endif
            <!-- Fim do Resultado da busca -->
					</div>
				</div>
			</div>
		</div>
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
	<script src="{{ asset('site/js/owl.carousel.js') }}"></script>
	<script src="{{ asset('site/js/dl-menu/modernizr.custom.js') }}"></script>
	<script src="{{ asset('site/js/dl-menu/jquery.dlmenu.js') }}"></script>
	<script src="{{ asset('site/js/classie.js') }}"></script>
	<script src="{{ asset('site/js/functions.js') }}"></script>
</body>
</html>

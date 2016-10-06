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
								@foreach($categorias as $c)
										<li><a href="#">{{ $c->descricao }}</a></li>
								@endforeach
							</ul>
						</div>
						<!--CATEGORY WIDGET END-->
						<!--NEW ARRIVAL WIDGET START-->
						<div class="widget widget-new-arrival">
							<h2>Doados Recentemente</h2>
							<ul class="bxslider">
								<li>
									<?php $pos =1; ?>
									@foreach($news_donates as $donate)
										<div class="new-arrival">
											<div class="kode-thumb">
												<a href="{{ url('/view-book/'.$donate->id) }}"><img src="{{ $donate->image }}" alt=""></a>
											</div>
											<div class="kode-text">
												<h3>{{ $donate->titulo }}</h3>
												<p>{{ str_limit($donate->desc_livro,50) }}</p>
											</div>
										</div>
										@if($pos % 3 ==0)
											</li><li>
										@endif
										<?php $pos++; ?>
									@endforeach
							</ul>
						</div>
						<!--NEW ARRIVAL WIDGET END-->
					</div>
					<div class="col-md-9">
						<!--BOOK DETAIL START-->
						<div class="lib-book-detail">
							<div class="row">
								<div class="col-md-5">
									<div class="kode-thumb">
										<img src="{{ $livro->image }}" alt="">
									</div>
								</div>
								<div class="col-md-7">
									<div class="kode-text">
										<h2>{{ $livro->titulo }}</h2>
										<div class="product-review">
											<div class="rating">
												<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
											</div>
											<p>4 Customer reveiws</p>
										</div>
										<div class="product-price">
											<!-- <h4>$ 19.90</h4> -->
											<p>Author : <span class="color">{{ $livro->autores->lists('autor')->first() }}</span></p>
										</div>
										<div class="book-text">
											<p>{{ $livro->desc_livro }}</p>
										</div>
										<div class="book-text">
											<p>Categorias: {{ $livro->categorias->lists('descricao')->implode(', ') }}</p>
											<!-- <p>Tag: books.</p> -->
											<p>Autores: {{ $livro->autores->lists('autor')->implode(', ') }}</p>
											<p>Publisher: Journal inc</p>
											<p>Doado por: {{ App\User::where('id',$livro->user_donate_id)->value('nome') }}</p>
											<p>Book ID: {{ $livro->id }}</p>
											<p>Pontos necessários: {{ $livro->pontos }}</p>
										</div>
                    @if(Auth::check())
                      @if(Auth::user()->id == $livro->user_donate_id)
                        <a href="#" class="add-to-cart">Editar</a>
                      @elseif(Auth::user()->id != $livro->user_donate_id && $livro->status != 2)
                        <a href="{{ url('/reservar-livro/'.$livro->id) }}" class="add-to-cart">Reservar</a>
											@else
												Este livro ja foi reservado por:
                      @endif
                    @else
                      Caro usuário, para reservar esse livro é necessário estar logado.
                      <a href="{{ url('/login') }}" class="add-to-cart">Logar</a>
                    @endif

									</div>
								</div>
							</div>
						</div>
						<!--BOOK DETAIL END-->
						<!--PRODUCT REVIEW TABS START-->
						<div class="product-review-tabs">
							<!--NAV TABS START-->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#Description " aria-controls="Description" role="tab" data-toggle="tab">Description </a></li>
								<li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
								<li role="presentation"><a href="#tags" aria-controls="tags" role="tab" data-toggle="tab">Tags</a></li>
								<li role="presentation"><a href="#CustomTab" aria-controls="CustomTab" role="tab" data-toggle="tab">Custom Tab</a></li>
							</ul>
							<!--NAV TABS END-->
							<!--TAB PANEL START-->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="Description">
									{{ $livro->desc_livro }}
								</div>
								<div role="tabpanel" class="tab-pane fade" id="reviews">
									<div class="kode-comments">
										<ul>
											<li>
												<div class="kode-thumb">
													<a href="#"><img alt="" src="{{ asset('site/images/author14.png') }}"></a>
												</div>
												<div class="kode-text">
													<h4>Saul Bellow</h4>
													<p class="designation">JUNE 20, 2015</p>
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
													<a class="reply" href="#">Reply</a>
												</div>
											</li>
											<li>
												<div class="kode-thumb">
													<a href="#"><img alt="" src="{{ asset('site/images/author14.png') }}"></a>
												</div>
												<div class="kode-text">
													<h4>Saul Bellow</h4>
													<p class="designation">JUNE 20, 2015</p>
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
													<a class="reply" href="#">Reply</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="tags">
									<div class="product-tags">
										<a href="#">habemus</a>
										<a href="#">accusam</a>
										<a href="#">vero</a>
										<a href="#">dolor</a>
										<a href="#">justo</a>
										<a href="#">diam</a>
										<a href="#">nonumy</a>
										<a href="#">consetetur</a>
										<a href="#">erat</a>
										<a href="#">sanctus</a>
										<a href="#">gubergren</a>
										<a href="#">eirmod</a>
										<a href="#">habemus</a>
										<a href="#">accusam</a>
										<a href="#">vero</a>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="CustomTab">
									<p>Ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
									<p>Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
									<p>Sed an nominavi maiestatis, et duo corrumpit constituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
									<p>Ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
								</div>
							</div>
							<!--TAB PANEL END-->
						</div>
						<!--PRODUCT REVIEW TABS END-->
						<!--RELATED PRODUCTS START-->
						<div class="lib-related-products">
							<h2>Livros Relacionados</h2>
							<?php $pos=1 ?>
							<!-- <div class="row"> -->
								<!--PRODUCT GRID START-->
								@foreach($livros_r as $lr)
								@if($pos % 3 == 0)
		            	<div class="row">
		            @endif

								<div class="col-md-4">
									<div class="best-seller-pro">
										<figure>
											<img src="{{ $lr->image }}" height="300" width="269" alt="">
										</figure>
										<div class="kode-text">
											<h3><a href="#">{{ $lr->titulo }}</a></h3>
										</div>
										<div class="kode-caption">
											<h3>{{ $lr->titulo }}</h3>
											<div class="rating">
												<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
											</div>
											<p>{{ $livro->autores->lists('autor')->first() }}</p>
											<!-- <p class="price">$334.50</p> -->
											<a href="{{ url('/view-book/'.$lr->id) }}" class="add-to-cart">Visualizar</a>
										</div>
									</div>
								</div>
								@if($pos % 3 == 0)
									</div>
		            @endif
								<?php $pos++; ?>
								@endforeach
								<!--PRODUCT GRID END-->
							<!-- </div> -->
						</div>
						<!--RELATED PRODUCTS END-->
					</div>
				</div>
			</div>
		</div>
		<!--NEWSLETTER START-->
		<section class="kode-newsletters">
			<div class="container">
				<!--SECTION CONTENT START-->
				<div class="section-content white">
					<h2>Subscribe to our Newsletter for the latest news.</h2>
					<p>Update your-self right now! By filling the form below, the lastest information about a thousand books will be sent directly to your email weekly.</p>
				</div>
				<!--SECTION CONTENT END-->
				<div class="input-container">
					<input type="text" placeholder="Subscribe us">
					<button>Subscribe</button>
				</div>
			</div>
		</section>
		<!--NEWSLETTER END-->
		<footer>
			<div class="container">
				<div class="row">
					<!--TEXT WIDGET START-->
					<div class="col-md-3">
						<div class="widget widget-text">
							<h2>About Us</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
							<ul>
								<li><i class="fa fa-tags"></i><p>450 fifth Avenue, 34th floor. NYC</p></li>
								<li><i class="fa fa-phone"></i><p>(+800) 123 4567 890</p></li>
								<li><i class="fa fa-envelope-o"></i><p><a href="mailto:info@bookstore.com">info@bookstore.com</a></p></li>
							</ul>
						</div>
					</div>
					<!--TEXT WIDGET END-->
					<!--TWITTER WIDGET START-->
					<div class="col-md-3">
						<div class="widget widget-twitter">
							<h2>Latest Tweets</h2>
							<ul>
								<li>
									<p>There are some amazing submissions in the latest<a href="#"> @tutsplus ‘Created by you ’challenge http://t.co/duajgjahuz 16 hour ago</a></p>
								</li>
								<li>
									<p>There are some amazing submissions in the latest<a href="#"> @tutsplus ‘Created by you ’challenge http://t.co/duajgjahuz 16 hour ago</a></p>
								</li>
							</ul>
						</div>
					</div>
					<!--TWITTER WIDGET END-->
					<!--CATEGORY WIDGET START-->
					<div class="col-md-3">
						<div class="widget widget-categories">
							<h2>Information</h2>
							<ul>
								<li><a href="#">Specials</a></li>
								<li><a href="#">New products</a></li>
								<li><a href="#">Best sellers</a></li>
								<li><a href="#">Contact us</a></li>
								<li><a href="#">Terms of use</a></li>
								<li><a href="#">Sitemap</a></li>
							</ul>
						</div>
					</div>
					<!--CATEGORY WIDGET END-->
					<!--NEWSLETTER START-->
					<div class="col-md-3">
						<div class="widget widget-newletter">
							<h2>Newsletter</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
							<input type="text" placeholder="E-mail ID">
							<button>Subscribe</button>
						</div>
					</div>
					<!--NEWSLETTER START END-->
				</div>
			</div>
		</footer>
		<div class="copyrights">
			<div class="container">
				<p>Copyrights © 2015-16 KodeForest. All rights reserved</p>
				<div class="cards"><img src="images/cards.png" alt=""></div>
			</div>
		</div>
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

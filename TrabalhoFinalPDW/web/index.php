<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sweet-cakes </title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
	</head>
	<body>
	<!-- container -->
	<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<ul>
						<li>
								<a href = "checkout.php">Checkout</a>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="top-header-center">
					</div>
					<div class="top-header-right">
						<ul>
						<li>
						<a href='logout.php'>Logout</a>
						</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!-- /top-header -->
		<!-- main-menu -->
		<div class="main-menu">
				<div class="container">
				<div class="head-nav">
					<span class="menu"> </span>
					<ul>
						<li><a href="index.php">Início</a></li>
						<li><a href="products.php">Produtos</a></li>
						<li><a href="about.php">Sobre Nós</a></li>
						<div class="clearfix"> </div>
					</ul>
				</div>	
					<!-- script-for-nav -->
						<script>
							$( "span.menu" ).click(function() {
							  $( ".head-nav ul" ).slideToggle(300, function() {
								// Animation complete.
							  });
							});
						</script>
					<!-- script-for-nav -->
	
					<!-- logo -->
					<div class="logo">
						<a href="index.php"><img src="images/logo.png" title="Sweetcake" /></a>
					</div>
					<!-- logo -->
				</div>
			</div>
		<!-- /main-menu -->
		<!-- banner -->
		<div class="container">
				<div class="img-slider">
						<!----start-slider-script---->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
					    // You can also use "$(window).load(function() {"
					    $(function () {
					      // Slideshow 4
					      $("#slider4").responsiveSlides({
					        auto: true,
					        pager: true,
					        nav: true,
					        speed: 500,
					        namespace: "callbacks",
					        before: function () {
					          $('.events').append("<li>before event fired.</li>");
					        },
					        after: function () {
					          $('.events').append("<li>after event fired.</li>");
					        }
					      });
					
					    });
					  </script>
					<!----//End-slider-script---->
					<!-- Slideshow 4 -->
					    <div  id="top" class="callbacks_container">
					      <ul class="rslides" id="slider4">
					        <li>
					          <img  src="images/slide.jpg" class="img-responsive" alt="">
					          <div class="slider-caption">
					          	 <div class="slider-caption-left text-center">
										<h1>PROCURA BOLOS DE ANIVERSÁRIO COM ESTILO E DELICIOSOS?</h1>
										<p>NÃO SE PREOCUPE! VISITE A NOSSA SECÇÃO "BOLOS DE ANIVERSÁRIO".</p>
										<a class="buy-btn" href="#">Comprar agora</a>
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="images/iteam.png" class="img-responsive" title="name" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					           <!-- share-on -->
					          <div class="share-on">
					          	<div class="share-on-grid">
					          		<div class="share-on-grid-left">
					          			<h3>Partilhar</h3>
					          		</div>
					          		<div class="share-on-grid-right">
					          			<a href="#"><span class="facebook"> </span></a>
					          			<a href="#"><span class="twitter"> </span></a>
					          			<div class="clearfix"> </div>
					          		</div>
					          		<div class="clearfix"> </div>
					          	</div>
					          	<div class="clearfix"> </div>
					          </div>
					          <!-- share-on -->
					        </li>
					         <li>
					          <img  src="images/slide.jpg" class="img-responsive" alt="">
					          <div class="slider-caption">
					          	 <div class="slider-caption-left text-center">
										<h1>PROCURA BOLOS DE ANIVERSÁRIO COM ESTILO E DELICIOSOS?</h1>
										<p>NÃO SE PREOCUPE! VISITE A NOSSA SECÇÃO "BOLOS DE ANIVERSÁRIO".</p>
										<a class="buy-btn" href="#">Comprar agora</a>
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="images/iteam.png" class="img-responsive" title="name" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					          <!-- share-on -->
					          <div class="share-on">
					          	<div class="share-on-grid">
					          		<div class="share-on-grid-left">
					          			<h3>Partilhar</h3>
					          		</div>
					          		<div class="share-on-grid-right">
					          			<a href="#"><span class="facebook"> </span></a>
					          			<a href="#"><span class="twitter"> </span></a>
					          			<div class="clearfix"> </div>
					          		</div>
					          		<div class="clearfix"> </div>
					          	</div>
					          	<div class="clearfix"> </div>
					          </div>
					          <!-- share-on -->
					        </li>
					        <li>
					          <img src="images/slide.jpg" class="img-responsive" alt="">
					           <div class="slider-caption">
					          	 <div class="slider-caption-left text-center">
										<h1>PROCURA BOLOS DE ANIVERSÁRIO COM ESTILO E DELICIOSOS?</h1>
										<p>NÃO SE PREOCUPE! VISITE A NOSSA SECÇÃO "BOLOS DE ANIVERSÁRIO".</p>
										<a class="buy-btn" href="#">Comprar agora</a>
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="images/iteam.png" class="img-responsive" title="name" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					           <!-- share-on -->
					          <div class="share-on">
					          	<div class="share-on-grid">
					          		<div class="share-on-grid-left">
					          			<h3>Partilhar</h3>
					          		</div>
					          		<div class="share-on-grid-right">
					          			<a href="#"><span class="facebook"> </span></a>
					          			<a href="#"><span class="twitter"> </span></a>
					          			<div class="clearfix"> </div>
					          		</div>
					          		<div class="clearfix"> </div>
					          	</div>
					          	<div class="clearfix"> </div>
					          </div>
					          <!-- share-on -->
					        </li>
					        <li>
					          <img src="images/slide.jpg" class="img-responsive" alt="">
					           <div class="slider-caption">
					            <div class="slider-caption-left text-center">
					          	 	<h1>PROCURA BOLOS DE ANIVERSÁRIO COM ESTILO E DELICIOSOS?</h1>
					          	 	<p>NÃO SE PREOCUPE! VISITE A NOSSA SECÇÃO "BOLOS DE ANIVERSÁRIO".</p>
					          	 	<a class="buy-btn" href="#">Comprar agora</a>
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="images/iteam.png" class="img-responsive" title="name" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					           <!-- share-on -->
					          <div class="share-on">
					          	<div class="share-on-grid">
					          		<div class="share-on-grid-left">
					          			<h3>Partilhar</h3>
					          		</div>
					          		<div class="share-on-grid-right">
					          			<a href="#"><span class="facebook"> </span></a>
					          			<a href="#"><span class="twitter"> </span></a>
					          			<div class="clearfix"> </div>
					          		</div>
					          		<div class="clearfix"> </div>
					          	</div>
					          	<div class="clearfix"> </div>
					          </div>
					          <!-- share-on -->
					        </li>
					      </ul>
					    </div>
					    <div class="clearfix"> </div>
					</div>
		<!-- /banner -->
		</div>
		<!-- top-grids -->
		<div class="top-grids">
			<div class="container">
				<div class="col-md-4 top-grid">
					<div class="top-grid-head">
						<h3>Os nossos bolos</h3>
					</div>
					<div class="top-grid-info">
						<img src="images/img1.jpg" class="img-responsive" title="name"/>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
						<span>70€</span>
						<div class="clearfix"> </div>
						<a class="btn" href="#">Comprar agora</a>
					</div>
				</div>
				<div class="col-md-4 top-grid">
					<div class="top-grid-head">
						<h3>Os nossos bolos</h3>
					</div>
					<div class="top-grid-info">
						<img src="images/img2.jpg" class="img-responsive" title="name"/>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
						<span>90€</span>
						<div class="clearfix"> </div>
						<a class="btn" href="#">Comprar agora</a>
					</div>
				</div>
				<div class="col-md-4 top-grid">
					<div class="top-grid-head">
						<h3>Os nossos bolos</h3>
					</div>
					<div class="top-grid-info">
						<img src="images/img3.jpg" class="img-responsive" title="name"/>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
						<span>50€</span>
						<div class="clearfix"> </div>
						<a class="btn" href="#">Comprar agora</a>
					</div>
				</div>
			</div>
			<!-- top-grids-bg -->
			<div class="top-grids-bg">
				<span> </span>
			</div>
			<!-- top-grids-bg -->
		</div>
		<!-- top-grids -->
		<!-- bottom-grids -->
		<div class="bottom-grids">
			<div class="container">
				<div class="col-md-8 bottom-grid-left">
					<div class="col-md-3 bottom-grid-left-grid text-center">
						<img src="images/pic2.jpg" title="name"/>
						<h4>Bolo de aniversário infantil</h4>
						<p>40€</p>
					</div>
					<div class="col-md-3 bottom-grid-left-grid text-center">
						<img src="images/pic1.jpg" title="name"/>
						<h4>Bolo de aniversário infantil</h4>
						<p>40€</p>
					</div>
					<div class="col-md-3 bottom-grid-left-grid text-center">
						<img src="images/pic3.jpg" title="name"/>
						<h4>Bolo de aniversário infantil</h4>
						<p>40€</p>
					</div>
					<div class="col-md-3 bottom-grid-left-grid text-center">
						<img src="images/pic4.jpg" title="name"/>
						<h4>Bolo de aniversário infantil</h4>
						<p>40€</p>
					</div>
					<div class="clearfix"> </div>
					<span class="best-sale">Top de vendas</span>
					<a href="#" class="order"> </a>
				</div>
				<div class="col-md-4 bottom-grid-right">
					<h3><span class="tweet"> </span> latest tweet</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
					<label>Há 1 dia</label>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- bottom-grids -->
	<!-- /container -->
	<!-- footer -->
	<div class="footer">
			<div class="container">
				<div class="footer-top">
					<div class="col-md-3 location">
						<h4>Localização</h4>
						<p>#28 Rua Marquês de Ávila e Bolama, Covilhã, Portugal</p>
						<h4>Horário</h4>
						<p>Durante a semana:  07:00h-19:00h.</p>
						<p>Fins-de-Semana: 08:00h-19h:00h.</p>
						<p>Telefone para informações sobre horários de feriados.</p>
					</div>
					<div class="col-md-3 customer">
						<h4>Apoio ao cliente</h4>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. </p>
						<h4>Telefone</h4>
						<h6>275935684</h6>
						<h4>Contacte-nos.</h4>
						<h6>Mais informações em: <a href="contact.php"/>Contacto</a></h6>
					</div>
					<div class="col-md-3 social">
						<h4>Redes Sociais</h4>
						<div class="face-b">
							<img src="images/foot.png" title="name"/>
							<a href="#"><i class="fb"> </i></a>
						</div>
						<div class="twet">		
							<img src="images/foot.png" title="name"/>
								<a href="#"><i class="twt"> </i></a>
						</div>	
					</div>
					<div class="col-md-3 sign">
						<h4>Receba as nossas notícias:</h4>	
							<form>
								<input type="text" class="text" value="EMAIL" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'YOUR EMAIL ';}">
							</form>
					</div>
						<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	<!-- /footer -->
	</body>
</html>


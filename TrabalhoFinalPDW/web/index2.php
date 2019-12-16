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
						<li><a href="login.php" style ="border-right:none;">Sair</a></li>
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
                <li class="active"><a href="index.php">Início</a></li>
                <li><a href="products.php">Produtos</a></li>
                <li><a href="about.php">Sobre Nós</a></li>
                <div class="clearfix"> </div>
            </ul>
        </div>
        <!-- script-for-nav -->
        <script>
            $("span.menu").click(function () {
                $(".head-nav ul").slideToggle(300, function () {
                    // Animation complete.
                });
            });</script>
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

            });</script>
        <!----//End-slider-script---->
        <!-- Slideshow 4 -->
        <div id="top" class="callbacks_container">
            <ul class="rslides" id="slider4">
                <li>
                    <img src="images/slide.jpg" class="img-responsive" alt="">
                    <div class="slider-caption">
                        <div class="slider-caption-left text-center">
							<h1>ESTÁS À PROCURA DE BOLOS DOCES, SABOROSOS E CHEIOS DE ESTILO?</h1>
                            <p>NÃO TE PREOCUPES, NÓS AJUDAMOS! VÊ A SECÇÃO DOS PRODUTOS.</p>
                            <a class="buy-btn" href="products.php">Compra agora</a>
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
                                <h3>Partilha em</h3>
                            </div>
                            <div class="share-on-grid-right">
                                <a target="_blank" href="http://www.facebook.com"><span class="facebook"> </span></a>
                                <a target="_blank" href="http://www.twitter.com"><span class="twitter"> </span></a>
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
                <h3>OS NOSSOS BOLOS</h3>
            </div>
            <div class="top-grid-info">
                <img src="images/img1.jpg" class="img-responsive" title="name" />
                <p>São decorados pelos nossos cake designers de forma a satisfazer a estética dos nossos clientes, com decoração comestível.</p>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-4 top-grid">
            <div class="top-grid-head">
                <h3>OS NOSSOS BOLOS</h3>
            </div>
            <div class="top-grid-info">
                <img src="images/img2.jpg" class="img-responsive" title="name" />
                <p>São feitos em cozinhas limpas que respeitam as normas de higiene de restaurantes e pastelarias e com material topo de gama.</p>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-4 top-grid">
            <div class="top-grid-head">
                <h3>OS NOSSOS BOLOS</h3>
            </div>
            <div class="top-grid-info">
                <img src="images/img3.jpg" class="img-responsive" title="name" />
                <p>São deliciosos com ingredientes costumizáveis de acordo com os gostos e condições de saúde dos nossos clientes.</p>
                <div class="clearfix"> </div>
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
                <img src="images/pic2.jpg" title="name" />
                <h4>Bolo de aniversário </h4>
                <p>40€</p>
            </div>
            <div class="col-md-3 bottom-grid-left-grid text-center">
                <img src="images/pic1.jpg" title="name" />
                <h4>Bolo de aniversário </h4>
                <p>20€</p>
            </div>
            <div class="col-md-3 bottom-grid-left-grid text-center">
                <img src="images/pic3.jpg" title="name" />
                <h4>Bolo de aniversário </h4>
                <p>37€</p>
            </div>
            <div class="col-md-3 bottom-grid-left-grid text-center">
                <img src="images/pic4.jpg" title="name" />
                <h4>Bolo de aniversário </h4>
                <p>84€</p>
            </div>
            <div class="clearfix"> </div>
            <span class="best-sale">Best sellers</span>
            <a href="login.php" class="order"> </a>
        </div>
        <div class="col-md-4 bottom-grid-right">
            <h3><span class="tweet"> </span> Tweet mais recente</h3>
            <p> &#64;sweetcakes  5 estrelas! Adorei! Vou voltar de certeza!! </p>
            <label>Há 13 horas</label>
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
					<h4>Local</h4>
					<p>Covilhã</p>
					<h4>Horário</h4>
					<p>Dias da Semana 8h-18h</p>
					<p>Fins de Semana 8h-17h</p>
					<p>Telefonar nos feriados</p>
				</div>
				<div class="col-md-3 customer">
					<h4>Serviço ao Cliente</h4>
					<p>Caso algum problema, contactar por</p>
					<h4>Telefone</h4>
					<h6>916668905</h6>
					<h4>Email</h4>
					<h6>sweet@bakery.com</h6>
				</div>
				<div class="col-md-3 social">
					<h4>Redes Sociais</h4>
					<div class="face-b">
						<img src="images/foot.png" title="name"/>
						<a href="http://www.facebook.com"><i class="fb"> </i></a>
					</div>
					<div class="twet">		
						<img src="images/foot.png" title="name"/>
							<a href="http://twitter.com"><i class="twt"> </i></a>
					</div>	
				</div>
				<div class="col-md-3 sign">
                    <h4>Encomendas pagas na entrega por multibanco ou dinheiro.</h4>
				</div>
					<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<p>Trabalho realizado por Ângela Ferreira e Beatriz Herculano</p>
			</div>
		</div>
	</div>
	<!-- /footer -->
	</body>
</html>


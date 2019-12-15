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
		</script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
	</head>
	<body>
	<!-- container -->
		<!-- top-header -->
		<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<ul>
						<li>
								<?php
									session_start();
									echo "Bem vindo(a) " . $_SESSION['email'] . "!";
									echo "<a href='logout.php'>Logout"
								?>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="top-header-center">
						<p><a href='checkout.php'><span class="cart"> </span>Carrinho</a><label>0€</label></p>
					</div>
					<div class="top-header-right">
						
							<a class="dados" href="login.php">Login</a>
							<a class="dados" href="register1.php">Registo</a>
						
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
						<li class="active"><a href="products.php">Produtos</a></li>
						<li><a href="about.php">Sobre</a></li>
						<li><a href="contact.php">Contacto</a></li>
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
						<a href="index.html"><img src="images/logo.png" title="Sweetcake" /></a>
					</div>
					<!-- logo -->
				</div>
			</div>
		<!-- /main-menu -->
	<!-- service -->
<div class="biseller-info">
<div class="container">
<h2>Products</h2>
<h3 class="new-models">Novas variedades</h3>
			<ul id="flexiselDemo3">
				<li>
					<div class="biseller-column">
					<img src="images/11.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Visualizar</a>
						</div>
					<div class="biseller-name">
						<h4>Delicious</h4>
						<p>52,85€</p>
					</div>
						<a href="singlepage.php"><button class="add2cart">
						    <span>| Adicionar ao carrinho</span>
						</button></a>					
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img src="images/12.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Visualizar</a>
						</div>
					<div class="biseller-name">
						<h4>Printed Cake</h4>
						<p>120,90€</p>
					</div>
						<a href="singlepage.php"><button class="add2cart">
						    <span>| Adicionar ao carrinho</span>
						</button></a>					
					</div>
				</li>
			
				<li>
					<div class="biseller-column">
					<img src="images/13.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Visualizar</a>
						</div>
					<div class="biseller-name">
						<h4>Forest Egg</h4>
						<p>90,00€</p>
					</div>
						<a href="singlepage.php"><button class="add2cart">
						    <span>| Adicionar ao carrinho</span>
						</button></a>
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img src="images/14.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Visualizar</a>
						</div>
					<div class="biseller-name">
						<h4>Butter Scotch </h4>
						<p>49,90€</p>
					</div>
						<a href="singlepage.php"><button class="add2cart">
						    <span>| Adicionar ao carrinho</span>
						</button></a>
					</div>
				</li>
	     	</ul>
			</div>
		</div>	

			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems: 4,
						animationSpeed: 1000,
						autoPlay: false,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
			
				<div class="best-seller">
				<div class="container">
					<div class="biseller-info">
					 <h3 class="new-models">Variedades</h3>
					<ul id="flexiselDemo1">
						<li>
							<div class="biseller-column">
							<img src="images/18.jpg" alt="">
							<div class="veiw-img-mark">
							<a href="singlepage.php">Visualizar</a>
						</div>
					<div class="biseller-name">
						<h4>Chocolate </h4>
						<p>35,50€</p>
					</div>
						<a href="singlepage.php"><button class="add2cart">
						    <span>| Adicionar ao carrinho</span>
						</button></a>
							</div>
						</li>
						<li>
							<div class="biseller-column">
							<img src="images/15.jpg" alt="">
							<div class="veiw-img-mark">
							<a href="singlepage.php">Visualizar</a>
						</div>
					<div class="biseller-name">
						<h4>Bolos de aniversário </h4>
						<p>70,00€</p>
					</div>
						<a href="singlepage.php"><button class="add2cart">
						    <span>| Adicionar ao carrinho</span>
						</button></a>
							</div>
						</li>
						<li>
							<div class="biseller-column">
							<img src="images/16.jpg" alt="">
							<div class="veiw-img-mark">
							<a href="singlepage.php">Visualizar</a>
						</div>
					<div class="biseller-name">
						<h4>Flower Types </h4>
						<p>65,80€</p>
					</div>
						<a href="singlepage.php"><button class="add2cart">
						    <span>| Adicionar ao carrinho</span>
						</button></a>
							</div>
						</li>
						<li>
							<div class="biseller-column">
							<img src="images/17.jpg" alt="">
							<div class="veiw-img-mark">
							<a href="singlepage.php">Visualizar</a>
						</div>
					<div class="biseller-name">
						<h4>Sheet Cake </h4>
						<p>51,90€</p>
					</div>
						<a href="singlepage.php"><button class="add2cart">
						    <span>| Adicionar ao carrinho</span>
						</button></a>
							</div>
						</li>
			     	</ul>
					</div>
			</div>
			</div>
			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo1").flexisel({
						visibleItems: 4,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
			
			<div class="clearfix"></div>


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
								<input type="text" class="text" value=" EMAIL" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'YOUR EMAIL ';}">
							</form>
					</div>
						<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	<!-- /footer -->
	</body>
</html>


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
		<script src="js/jquery.easydropdown.js"></script>
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
						<a href='login.php'>Login</a>
						</li>
						<li>
						<a href='register1.php'>Registo</a>
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
	<!---start-content----->
	<div class="content">
	<div class="container">
		<div class="login-page">
			   <div class="account_grid">
			   <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
			  	 <h3>NOVOS CLIENTES</h3>
				 <p>Criando uma conta na nossa loja, estará apto a proceder a um checkout mais rápido, guardar vários endereços de envio, ver e rastrear os seus pedidos e muito mais!</p>
				 <a class="acount-btn" href="register1.php">Criar conta</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	<h3>CLIENTES REGISTADOS</h3>
				<p>Se já se encontra registado, por favor faça login.</p>
				<form action="entrar.php" method="POST">
				  <div>
					<span>Email <label>*</label></span>
					<input type="text" name="email" required> 
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input type="password" name="psword" required> 
				  </div>
				  <div><input type="checkbox" name="remember">Lembrar-me</div>
				  <a class="forgot" href="#">Esqueceu-se da sua password?</a>
				  <input type="submit" value="Login">
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
</div>
</div>
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


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
						<ul>
							<li><a href="login.php">Login</a></li>
							<li><a href="register1.php">Registo</a></li>
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
						<li><a href="products.php">Produtos</a></li>
						<li><a href="about.php">Sobre</a></li>
						<li class="active"><a href="contact.php">Contacto</a></li>
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
			<h2>Contacto</h2>
			<!----start-main-content----->
			<div class="main-content">
					<!---start-contact---->
					<div class="contact">
					<div class="contact_info">
			    	 	<h3>Encontre-nos aqui!</h3>
			    	 		<div class="map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3043.9109290759725!2d-7.511209784542832!3d40.277728779381555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd3d239a2482fe01%3A0xd7e1a8a5b7957846!2sR.%20Marqu%C3%AAs%20de%20%C3%81vila%20e%20Bolama%2010%2C%20Covilh%C3%A3!5e0!3m2!1spt-PT!2spt!4v1575865723239!5m2!1spt-PT!2spt" width="700" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					   		</div>
      				</div>
						<div class="section group">				
				<div class="col span_1_of_3">
					
      			<div class="company_address">
				     	<h3>Informação da pastelaria :</h3>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>PORTUGAL</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>info@mycompany.com</span></p>
				   		<p>SIGA-NOS EM: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form method="post" action="contact-post.html">
					    	<div>
						    	<span><label>NOME</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>tELEFONE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>ASSUNTO</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submeter"></span>
						  </div>
					    </form>

				    </div>
  				</div>				
			  </div>
					<!---End-contact---->
			</div>
			<div class="clear"> </div>
			<!----End-main-content----->
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


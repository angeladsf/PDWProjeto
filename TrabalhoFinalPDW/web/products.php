<?php
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "pdw";

	$dbcon = new mysqli($host, $dbusername, $dbpassword, $dbname);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Sweet Cakes</title>
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
						<li><a href="checkout.php">Checkout</a></li>
						<div class="clearfix"> </div>
					</ul>
				</div>
				<div class="top-header-center">
				</div>
				<div class="top-header-right">
					<ul>

						<li><a href="login.php" style ="border-right:none;">Sair</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /top-header -->
		<!-- main-menu -->
		<div class="main-menu">
			<div class="container">
			<div class="head-nav">
				<span class="menu"> </span>
				<ul>
					<li><a href="Index2.php">Início</a></li>
					<li class="active"><a href="Products.php">Produtos</a></li>
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
					<a href="index2.php"><img src="images/logo.png" title="Sweetcake" /></a>
				</div>
				<!-- logo -->
			</div>
		</div>
		<!-- /main-menu -->
	<!-- service -->
<div class="biseller-info">
<div class="container">
<h2>Produtos</h2>

<?php 
$query =  "select Nome, Preço, CakeID, ImagePath from tipos_bolos";
$result = mysqli_query($dbcon, $query);
echo ("<div class='best-seller'><div class='container'><div class='biseller-info'><h3 class='new-models'>Variedades</h3><ul id = 'flexiselDemo1' >");
while ($dr = mysqli_fetch_array($result)){ 
	echo("<li><div class='biseller-column'>");
	echo("<img src = '".$dr["ImagePath"]."' alt = '' class = 'produto'>");
	echo("<div class='biseller-name'><h4>");
	echo($dr["Nome"]);
	echo("</h4><p>");
	echo($dr["Preço"]);
	echo("</p></div>");
   echo("<a href ='singlepage.php?cakeid=".$dr["CakeID"]."'><button class='add2cart'><span>Adicionar ao Carrinho</span></button></a></div></li>");
}
echo("</ul></div></div>");

?>
</div>
</div>
</div>

<script type="text/javascript">
    $(window).load(function () {
        $("#flexiselDemo3").flexisel({
            visibleItems: 4,
            animationSpeed: 1000,
            autoPlay: false,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3
                }
            }
        });

    });
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
			
			<script type="text/javascript">
                $(window).load(function () {
                    $("#flexiselDemo1").flexisel({
                        visibleItems: 4,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint: 480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint: 640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint: 768,
                                visibleItems: 3
                            }
                        }
                    });

                });
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
			<div class="clearfix"></div>



	<!-- footer -->	<div class="footer">
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


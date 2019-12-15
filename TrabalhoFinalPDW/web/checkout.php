<?php

session_start();
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "123";
	$dbname = "pdw";

	$dbcon = new mysqli($host, $dbusername, $dbpassword, $dbname);
	

	$email = $_SESSION['email'];

	$query =  "select admin from cliente where email='".$email."';";
	$result = mysqli_query($dbcon, $query);
	$row = mysqli_fetch_array($result);

	$_SESSION["admin"] = $row['admin']; 

?>
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
		<script src="js/jquery.easydropdown.js"></script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
		<!---//webfonts--->

		<style>
            th, td {
                padding: 15px;
            }

            tbody td:not(#sp), tbody th{
              border: 1px solid #ff8db2;
            }

            

            tr:nth-child(odd) td{
                text-align:left;
            }

            tr:nth-child(even) {
                background-color: #ffede9;
                
            }


            tbody tr:nth-child(even){
                border-bottom: 2px solid #FF3E91;
            }



            thead {
                background-color:#fc6391;
                color:white;  
            }

                thead th, thead, td {
                    border:none;
                }
            table {
                border: 2px solid #FF3E91;
            }

        </style>
	</head>

	<body>
	<!-- container -->
		<!-- top-header -->
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
					<p><span class='cart'></span>Carrinho<label>" <?php $totalcart ?>"€</label></p>
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
						<li><a href="products.php">Produtos</a></li>
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
						<a href="index.php"><img src="images/logo.png" title="Sweetcake" /></a>
					</div>
					<!-- logo -->
				</div>
			</div>
		<!-- /main-menu -->
	<!---start-content----->
	<div class="check-out">
         <div class="container">
			 
    	     <h4 class="title">Carrinho de Compras</h4>


<?php


if (isset($_GET["cakeid"])){
	$query = "insert into carrinho(id_bolo, email, quant, description)  values('" + $_GET["cakeid"] + "', '" + $_SESSION["email"] + "', '" + $_GET["quantidade"] + "', '" + $_GET["description"]  + "');";
	$result = mysqli_query($dbcon, $query);
	header("Location: checkout.php");
}


if (isset($_GET["concluirCompra"])){
	$query = "Delete from compra where id_kart = ".$_GET["concluirCompra"];
	$result = mysqli_query($dbcon, $query);
	header("Location:checkout.php");
}

if (isset($_GET["cancelarCompra"])){
	$query = "Delete from compra where id_kart = ".$_GET["cancelarCompra"];
	$result = mysqli_query($dbcon, $query);
	header("Location:checkout.php");
}


$query = "select id, name, price, cakeid, carrinho.email, imagepath, quant,id_bolo, description from carrinho inner join tipos_bolos on cakeid = id_bolo where carrinho.email = '".$_SESSION["email"]."' and id not in (select id_kart from compra)";
$result = mysqli_query($dbcon, $query);

$totalcart = 0;
while ($dr = mysqli_fetch_array($result))
{
$price = floatval($dr["quant"]) * floatval($dr["price"]);
print("<img style='float:left; width:150px; height:auto; margin-right:10px;' src='".$dr["imagepath"]."' alt=''>");
print("<h5>".$dr["quant"]." unidades de ".$dr["name"]." por ".$price."€<br><div style='width:80%; word-wrap:break-word;'>Descrição:".$dr["description"]."</div></h5><form style='display:inline;' action = 'buy.php' method = 'GET' ><input style='display:none;' type='text' name = 'id' value = '".$dr["id"]."'/><input class = 'new_input' type='submit' value = 'Comprar'></form>&nbsp&nbsp<form style='display:inline;' action = 'remove.php' method = 'GET' ><input style='display:none;' type='text' name = 'id' value = '".$dr["id"]."'/><input type='submit' class = 'new_input' value = 'Remover Pedido'></form><br><br>");
$totalcart += $price;
}




$query2 = "select date, compra.email as emailc, address, cliente.email, id_kart, cakeid, id,id_bolo, quant, tipos_bolos.name as nameb, price, description from compra inner join carrinho on id = id_kart inner join tipos_bolos on carrinho.id_bolo = tipos_bolos.cakeid inner join cliente on compra.email = cliente.email";
$result2 = mysqli_query($dbcon, $query2);


if ($_SESSION["admin"] == "1") {

print("<br><br><h2 class='title'>Compras</h2><br>");
print("<table class = 'admintable'>");
print("<thead><tr><th>Data</th><th>Email</th><th>Morada</th><th>Bolo</th><th>Quantidade</th><th>Descrição</th><th>Preço</th></tr></thead>");

while ($dr2 = mysqli_fetch_array($result2))
{
print("<tbody><tr>");
print("<td>".$dr2["date"]."</td>");
print("<td>".$dr2["emailc"]."</td>");
print("<td>".$dr2["address"]."</td>");
print("<td>".$dr2["nameb"]."</td>");
print("<td>".$dr2["quant"]."</td>");
print("<td>".$dr2["description"]."</td>");
print("<td>".(floatval($dr2["quant"]) * floatval($dr2["price"]))."</td>");
print("</tr><tr><td colspan = '7' align='center' id = 'sp'><form style='display:inline;' action = 'checkout.aspx' method = 'GET' ><input style='display:none;' type='text' name = 'concluircompra' value = '".$dr2["id_kart"]."'/><input class = 'new_input' type='submit' value = 'Concluir Compra'></form>&nbsp&nbsp<form style='display:inline;' action = 'checkout.aspx' method = 'GET'><input style='display:none;' type='text' name = 'cancelarcompra' value = '".$dr2["id_kart"]."'/><input type='submit' class = 'new_input' value = 'Cancelar Compra'></form></td>");
print("</tr>");

}
print("</tbody></table>");

}


    	?>     
    	   </div>
		</div>
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
					<h4>Teelefone</h4>
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


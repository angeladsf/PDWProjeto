<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="CakeInfo.aspx.cs" Inherits="PDWProject.CakeInfo" %>

<!DOCTYPE html>

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
		<script src="js/jquery.easydropdown.js"></script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<link rel="stylesheet" href="css/etalage.css">
		<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
		<script src="js/jquery.easydropdown.js"></script>

		<script src="js/jquery.etalage.min.js"></script>
<script>
    jQuery(document).ready(function ($) {

        $('#etalage').etalage({
            thumb_image_width: 300,
            thumb_image_height: 200,
            source_image_width: 800,
            source_image_height: 600,
            show_hint: true,
            click_callback: function (image_anchor, instance_id) {
                alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
            }
        });

    });
		</script>

	</head>
	<body>
	<!-- container -->
		<!-- top-header -->
		<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					<ul>
						<li><a href="checkout.aspx">Checkout</a></li>
						
				</div>
				<div class="top-header-center">
				</div>
				<div class="top-header-right">
					<ul>
						<li>
							<form>
								<input type="text">
								<input type="submit" value="" />
							</form>
						</li>
						<li><a style="border-right:none" href="/Account/Login">Sair</a></li>
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
					<li><a href="/Account/Index">Início</a></li>
					<li class="active"><a href="products.aspx">Produtos</a></li>
					<li><a href="about.aspx">Sobre Nós</a></li>
					<div class="clearfix"> </div>
				</ul>
			</div>	
				<!-- script-for-nav -->
					<script>
                        $("span.menu").click(function () {
                            $(".head-nav ul").slideToggle(300, function () {
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
	<!---start-content----->
	<div class="details">
<div class="container">
<div class="row single">
<div class="col-md-9">
				  <div class="single_left">
				 
					<div class="grid images_3_of_2">
						<ul id="etalage">
                            <asp:PlaceHolder ID ="ImageCake" runat="server"></asp:PlaceHolder>
						</ul>
						 <div class="clearfix"></div>		
				  </div>
				  <div class="desc1 span_3_of_2">
                    <asp:PlaceHolder ID ="PlaceHolder" runat="server"></asp:PlaceHolder>

                      

					<div class="det_nav1">
								<h5 style="font-size:16px;color: #555555;text-transform: uppercase;">Descrição :</h5>
                                <span>Alterações no bolo devido a alergias, decoração especial, forma, etc</span>
								<form id ="form" method="get" action="Checkout.aspx">
                                    <textarea name="description" rows="3" cols="55" maxlength="300"></textarea><br><br />
                                    <h5 style="font-size:16px;color: #555555;text-transform: uppercase;">Quantidade :</h5>
                                    
                                    <select name="quantidade">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <asp:PlaceHolder ID ="sendcake" runat="server"></asp:PlaceHolder>
                                  </select><br><br>
						            <input type="submit" class='new_input' value ="Adicionar ao carrinho"/>
								</form>
                        <script>
                            var url = new URL(url_string);
                            var c = url.searchParams.get("cakeid");
                            var frm = document.getElementById('form');
                            frm.action= "checkout.aspx?cakeid=" + c.toString();
                      </script>
							
							 <div class="clearfix"></div>
					</div>
			   	 </div>
          	    <div class="clearfix"></div>
          	   </div>
          	    <div class="single-bottom1">
					<h6>Detalhes</h6>
					<p class="prod-desc">O pagamento da encomenda deverá ser efetuado durante a entrega ao domicílio. A encomenda é entregue o mais depressa possível a horas a margar com
                        o cliente através de email. Caso o cliente não esteja presente na entrega, a encomenda será considerada entregue e não será possível efetuar reembolso.
                        O cliente poderá alterar a data de entrega no máximo 12 horas antes até a hora marcada original. O cliente tem até 12 horas para cancelar uma encomenda após a compra 
                        da mesma.
					</p>
				</div>
		   	  </div>
	       </div>
		   </div>
<div class="col-md-3 single_left">
			  
	<div class="clearfix"></div>	
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
					<p>Caso algum problema, contartar por</p>
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

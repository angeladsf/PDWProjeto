﻿<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="CakeInfo.aspx.cs" Inherits="PDWProject.CakeInfo" %>

<!DOCTYPE html>

<html>
	<head>
		<title>Sweet-cakes Website Template | Home :: w3layouts</title>
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
            thumb_image_height: 400,
            source_image_width: 800,
            source_image_height: 1000,
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
						<li><a href="myaccount.html">My Account</a></li>
						<li><a href="checkout.aspx">Checkout</a></li>
						<div class="clearfix"> </div>
					</ul>
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
						<li><a href="/Account/Login">Logout</a></li>
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
					<li><a href="/Account/Index">Home</a></li>
					<li class="active"><a href="products.aspx">products</a></li>
					<li><a href="about.html">about</a></li>
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
								<h4>Descrição :</h4>
                                <span>Alterações no bolo devido a alergias, decoração especial, forma, etc</span>
								<form id ="form" method="get" action="Checkout.aspx">
                                    <textarea name="description" rows="5" cols="50"></textarea><br><br />
                                    <h4>Quantidade :</h4>
                                    <select name="quantidade">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <asp:PlaceHolder ID ="sendcake" runat="server"></asp:PlaceHolder>
                                  </select><br><br>
						            <input type="submit" value ="Adicionar ao carrinho"/>
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
                        o cliente através de uma chamada telefónica. Caso o cliente não esteja presente na entrega, a encomenda será considerada entregue e não será possível efetuar reembolso.
                        O cliente poderá alterar a data de entrega no máximo 12 horas antes até a hora marcada original.
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
					<h4>location</h4>
					<p>#04 Dist.City,State,PK</p>
					<h4>hours</h4>
					<p>Weekdays 7 a.m.-7 p.m.</p>
					<p>Weekends 8 a.m.-7 p.m.</p>
					<p>Call for Holidays Hours.</p>
				</div>
				<div class="col-md-3 customer">
					<h4>customer service</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. </p>
					<h4>phone</h4>
					<h6>1(234)567-8910</h6>
					<h4>contact us</h4>
					<h6>contact us page.</h6>
				</div>
				<div class="col-md-3 social">
					<h4>get social</h4>
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
					<h4>sign up for news later</h4>	
						<form>
							<input type="text" class="text" value="YOUR EMAIL" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'YOUR EMAIL ';}">
						</form>
				</div>
					<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<p>Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
			</div>
		</div>
	</div>
	<!-- /footer -->
	</body>
</html>

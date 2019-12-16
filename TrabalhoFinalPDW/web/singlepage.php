<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sweet-cakes</title>
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
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 800,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
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
						<li>
								<?php
									session_start();
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
							<li class="active"><a href="register1.php">Registo</a></li>
					
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
					<a href="index.php"><img src="images/logo.png" title="Sweetcake" /></a>
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
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="images/m1.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="images/m1.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/m2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images/m2.jpg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/m3.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/m3.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="images/m4.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/m4.jpg"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div>
				  <div class="desc1 span_3_of_2">
					<h3>Trufa de Chocolate</h3>
					<p>30€ <a href="#"></a></p>
					<div class="det_nav">
						<h4>Bolos Relacionados:</h4>
						<ul>
							<li><a href="#"><img src="images/11.jpg" class="img-responsive" alt=""/></a></li>
							<li><a href="#"><img src="images/12.jpg" class="img-responsive" alt=""/></a></li>
							<li><a href="#"><img src="images/13.jpg" class="img-responsive" alt=""/></a></li>
							<li><a href="#"><img src="images/14.jpg" class="img-responsive" alt=""/></a></li>
						</ul>
					</div>
					<div class="det_nav1">
						<h4>Selecione um bolo:</h4>
							<div class=" sky-form col col-4">
								<ul>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>1kg</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>2kg</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>3kg</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>4kg</label></li>
									 <div class="clearfix"></div>
								</ul>
							</div>
							 <div class="clearfix"></div>
					</div>
					<div class="btn_form">
						<a href="#">Comprar</a>
					</div>
			   	 </div>
          	    <div class="clearfix"></div>
          	   </div>
          	    <div class="single-bottom1">
					<h6>Detalhes</h6>
					<p class="prod-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option</p>
				</div>
				<div class="single-bottom2">
					<h6>Produtos Relacionados</h6>
						<div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img src="images/15.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="#">Excepteur sint</a></h5>
		                           <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>									
							   </div>
							  <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access">45,69€</span>								
								<button class="button1"><span>Adicionar ao carrinho</span></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
					  <div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img src="images/16.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="#">Excepteur sint</a></h5>
		                           <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>									
							   </div>
							   <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access">37,50€</span>								
								<button class="button1"><span>Adicionar ao carrinho</span></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
				     <div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img src="images/17.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="#">Excepteur sint</a></h5>
		                           <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>									
							   </div>
							   <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access">29,90€</span>								
								<button class="button1"><span>Adicionar ao carrinho</span></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
		   	  </div>
	       </div>
<div class="col-md-3 single_left">
			   <div class="block block-layered-nav first">
                  <p class="block-subtitle">Opções de compra</p>
            <dl id="narrow-by-list">
                 <dt class="odd">Preço</dt>
                    <dd class="odd">
					<ol>
					    <li>
					                <a href="#"><span class="price">10,00€</span> - <span class="price">29,99€</span></a>
					                        (3)
					            </li>
					    <li>
					                <a href="#"><span class="price">30.00€</span> - <span class="price">49,99€</span></a>
					                        (2)
					            </li>
					    <li>
					                <a href="#"><span class="price">50,00€</span> ou mais</a>
					                        (1)
					            </li>
					</ol>
					</dd>
					                                                                    <dt class="even">Itens</dt>
					                    <dd class="even">
					<ol>
					    <li>
					                <a href="#">Ananás</a>
					                        (1)
					            </li>
					    <li>
					                <a href="#">Black Forest</a>
					                        (1)
					            </li>
					    <li>
					                <a href="#">Chocolate</a>
					                        (2)
					            </li>
					    <li>
					                <a href="#">Mirtilos</a>
					                        (1)
					            </li>
					    
					</ol>
					</dd>
                                                                    <dt class="last odd">Sabores</dt>
                    <dd class="last odd">
					<ol>
					    <li>
					                <a href="#">Baunilha</a>
					                        (2)
					            </li>
					    <li>
					                <a href="#">Morango</a>
					                        (2)
					            </li>
					    <li>
					                <a href="#">Chocolate</a>
					                        (2)
					            </li>
					</ol>
					</dd>
                                            </dl>
          
                </div>
				
		     
			  <div class="tags">
				    	<h4 class="tag_head">Bolos Populares</h4>
				         <ul class="tags_links">
							<li><a href="#">FlowerAura</a></li>
							<li><a href="#">My Flower Tree</a></li>
							<li><a href="#">Butterscotch</a></li>
							<li><a href="#">Strawberry</a></li>
							<li><a href="#">Vennela</a></li>
							<li><a href="#">Blueberry</a></li>
							<li><a href="#">Chocolate</a></li>
							<li><a href="#">Pineapple</a></li>
							
						</ul>
						<a href="#" class="link1">Ver todos</a>
				 </div>
		   </div>		   
				<div class="clearfix"></div>	
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


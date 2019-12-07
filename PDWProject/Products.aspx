<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Products.aspx.cs" Inherits="PDWProject.Products1" %>

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
						<li><a href="myaccount.html">My Account</a></li>
						<li><a href="checkout.html">Checkout</a></li>
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
						<li><a href="Account/Login">Logout</a></li>
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
					<li><a href="Account/Index">Home</a></li>
					<li class="active"><a href="Products.aspx">products</a></li>
					<li><a href="about.html">about</a></li>
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

<asp:PlaceHolder ID ="PlaceHolder1" runat="server"></asp:PlaceHolder>
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

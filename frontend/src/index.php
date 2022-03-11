<?php
require "config/constants.php";
session_start();
//if(isset($_SESSION["uid"])){
	//header("location:profile.php");
//}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> eStore</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="font.css">
		<style></style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"><img src="product_images/logo1.png" width="80px"></a> 
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Advertisement</a></li>
				<li><a href="http://localhost/Project1/frontend/src/checkout/index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
				<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
				
			</ul>
			<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in <?php echo CURRENCY; ?></div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				
		
							
							
							
							
							

					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>














					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-1" >
				
			</div>


		</div>


	</div>

<div>
	<center>
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-end">
            <li class="page-item">
              <a class="page-link" href="index.html" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="index.php">1</a></li>
            <li class="page-item"><a class="page-link" href="checkout/index.php">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">4</a></li>
			<li class="page-item"><a class="page-link" href="#">5</a></li>
			<li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
</center>
</div>










	<footer class="footer section text-center">
<div class="container">
<div class="row">
    <div class="col-md-12">
        <ul class="social-media">
            <li>
                <a href="https://www.facebook.com/themefisher">
                    <i class="tf-ion-social-facebook"></i>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/themefisher">
                    <i class="tf-ion-social-instagram"></i>
                </a>
            </li>
            <li>
                <a href="https://www.twitter.com/themefisher">
                    <i class="tf-ion-social-twitter"></i>
                </a>
            </li>
            <li>
                <a href="https://www.pinterest.com/themefisher/">
                    <i class="tf-ion-social-pinterest"></i>
                </a>
            </li>
        </ul>
        <ul class="footer-menu text-uppercase">
            <li>
                <a href="contact.html">CONTACT</a>
            </li>
            <li>
                <a href="shop.html">SHOP</a>
            </li>
            <li>
                <a href="pricing.html">Pricing</a>
            </li>
            <li>
                <a href="contact.html">PRIVACY POLICY</a>
            </li>
        </ul>
        <p class="copyright-text">Copyright &copy;2021, Developed by Morsed Emon</p>
    </div>
</div>
</div>
</footer>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/622b4b98a34c2456412a9667/1ftshujsf';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->



</body>
</html>

















































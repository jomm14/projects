<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-with, initial-scale=1.0">
	<title>web</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <script type="text/javascript" src="js/script.js"></script> -->
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="navbar">
				<div class="logo"> 
					<img src="assets/images/logo.png" width="125px">
				</div>
				<nav>
					<ul id="MenuItems">
						<li> <a href="">Home</a> </li>
						<li> <a href="">Products</a> </li>
						<li> <a href="">About</a> </li>
						<li> <a href="">Contact</a> </li>
						<li> <a href="">Account</a> </li>
					</ul>
				</nav>
				<img src="assets/images/cart.png" width="30px" height="30px">
				<img src="assets/images/menu.png" class="menu-icon" onclick="menutoggle()">
			</div>
			<div class="row">
				<div class="col-2">
					<h1>It's all <br>Mikey's fault</h1>
					<p>
						 if you wanna win, you got no choice but to kill me,<br> and I am not gonna lose.
					</p>
					<a href="" class="btn">Explore Now &#8594;</a>
				</div>
				<div class="col-2">
					<img src="assets/images/logo1.png">
				</div>
			</div>
		</div>
	</div>

<!-------------------- featured categories -------------------->
	<div class="categories">
		<div class="small-container"> 
			<div class="row">
				<div class="col-3">
					<img src="assets/images/1.jpg" height="350px">
				</div>
				<div class="col-3">
					<img src="assets/images/2.jpg" height="350px">
				</div>
				<div class="col-3">
					<img src="assets/images/3.jpg" height="350px">
				</div>
			</div>
		</div>
	</div>
	
<!------------------- featured Products ------------------>
	<div class="small-container">
		<h2 class="title">Featured Products</h2>
		<div class="col-4">
			<img src="assets/images/product.jpg">
			<h4>Draken Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>20.00</p>
		</div>
		<div class="col-4">
			<img src="assets/images/product2.jpg">
			<h4>Bracelet</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>5.00</p>
		</div>
		<div class="col-4">
			<img src="assets/images/product3.jpg">
			<h4>Toman Official Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
			<p>30.00</p>
		</div>
		<div class="col-4">
			<img src="assets/images/product4.jpg">
			<h4>Earings</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>10.00</p>
		</div>

		<h2 class="title">Latest Products</h2>
		<div class="col-4">
			<img src="assets/images/product5.jpg">
			<h4>Mikey collectible item</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
			<p>60.00</p>
		</div>
		<div class="col-4">
			<img src="assets/images/product6.jpg">
			<h4>takamichi</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>50.00</p>
		</div>
		<div class="col-4">
			<img src="assets/images/product7.jpg">
			<h4>Tokyo manji mask</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>30.00</p>
		</div>
		<div class="col-4">
			<img src="assets/images/product8.jpg">
			<h4>Mikey's boots</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>15.00</p>
		</div>
		<div class="col-4">
			<img src="assets/images/product9.jpg">
			<h4>tokyo manji uniform</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
			<p>100.00</p>
		</div>
		<div class="col-4">
			<img src="assets/images/product10.jpg">
			<h4>valhalla uniform</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>40.00</p>
		</div>
		<div class="col-4">
			<img src="assets/images/product11.jpg">
			<h4>draken boots</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>45.00</p>
		</div>
		<div class="col-4">
			<img src="assets/images/product12.jpg">
			<h4>valhalla mask</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>10.00</p>
		</div>
	</div>


<!------------------- offer ----------------------->

	<div class="offer">
		<div class="small-container">
			<div class="row">
				<div class="col-2">
					<img src="assets/images/prods.jpg" class="offerimg">
				</div>
				<div class="col-2">
					<p>Exclusively Available on tokyo manji gang</p>
					<h1>Toman Shirt</h1>
					<small >
						We've found that images with less than 20% text perform better. With this in mind, we recommend keeping your text short, clear and concise in order to get your message across effectively.<br>
					</small>
					<a href="" class="btn">Buy Now &#8594;</a>
				</div>

			</div>
			
		</div>
	</div>

<!------------------ testimonial ---------------------->

	<div class="testimonial">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>
						An industry is a group of manufacturers or businesses that produce a particular kind of goods or services.
					</p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<img src="assets/images/user.png">
					<h3>Dugh</h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>
						An industry is a group of manufacturers or businesses that produce a particular kind of goods or services.
					</p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<img src="assets/images/user2.png">
					<h3>Hmmm..</h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>
						An industry is a group of manufacturers or businesses that produce a particular kind of goods or services.
					</p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<img src="assets/images/user3.png">
					<h3>Uwu..</h3>
				</div>
			</div>
		</div>				
	</div>




<!-----------------   Brands   ---------------->
	<div class="brands">
		<div class="small-container">
			<div class="row">
				<div class="col-5">
					<img src="assets/images/brand.png">
				</div>
				<div class="col-5">
					<img src="assets/images/brand2.png">
				</div>
				<div class="col-5">
					<img src="assets/images/brand3.png">
				</div>
				<div class="col-5">
					<img src="assets/images/brand4.png">
				</div>
				<div class="col-5">
					<img src="assets/images/brand5.png">
				</div>
			</div>
		</div>
	</div>

<!---------------------    footer     --------------------->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footercol-1">
					<h3>Download Our App</h3>
					<p>Download App for Android and ios mobile phone.</p>
				<div class="app-logo">
					<img src="assets/images/playstore.png">
					<img src="assets/images/appstore.png">
				</div>
				</div>
				<div class="footercol-2">
					<img src="assets/images/logo.png">
					<p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
				</div>
				<div class="footercol-3">
					<h3>Useful Links</h3>
					<ul>
						<li>Coupon</li>
						<li>Blog Post</li>
						<li>Return Policy</li>
						<li>Join Affiliate</li>
					</ul>
				</div>
				<div class="footercol-4">
					<h3>Follow us</h3>
					<ul>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Instagram</li>
						<li>Youtube</li>
					</ul>
				</div>

			</div>
			<hr>
			<p class="copyright">Copyright 2021 - easy tutorial</p>
		</div>
	</div>

	<script type="text/javascript">
		var MenuItems = document.getElementById("MenuItems");

		// var MenuItems = document.getElementById ( "MenuItems" ).style.maxHeight = "0px";
		MenuItems.style.maxHeight = "0px";

		function menutoggle(){

			if (MenuItems.style.maxHeight == "0px") {
				MenuItems.style.maxHeight = "200px";
			}
			else{
				MenuItems.style.maxHeight = "0px";
			}
		}
	</script>



</body>
</html>








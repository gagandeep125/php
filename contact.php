<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

</head>

<body>
<?php
include 'connection.php';
session_start();
?>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item">
						<div class="top_bar_icon"><img src="images/phone.png" alt=""></div>
						+91 9056471221 </div>
						<div class="top_bar_contact_item">
						<div class="top_bar_icon"><img src="images/mail.png" alt=""></div>
						<a href="mailto:gaganminhas1999@gmail.com">gagnminhas1999@gmail.com</a></div>
						<div class="top_bar_content ml-auto">
								<div class="top_bar_user">
								<div class="user_icon"><img src="images/user.svg" alt=""></div>
								<div><a href="register.php">Register</a></div>
								<div><a href="login.php">Sign in</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="index.php">Mobile Shop</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="search.php" method="post" class="header_search_form clearfix">
<input type="search" name="s"  class="header_search_input" placeholder="Search for products...">
<button type="submit" name="sub" class="header_search_button trans_300" value="Submit">
<img src="images/search.png" alt=""></button>
									</form>
				
				
				
				<div class="">
					<div class="">
					<span class="custom_dropdown_placeholder clc"></span>
					<i class=""></i>
					<ul class="custom_list clc">
				
						</ul>
						</div>
						</div>

								</div>
							</div>
						</div>
					</div>
					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="images/heart.png" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="#">Wishlist</a></div>
		<div class="wishlist_count"><?php if(isset($_SESSION['wishrow'])){ echo $_SESSION['wishrow'];}else {echo '0';}?></div>
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="images/cart.png" alt="">
										<div class="cart_count"><span><?php if($_SESSION['cartrow']!=0){ echo $_SESSION['cartrow'];}else {echo '0';}?></span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="cart.php">Cart</a></div>
										<div class="cart_price">&#x20B9 <?php if(isset($_SESSION['t'])){ echo $_SESSION['t'];}else {echo "0";}?></div>
									</div>
								</div>
							</div>
							<!--user-->
							 <div class="cart_content">
						   	<div class="cart_text">
							<a href="#">
							<?php 
							
							if(isset($_SESSION['id']))
							{
								echo $_SESSION['name'];
							}
							else
							{
								echo "";
							}
							?>
							</a>
							</div>
								<div class="cart_price"><a href="logout.php" style="color:#a3a3a3">
								<?php 
							if(isset($_SESSION['id']))
							{
								echo 'Sign Out';
							}
							else
							{
								echo "";
							}
							?>
							</a>
								</div>
							</div>
							
												
							<!--userend-->
						
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->
	<div class="cat_menu_container" >
				            <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">categories</div>
								</div>
								<ul class="cat_menu" >
								<?php
								$q=mysqli_query($conn,"select * from product_cat");
								while($row=mysqli_fetch_assoc($q))
								{?>
<li><a href="search.php?cat_name=<?php echo $row['cat_name']; ?>"><?php echo $row['cat_name'];?> <i class="fas fa-chevron-right ml-auto"></i></a></li>
								<?php } ?>
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="index.php">Home<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="shop.php">Products<i class="fas fa-chevron-down"></i></a></li>
									<li class="hassubs">
										<a href="#">Featured Brands<i class="fas fa-chevron-down"></i></a>
										<ul>
											<?php
									$q6=mysqli_query($conn,"select * from brand");
								while($row6=mysqli_fetch_assoc($q6))
								{ 
								  ?>
											<li>
											<a href="search.php?brand_name=<?php echo $row6['brand_name']; ?>">
											<?php echo $row6['brand_name'];?><i class="fas fa-chevron-down"></i></a></li>
								<?php } ?>
										</ul>
									</li>
																	
									<li><a href="contact.php">Contact<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
	</header>

	<!-- Contact Info -->

	<div class="contact_info">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="images/contact_1.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Phone</div>
								<div class="contact_info_text">+91 9056471221</div>
							</div>
						</div>

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="images/contact_2.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Email</div>
								<div class="contact_info_text">gaganminhas1999@gmail.com</div>
							</div>
						</div>

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="images/contact_3.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Address</div>
								<div class="contact_info_text">16 Rama Mandi, Jalandhar, Punjab </div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Form -->

	<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_form_container">
						<div class="contact_form_title">Get in Touch</div>

						<form method="post" action="ct.php" id="contact_form">
	<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
<input type="text" id="contact_form_name" class="contact_form_name input_field" name="name" placeholder="Your name" required="required" data-error="Name is required.">
<input type="email" id="contact_form_email" class="contact_form_email input_field" name="email" placeholder="Your email" required="required" data-error="Email is required.">
<input type="number" id="contact_form_phone" class="contact_form_phone input_field" name="phone"placeholder="Your phone number">
							</div>
							<div class="contact_form_text">
<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							</div>
							<div class="contact_form_button">
								<button type="submit" class="button contact_submit_button" name="s">Send Message</button>
							</div>
						</form>
	<?php
if(isset($_SESSION['ext']))
{
	if($_SESSION['result'])
	{
	echo"<script type='text/javascript'>alert('Submitted Sucessfully!')</script>";
}	
else{
	echo"<script type='text/javascript'>alert('Error456')</script>";
}
}
	?>
					</div>
				</div>
			</div>
		</div>
		<div class="panel"></div>
	</div>

	<!-- Map -->

<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
<div style='overflow:hidden;height:430px;width:1500px;'><div id='gmap_canvas' style='height:430px;width:1500px;'></div>
<div><small><a href="embedgooglemaps.com/">https://embedgooglemaps.com/</a></small></div><div><small>
<a href="https://mrpromocode.com.au/pursuing-sephora-online-promo-deals-gift-cards-and-more/">https://mrpromocode.com.au/pursuing-sephora-online-promo-deals-gift-cards-and-more/</a>
</small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
<script type='text/javascript'>function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(31.333593,75.62366999999995),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(31.333593,75.62366999999995)});infowindow = new google.maps.InfoWindow({content:'<strong>Mobile Shop</strong><br>GNDU RC ,Jalandhar,Punjab<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script></div>
		
<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix"><form  method="post" class="newsletter_form" >
	<input type="email" class="newsletter_input" name="email" required="required" placeholder="Enter your email address">
								<button class="newsletter_button" name="a">Subscribe</button>
							</form>
						<?php
						if(isset($_POST['a']))
						{
							$email=$_POST['email'];
							$q1="insert into subs(email)values ('$email')";
							$result=mysqli_query($conn,$q1);
							if($result!=0)
							{
								echo"<script type='text/javascript'>alert('Submitted Sucessfully!')</script>";
							}
							else
							{
								echo"<script type='text/javascript'>alert('Error123')</script>";
							}
						}
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="#">Mobile Shop</a></div>
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">+91 9056471221</div>
						<div class="footer_contact_text">
							<p>16 Rama Mandi</p>
							<p>Jalandhar, Punjab</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-google"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Find it Fast</div>
						<ul class="footer_list">
							<li><a href="#">Computers & Laptops</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Smartphones & Tablets</a></li>
						    <li><a href="#">Gadgets</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<ul class="footer_list footer_list_2">
							<li><a href="#">Video Games & Consoles</a></li>
							<li><a href="#">Accessories</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Customer Care</div>
						<ul class="footer_list">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order Tracking</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Returns / Exchange</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content">
						
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by Gagandeep Kaur

</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>
</body>

</html>
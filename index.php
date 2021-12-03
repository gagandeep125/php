<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

</head>
<body>
<?php 
include 'connection.php' ;
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
									<div class="wishlist_text"><a href="wish.php">Wishlist</a></div>
									<div class="wishlist_count">
									<?php if(isset($_SESSION['wishrow'])){ echo $_SESSION['wishrow'];}else {echo '0';}?></div>
								</div>
							</div>
							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="images/cart.png" alt="">
										<div class="cart_count"><span>
										<?php if($_SESSION['cartrow']!=0){ echo $_SESSION['cartrow'];}else {echo '0';}?></span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="cart.php">Cart</a></div>
										<div class="cart_price">&#x20B9 <?php if(isset($_SESSION['t'])){ echo $_SESSION['t'];}else {echo "0";}?>	</div>
									</div>
								</div>
							</div>
							<!--user-->
							 <div class="cart_content">
						   	<div class="cart_text">
							<a href="change_p.php">
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
	<!-- Banner -->
	<div class="banner">
		<div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"><img src="images/banner_product.png" alt=""></div>
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						<h1 class="banner_text">new era of smartphones</h1>
						<div class="banner_price"><span>&#x20B9 60,000</span>&#x20B9 40,000</div>
						<div class="banner_product_name">Apple Iphone 6s</div>
						<div class="button banner_button"><a href="#">Shop Now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Characteristics -->
	<div class="characteristics">
		<div class="container">
			<div class="row">
				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_1.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from &#x20B9 7000</div>
						</div>
					</div>
				</div>
				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_2.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Easy Exchange</div>
							<div class="char_subtitle">from &#x20B9 500</div>
						</div>
					</div>
				</div>
				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
				<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_3.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Online Payment</div>
							<div class="char_subtitle">available</div>
						</div>
					</div>
				</div>
				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">				
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_4.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Best Price</div>
							<div class="char_subtitle">on all products</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Deals of the week -->
	<div class="deals_featured">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
					<!-- Deals -->
					<div class="deals">
						<div class="deals_title">Deals of the Week</div>
						<div class="deals_slider_container">
							<!-- Deals Slider -->
							<div class="owl-carousel owl-theme deals_slider">
							<!-- Deals Item -->
								<?php
								$q2=mysqli_query($conn,"select * from deal_of_week");
								while($row2=mysqli_fetch_assoc($q2))
								{?>
								<div class="owl-item deals_item">
						<div class="deals_image"><img src="<?php echo $row2['d_img'];?>" alt=""></div>
						<div class="deals_content">
					<div class="deals_info_line d-flex flex-row justify-content-start">
<div class="deals_item_category"><a href="<?php echo $row2['d_link'];?>"><?php echo $row2['cat_name'];?></a></div>
		<div class="deals_item_price_a ml-auto">&#x20B9 <?php echo $row2['o_price'];?></div>
					</div>
				<div class="deals_info_line d-flex flex-row justify-content-start">
				<div class="deals_item_name"><?php echo $row2['d_name'];?></div>
				<div class="deals_item_price ml-auto">&#x20B9 <?php echo $row2['c_price'];?></div>
				</div>
				<div class="available">
				<div class="available_line d-flex flex-row justify-content-start">
				<div class="available_title">Available: <span><?php echo $row2['stock'];?></span></div>
				</div>
			</div>
		<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Hurry Up</div>
												<div class="deals_timer_subtitle">Offer ends in:</div>
											</div>
											<div class="deals_timer_content ml-auto">
				<div class="deals_timer_box clearfix" data-target-time="<?php echo $row2['t_time']; ?>">
													<div class="deals_timer_unit">
														<div id="deals_timer3_hr" class="deals_timer_hr"></div>
														<span>hours</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer3_min" class="deals_timer_min"></div>
														<span>mins</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer3_sec" class="deals_timer_sec"></div>
														<span>secs</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>
						</div>
						</div>
						<div class="deals_slider_nav_container">
				<div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
				<div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
						</div>
								
					</div>
					
					<!-- Featured -->
					<div class="featured">
						<div class="tabbed_container">
							<div class="tabs">
								<ul class="clearfix">
									<li class="active">Featured</li>
									<li>On Sale</li>
									</ul>
								<div class="tabs_line"><span></span></div>
							</div>
						<!-- Product Panel -->
							<div class="product_panel panel active">
								<div class="featured_slider slider">
									<!-- Slider Item -->
							<?php
							$q3=mysqli_query($conn,"select * from product where p_id<15");
							while($row3=mysqli_fetch_assoc($q3))
							{ 
							 ?>
							<div class="featured_slider_item">
							<div class="border_active"></div>
			   <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
					<div class="product_image d-flex flex-column align-items-center justify-content-center">
						<img src="<?php echo $row3['p_img'];?>" alt="" ></div>
										<div class="product_content">
								<div class="product_price">&#x20B9 <?php echo $row3['p_price'];?></div>
<div class="product_name"><div><a href="des.php?id=<?php echo $row3['p_id']; ?>">
								<?php echo $row3['p_name'];?></a></div></div>
								<form action="cart.php" method="post">
								<input type="hidden" name="pro_id" value="<?php echo $row3['p_id'];?>">
						<input type="hidden" name="pro_image" value="<?php echo $row3['p_img'];?>">
						<input type="hidden" name="pro_price" value="<?php echo $row3['p_price'];?>">
						<input type="hidden" name="pro_name" value="<?php echo $row3['p_name'];?>">
						<input  name="qty" type="hidden" value="1">
									
												<div class="product_extras">
													<button  type="submit" name="addcart" class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											</form>
											
											
												<form action="wish.php" method="post">
								<input type="hidden" name="pro_id" value="<?php echo $row3['p_id'];?>">
						<input type="hidden" name="pro_image" value="<?php echo $row3['p_img'];?>">
						<input type="hidden" name="pro_price" value="<?php echo $row3['p_price'];?>">
						<input type="hidden" name="pro_name" value="<?php echo $row3['p_name'];?>">
						<button type="submit" name="wish_on" class="ext"><div class="product_fav">
											<i class="fas fa-heart"></i></div></button></form>
														</div>
									</div>
											<?php } ?>

			</div>
		
			
								<div class="featured_slider_dots_cover"></div>
							</div>
							<!-- Product Panel -->
							<div class="product_panel panel">
								<div class="featured_slider slider">
								<!-- Slider Item -->
								<?php
							$q4=mysqli_query($conn,"select * from product where p_id>15");
							while($row4=mysqli_fetch_assoc($q4))
							{ 
							 ?>
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
							<div class="product_image d-flex flex-column align-items-center justify-content-center">
							<img src="<?php echo $row4['p_img'];?>" alt=""></div>
											<div class="product_content">
						<div class="product_price discount">&#x20B9 <?php echo $row4['p_price'];?></div>
<div class="product_name"><div><a href="des.php?id=<?php echo $row4['p_id']; ?>">
	 <?php echo $row4['p_name'];?> </a></div></div>
	 			<form action="cart.php" method="post">
								<input type="hidden" name="pro_id" value="<?php echo $row4['p_id'];?>">
						<input type="hidden" name="pro_image" value="<?php echo $row4['p_img'];?>">
						<input type="hidden" name="pro_price" value="<?php echo $row4['p_price'];?>">
						<input type="hidden" name="pro_name" value="<?php echo $row4['p_name'];?>">
						<input  name="qty" type="hidden"  value="1">
	 
												<div class="product_extras">
													<button type="submit" name="addcart" class="product_cart_button">Add to Cart</button>
												</div>
												</form>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
										
										</div>
									</div>
							<?php } ?>
							</div>
								<div class="featured_slider_dots_cover"></div>
							</div>
							
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Brands -->
	<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="brands_slider_container">
						<!-- Brands Slider -->
						<div class="owl-carousel owl-theme brands_slider">
						<?php
									$q5=mysqli_query($conn,"select * from brand");
								while($row5=mysqli_fetch_assoc($q5))
								{ 
								  ?>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center">
							<img src="<?php echo $row5['brand_img'];?>" alt=""></div></div>
							<?php } ?>	
						</div>
						
						<!-- Brands Slider Navigation -->
						<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Adverts -->
	<div class="adverts" >
		<div class="container">
			<div class="row">
				<div class="col-lg-4 advert_col">					
					<!-- Advert Item -->
					<div class="advert d-flex flex-row align-items-center justify-content-start">
						<div class="advert_content">
							<div class="advert_title"><a href="#">Trends 2018</a></div>
							<div class="advert_text">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</div>
						</div>
						<div class="ml-auto"><div class="advert_image"><img src="images/adv_1.png" alt=""></div></div>
					</div>
				</div>
				<div class="col-lg-4 advert_col">				
					<!-- Advert Item -->
					<div class="advert d-flex flex-row align-items-center justify-content-start">
						<div class="advert_content">
							<div class="advert_subtitle">Trends 2018</div>
							<div class="advert_title_2"><a href="#">Sale -45%</a></div>
							<div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
						</div>
						<div class="ml-auto"><div class="advert_image"><img src="images/adv_2.png" alt=""></div></div>
					</div>
				</div>
				<div class="col-lg-4 advert_col">					
					<!-- Advert Item -->
					<div class="advert d-flex flex-row align-items-center justify-content-start">
						<div class="advert_content">
							<div class="advert_title"><a href="#">Trends 2018</a></div>
							<div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
						</div>
						<div class="ml-auto"><div class="advert_image"><img src="images/adv_3.png" alt=""></div></div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
						<div class="newsletter_content clearfix">
							<form  method="post" class="newsletter_form">
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
			<div class="row" >
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
					
						
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Customer Care</div>
						<ul class="footer_list">
							
							<li><a href="#">Order Tracking</a></li>
						
							<li><a href="#">Customer Services</a></li>
							<li><a href="#">Returns / Exchange</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Product Support</a></li>
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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
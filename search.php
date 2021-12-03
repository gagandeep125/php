<?php 
session_start();
include('connection.php');

if(isset($_POST['sub']))
{
	$s=$_POST['s'];
	$q1="select * from product where p_name LIKE '%".$s."%' OR cat_name LIKE '%".$s."%'";
	$res=mysqli_query($conn,$q1);
}
else if(isset($_GET['cat_name']))
{
 $n=$_GET['cat_name'];
 $q1="select * from product where cat_name='$n'";
 $res=mysqli_query($conn,$q1);
 }
 else if(isset($_GET['brand_name']))
{
 $n=$_GET['brand_name'];
 $q1="select * from product where brand_name='$n'";
 $res=mysqli_query($conn,$q1);
 }
 
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Results</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/shop_styles.css">
<link rel="stylesheet" type="text/css" href="styles/shop_responsive.css">

</head>

<body>

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
								<div><a href="register.php">
								Register</a></div>
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


	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">Categories</div>
							<ul class="sidebar_categories">
							<?php
								$sd=mysqli_query($conn,"select * from product_cat");
								while($sd1=mysqli_fetch_assoc($sd))
								{?>
								<li><a href="search.php?cat_name=<?php echo $sd1['cat_name']; ?>"><?php echo $sd1['cat_name'];?></a></li>
							<?php } ?>
							</ul>
						</div>
						
						<div class="sidebar_section">
							<div class="sidebar_subtitle brands_subtitle">Brands</div>
							<ul class="sidebar_categories">
											<?php
									$q7=mysqli_query($conn,"select * from brand");
								while($row7=mysqli_fetch_assoc($q7))
								{ 
								  ?>
											<li>
											<a href="search.php?brand_name=<?php echo $row7['brand_name']; ?>">
											<?php echo $row7['brand_name'];?></a></li>
								<?php } ?>
										</ul>
						</div>
					</div>

				</div>

				<div class="col-lg-9">
					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count"><span><?php $count=mysqli_num_rows($res);
							echo $count;?></span> products found</div>
							<div class="shop_sorting">
								<span>Sort by:</span>
								<ul>
									<li>
										<span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
										<ul>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
											<li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="product_grid">
						<?php
						while($row1=mysqli_fetch_assoc($res))
						{
						?>
							<div class="product_grid_border"></div>


							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center">
								<img src="<?php echo $row1['p_img'];?>" alt=""></div>
								<div class="product_content">
									<div class="product_price"><?php echo $row1['p_price'];?></div>
									<div class="product_name"><div>
									<a href="des.php?id=<?php echo $row1['p_id'];?>" tabindex="0">
									<?php echo $row1['p_name'];?></a></div></div>
								</div>

								
								
							</div>
						<?php } ?>
						</div>

						<!-- Shop Page Navigation -->

					

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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/shop_custom.js"></script>
</body>

</html>
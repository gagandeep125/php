<?php
session_start();
include('connection.php');
include "item.php"; 
if(empty($_SESSION['name']))
	{
		echo '<script>alert("U Have to Login First");
			location.href="login.php";</script>';
	}

if(isset($_REQUEST['addcart']))
{
	
	$item = new Item();
	$item ->id=$_REQUEST['pro_id'];
	$item ->pro_name=$_REQUEST['pro_name'];
	$item ->pro_price=$_REQUEST['pro_price'];
	$item ->pro_image=$_REQUEST['pro_image'];
	$item ->qty=$_REQUEST['qty'];
	
	$_SESSION['cart'][] = $item;
	
	
}
//$cart = unserialize(serialize($_SESSION['cart']));

if(isset($_REQUEST['action']))
{
	$name =  $_REQUEST['name'];
	$cart = unserialize(serialize($_SESSION['cart']));
	for($i=0;$i<count($cart);$i++)
	{
		if ($name == $cart[$i]->pro_name)
		{ 
			//echo "<br>done";
			unset($_SESSION['cart'][$i]);
			//echo "k";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/cart_styles.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">

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
								<div><a href="register.html">
								Register</a></div>
								<div><a href="login.html">Sign in</a></div>
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
					<div style="margin-left:60px">
						<div class="logo_container">
							<div class="logo"><a href="index.php">Mobile Shop</a></div>
						</div>
					</div>



					<!-- Wishlist -->
					<div style="margin-left:460px" class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right" >
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
										<div class="cart_count"><span><?php if($_SESSION['cartrow']!=0){ echo $_SESSION['cartrow'];}else {echo '0';}?>  </span></div>
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
					<hr>
			</div>
		</div>
	
		
	</header>

	<!-- Cart -->

	<div  class="cart_section">
		<div class="container">
			<div  class="row">
				<div class="col-lg-10 offset-lg-1">
					<div  class="cart_container">
						<div class="cart_title">Shopping Cart</div>
						<div class="cart_items">
						<?php
						$total=0;
							$cart = unserialize(serialize($_SESSION['cart']));
							$i = 0;
							
							for($i=0;$i< count($cart);$i++)
							{ ?>
							<ul class="cart_list">
								<li class="cart_item clearfix">
									<div class="cart_item_image"><img src="<?php echo $cart[$i]->pro_image; ?>" alt=""></div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
									
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Name</div>
											<div class="cart_item_text"><?php echo $cart[$i]->pro_name; ?></div>
										</div>
										
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Quantity</div>
											<div class="cart_item_text"><?php echo $cart[$i]->qty; ?></div>
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Price</div>
											<div class="cart_item_text"><?php echo $cart[$i]->pro_price; ?></div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Total</div>
											<div class="cart_item_text"><?php echo $cart[$i]->pro_price * $cart[$i]->qty; ?></div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Delete</div>
											<div class="cart_item_text"><a href="cart.php?name=<?php echo $cart[$i]->pro_name; ?>&action=delete" onclick="confirm('Are U Sure ?')">Remove </a></div>
										</div>
									</div>
								</li>
							</ul>
							<?php
							$total = $total + $cart[$i]->pro_price * $cart[$i]->qty;
							}
							$_SESSION['cartrow']=$i;
						$_SESSION['t']=$total;
							?>
							</div>
						
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Order Total:</div>
								<div class="order_total_amount"><?php echo $total;?></div>
							</div>
						</div>

						<div class="cart_buttons">
							<button type="button" class="button cart_button_clear">Cancel</button>
							<button type="button" class="button cart_button_checkout">Buy Now</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
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
<script src="js/cart_custom.js"></script>
</body>

</html>
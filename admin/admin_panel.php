<html lang="en">
<head>
<title>Admin</title>
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
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body style="background-image:url('banner_background.jpg');width:100%;background-size:cover">
<?php 
include 'connection.php';
session_start();
?>
<div style="width:100%;height:60px;padding-top:9px;color:blue;font-size:30px">
<div style="margin-left:20px;float:left;"> <b>Admin Panel</b></div>
<div style="margin-left:1150px;"><b>Mobile Shop</b></div><hr>
</div>

<div class="main_nav_menu ml-auto" style="background-color:white;margin-top:0px">
								<ul class="standard_dropdown main_nav_dropdown" style="margin-left:10px">
									<li class="hassubs">
									<a href="#">Products<i class="fas fa-chevron-down"></i></a>
									<ul>
											<li><a href="view_p.php">View Products<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="add_p.php">Add Products<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="view_p.php">Manage Products<i class="fas fa-chevron-down"></i></a></li>
										</ul>
										</li>
										<li class="hassu+bs">
									<a href="#">Categories<i class="fas fa-chevron-down"></i></a>
									<ul>
											<li><a href="#">View Categories<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Add Categories<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Manage Categories<i class="fas fa-chevron-down"></i></a></li>
										</ul>
										</li>
										<li class="hassubs">
									<a href="#">Deal of Week<i class="fas fa-chevron-down"></i></a>
									<ul>
											<li><a href="#">View Categories<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Manage Categories<i class="fas fa-chevron-down"></i></a></li>
										</ul>
										</li>
										<li class="hassubs">
									<a href="#">Brand<i class="fas fa-chevron-down"></i></a>
									<ul>
											<li><a href="#">Add Brand<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Manage brand<i class="fas fa-chevron-down"></i></a></li>
										</ul>
										</li>
										<li class="hassubs">
									<a href="#">Users<i class="fas fa-chevron-down"></i></a>
									<ul>
											<li><a href="#">View Users<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Manage Users<i class="fas fa-chevron-down"></i></a></li>
										</ul>
										</li>
										<li style="margin-left:600px"><a href="logout.php">Log Out<i class="fas fa-chevron-down"></i></a></li>
								</ul>
				</div>			
		
</body>
</html>
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
<body style="background-image:url('banner_background.jpg');width:100%;background-size:cover;">
<?php 
include 'connection.php';
session_start();
?>
<div style="width:100%;height:60px;padding-top:9px;color:blue;font-size:30px">
<div style="margin-left:20px;float:left;"> <a style="color:blue" href="admin_panel.php"><b>Admin Panel</b></a></div>
<div style="margin-left:1150px;"><b>Mobile Shop</b></div><hr>
</div>
<h3 align="center" style="margin-top:35px;color:blue">Product List</h3>
		
			<table   width="100%" border="2px">
				<tr align="center">
					<td><br>Product ID<br><br></td>
					<td><br>Name of Product<br><br></td>
					<td><br>Category<br><br></td>
					<td><br>Brand<br><br></td>
				       <td><br>Price<br><br></td>
					<td><br>Stock<br><br></td>
				<td><br>Image of Product<br><br></td>
				<td><br>Action<br><br></td>
				</tr>
				<?php
								$q=mysqli_query($conn,"select * from product");
								while($row=mysqli_fetch_assoc($q))
								{?>
							<tr>
							<td><?php echo $row['p_id'];?></td>
							<td><?php echo $row['p_name'];?></td>
							<td><?php echo $row['cat_name'];?></td>
							<td><?php echo $row['brand_name'];?></td>
							<td><?php echo $row['p_price'];?></td>
							<td><?php echo $row['stock'];?></td>
							<td><?php echo $row['p_img'];?></td>
							<td>
							<a style="margin-left:5px"href="update_p.php?id=<?php echo $row['p_id']; ?>">Update</a>
							<a style="margin-left:5px"href="delete_p.php?id=<?php echo $row['p_id']; ?>">Delete</a>
								</td>
								<?php
						 } ?>

					</tr>
			</table>
	
	</body>
</html>
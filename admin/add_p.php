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
<div style="margin-left:20px;float:left;"> <a style="color:blue" href="admin_panel.php"> <b>Admin Panel</b></a></div>
<div style="margin-left:1150px;"><b>Mobile Shop</b></div><hr>
</div>


 <div class="super_container">
    	<div class="contact_form" style="padding-top:30px">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">


	<div class="contact_form_container">
						<div class="contact_form_title" style="color:blue">Add New Product</div>
						<form method="post" action="" id="contact_form" >
						<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
<input type="text" id="contact_form_name"  class="contact_form_name input_field" name="" placeholder="Product Name" required="required" data-error="Name is required.">
					 </div>
					 <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">

					<select>
<option value="">punjab</option>

					 </select>
					 </div>
					 <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
<input type="number" id="contact_form_phone"  class="contact_form_phone input_field" name="" placeholder="Price" required="required" data-error="Field is required.">
					 </div>				
					 <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
<input type="number" id="contact_form_phone"  class="contact_form_phone input_field" name="" placeholder="Stock" required="required" data-error="Field is required.">
					 </div>
					<div class="contact_form_button">
					<input type="file"  name="" /><br />
								<button type="submit" class="button contact_submit_button"  name="s" >Submit</button>
							</div>
						</form>
			
					</div>
					</div>
			</div>
		</div>
		</div>
		</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sign In</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

</head>


<body style="background-image:url('images/shop_background.jpg');
	background-size:cover;padding-bottom:300px;color:blue" >
<?php
include 'connection.php';
session_start();
?>
 <div class="super_container">
    
	<div class="contact_form" style="padding-top:30px">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
				<div class="contact_form_title"><b>Mobile Shop</b>
				<a href="index.html"style="margin-left:300px"><b>Home</b> </a>
				<hr></div> 
					<div class="contact_form_container">
						<div class="contact_form_title">User Sign In</div>

						<form method="post" action="et.php" id="contact_form" >
							
							<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
<input type="email" id="contact_form_email"  class="contact_form_email input_field" name="email" placeholder="Your email" required="required" data-error="Email is required.">
						    </div>
                       
							<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">							
<input type="password" id="contact_form_phone"  class="contact_form_phone input_field" name="pword" placeholder="Your password." required="required" data-error="Password is required.">
						     </div>
						<div style="font-size:20px">
						<a href="fgt.php">Forget Password?</a></div>
						
							<div class="contact_form_button">
		<button type="submit" class="button contact_submit_button"  name="s" >Sign In</button>
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
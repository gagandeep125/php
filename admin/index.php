<?php
session_start();
include 'connection.php';
 
 if(isset($_POST['s']))
 {
                            $name=$_POST["username"];
							$pword=$_POST["pword"];
							$q="select * from admin";
								$result=mysqli_query($conn,$q);	
								$row=mysqli_fetch_assoc($result);
								$n=$row['a_uname'];
								$p=$row['a_password'];
                           if(($name==$n) && ($pword==$p) )
							{
								header('location:admin_panel.php');
							}
							else
							{
								echo"<script>alert('wrong ')</script> ";
								echo"<script>location.href='index.php'</script> ";
							}
 }
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body style="background-image:url('banner_background.jpg');background-size:cover;padding-bottom:300px;color:blue">

 <div class="super_container">
    	<div class="contact_form" style="padding-top:30px">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
				<div class="contact_form_title"><b>Mobile Shop</b>
				<hr></div> 
					<div class="contact_form_container">
						<div class="contact_form_title">Admin Login</div>

						<form method="post" id="contact_form" >
							
<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
<input type="text" id="contact_form_email"  class="contact_form_email input_field" name="username"
 placeholder="Username" required="required" data-error="Username is required.">
						    </div>
                       
<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">							
<input type="password" id="contact_form_phone"  class="contact_form_phone input_field" name="pword" placeholder="Your password." required="required" data-error="Password is required.">
						     </div>
						
							<div class="contact_form_button">
		<button type="submit" class="button contact_submit_button"  name="s" >Login</button>
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
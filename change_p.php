<!DOCTYPE html>
<html lang="en">
<head>
<title>Change Password</title>
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
						<div class="contact_form_title">Change Password</div>

						<form method="post"  id="contact_form" >
						                     
							<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">							
<input type="password" id="contact_form_phone"  class="contact_form_phone input_field" name="o_pword" placeholder="Old password." required="required" data-error="Password is required.">
						     </div>
							 
							 
							 	<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">							
<input type="password" id="contact_form_phone"  class="contact_form_phone input_field" name="n_pword" placeholder="New password." required="required" data-error="Password is required.">
						     </div>
						
							<div class="contact_form_button">
		<button type="submit" class="button contact_submit_button"  name="s" >Change Password</button>
							</div>
						</form>
						<?php
						if(isset($_POST['s']))
						{
							$o_pword=$_POST['o_pword'];
							$n_pword=$_POST['n_pword'];
							$u_id=$_SESSION['id'];
							$q="update user set password='$n_pword' where password='$o_pword' and  id='$u_id'";
							$result=mysqli_query($conn,$q);
							if($result==0)
							{
		echo"<script type='text/javascript'>alert('Password not updated');</script>";
							}
							else
							{
									echo"<script type='text/javascript'>
								alert('Password Updated');
								</script>";								
								
							}
						}
						?>
		
		
						
					</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		
</body>
</html>
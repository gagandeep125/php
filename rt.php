<?php
include 'connection.php';
session_start();

								$name=$_POST['name'];
								$email=$_POST['email'];
								$phone=$_POST['phone'];
								$password=$_POST['pword'];
								$q="insert into user(name,email,phone,password)values
								('$name','$email','$phone','$password')";	
							$result=mysqli_query($conn,$q);
							
							if($result!=0)
							{
		echo"<script type='text/javascript'>
								var r=confirm('reg done');
								if(r==true)	
								{
location.href='index.php';
								}
								
</script>";
							}
							else
							{
									echo"<script type='text/javascript'>
								var r=confirm('error in reg');
								if(r==true)	
								{
location.href='index.php';
								}
</script>";								
								
							}

?>
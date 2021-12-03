<?php
include 'connection.php';
session_start();
                            $email=$_POST["email"];
							$pword=$_POST["pword"];
							$q="select id,name from user where email='$email' and password='$pword'";
							$result=mysqli_query($conn,$q);	
							$row=mysqli_num_rows($result);
							if($row==0)
							{
								echo"<script type='text/javascript'>
								var r=confirm('wrong password or email');
								if(r==true)	
								{
location.href='login.php';
								}
								else
								{
								location.href='login.php';	
								}
</script>";
							}
							else
							{
						$n=mysqli_fetch_assoc($result);
			     		$_SESSION['id']=$n['id'];
				$_SESSION['name']=$n['name'];
								header ('Location:index.php');
							}

							
?>
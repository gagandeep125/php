<?php 
include 'connection.php';
session_start();
                            $name=$_POST["name"];
                            $email=$_POST["email"];
                            $phone=$_POST["phone"];
							$tex=$_POST["message"];
							$q="insert into contact(name,email,phone,tex)values
							('$name','$email','$phone','$tex')";
							$result=mysqli_query($conn,$q);
							$_SESSION['ext']=1;
							$_SESSION['result']=$result;
							
							header ('Location:contact.php');

?>

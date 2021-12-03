<?php
session_start();
include('connection.php');
$id=$_GET['id'];
$sel=mysqli_query($conn,"Delete from product where p_id='$id'");
if($sel!=0)
{
	
								echo"<script>alert('Row deleted')</script> ";
								echo"<script>location.href='view_p.php'</script> ";
}
else
{
	
								echo"<script>alert('error in deletion ')</script> ";
								echo"<script>location.href='view_p.php'</script> ";
}
?>
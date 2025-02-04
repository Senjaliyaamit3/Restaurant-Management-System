<?php
$id=$_GET['id'];

$con=mysqli_connect('localhost','root','','front');
if($con)
{
		$delete="delete from front_tbl where Id=$id";
		if(mysqli_query($con,$delete))
		{
			header('location:managestudent.php');
		}
}
?>
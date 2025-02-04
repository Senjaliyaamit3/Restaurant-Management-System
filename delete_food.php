<?php
$id=$_GET['k'];

$con=mysqli_connect('localhost','root','','front');
if($con)
{
		$delete="delete from front_tbl where Id=$id";
		if(mysqli_query($con,$delete))
		{
			echo "<script>alert('Item Deleted Successfully');</script>";
			header("location:Front_admin.php");
		}
		else
		{
			echo "<script>alert('Item Not Deleted');</script>";
		}
}
?>
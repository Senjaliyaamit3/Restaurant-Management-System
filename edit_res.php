<?php
$i=$_GET['a'];

$con=mysqli_connect('localhost','root','','front');
if($con)
{
		$select="select * from front_tbl where Id=$i";
		$res=mysqli_query($con,$select);
		$record=mysqli_num_rows($res);
		if($record > 0)
		{
			while($row=mysqli_fetch_assoc($res))
			{
?>
<html>
	<head>
	</head>
	<body style='background-color:#08414E;color:white'>
		<form method="POST">
			<table border="2">
			<tr>
					<td colspan="3" align="center">
					Edit  Details form
					</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					Id :
				</td>
				<td colspan="1" align="center">
					<input type="text" value="<?php echo $row['Id']?>">
				</td>
			</tr>
			<tr>
					<td colspan="2" align="center">
						Name of item : 
					</td>
					<td colspan="1" align="center">
						<input type="text" name="txtName" value="<?php echo $row['Name']?>"/>
					</td>
			</tr>
			<tr>
				<td>Image : </td>
					<td>
						<img name="imge" src="<?php echo "Images/".$row['Image']?>" width="190px" height="150px">
					</td>
					<td>
						<input type="file" value="<?php echo "Images/".$reco['Image']?>" name="img">
					</td>
			</tr>
			<tr>
					<td colspan="2" align="center">
						Price : 
					</td>
					<td colspan="1" align="center">
						<input type="text" name="txtpri" value="<?php echo $row['Price']?>"/>
					</td>
			</tr>
			<tr>
					<td colspan="3" align="center">
						<input type="submit" name="Update" value="Update"/>
					</td>
			</tr>
			</table>
		</form>
	</body>
</html>

<?php

}
}
}
if(isset($_POST['Update']))
{
	$name=$_POST['txtName'];
	$Img=$_POST['img'];
	$pric=$_POST['txtpri'];
	$update="update front_tbl SET Image='$Img',Name='$name',Price='$pric' where Id=$i";
	if(mysqli_query($con,$update))
	{
		echo "<script>alert('Update Successfully');</script>";
	}
	else
	{
		echo "<script>alert('Update Failed');</script>";
	}
	// if(mysqli_query($con,$update))
	// {
	// 	header('location:managestudent.php');
	// }
	
}
?>
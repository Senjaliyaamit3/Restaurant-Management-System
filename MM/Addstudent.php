<html>
	<head>
	</head>
	<body>
		<form method="POST">
			<table border="2">
				<tr>
					<td colspan="2" align="center">
						Student Details form
					</td>
				</tr>
				<tr>
					<td>
						Name:
					</td>
					<td>
						<input type="text" name="txtName"/>
					</td>
				</tr>
				<tr>
					<td>
						Class:
					</td>
					<td>
						<input type="text" name="txtClass"/>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="submit"/>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
if(isset($_POST['submit']))
{
$con=mysqli_connect('localhost','root','','imca');
if($con)
{
	$name=$_POST['txtName'];
	$class=$_POST['txtClass'];
	$q="insert into tbl_student(Name,Class)values('$name','$class')";
	$result=mysqli_query($con,$q);
	if($result==1)
	{
		header('location:Managestudent.php');
	}
	else
	{
			echo "<script>alert('Data not inserted')</script>";
	}
}
else
{
	echo "connection not success";
}
}
?>
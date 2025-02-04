<?php
$id1=$_GET['i1'];

$con=mysqli_connect('localhost','root','','front');
if($con)
{
		$select="select * from front_tbl where Id=$id1";
		$res=mysqli_query($con,$select);
		$record=mysqli_num_rows($res);
		if($record > 0)
		{
            session_start();
			while($row=mysqli_fetch_assoc($res))
			{
                $co=mysqli_connect('localhost','root','','front');
if($co)
{        
    if (isset($_SESSION['uname'])) 
    {
        $username = htmlspecialchars($_SESSION['uname']);
    
?>
<html>
	<head>
	</head>
	<body>
		<form method="POST">
			<table border="2" width="450px">
			<tr>
                <td colspan="7" align="center">
                    Bill
					</td>
			</tr>
			<tr><td>Name of food</td>
                	<td colspan="7" align="center">
						<h3><?php  echo $row['Name']?></h3>
					</td>
                </tr>
                <tr>
                    <td>Product</td>
                    <td colspan="7" align="center">
                        <img name="imge" src="<?php echo "Images/".$row['Image']?>" width="190px" height="150px">
					</td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td colspan="3" align="center">
                        <h3><?php echo $row['Price']?></h3>
					</td>
            </tr>
            <tr>
                <td>Name Of Customer</td>
                <td><input type="text" name="Cn" value="<?php echo $username?>"></td>
            </tr>
            <tr>
                <td>
                    Mobile No:
                </td>
                <td>
                    <input type="text" name="Mn">
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <input type="text" name="ema">
                </td>
            </tr>
            <tr>
                    <td>
                        <label>Quantity</label>
                    </td>
                    <td>
                        <input type="Number" max="50" name="Q"><br><br>
            </td>
			</tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gen" value="Male">Male
                    <input type="radio" name="gen" value="Female">Female</td>
            </tr>
			<tr>
                    <td colspan="3" align="center">
						<input type="submit" name="Add" value="Order now"/>
					</td>
			</tr>
			</table>
		</form>
	</body>
</html>

<?php
}
    else 
    {
       header("location:login.php");
    }
}


$c=mysqli_connect('localhost','root','','registration');
if($c)
{
    
    if(isset($_POST['Add']))
    {
        $Quan=$_POST['Q'];
        $cname=$_POST['Cn'];
        $mob=$_POST['Mn'];
        $email=$_POST['ema'];
        $gender=$_POST['gen'];
        $n=$row['Name'];
        $im=$row['Image'];
        $Pr=$row['Price'];
        $tot=$Pr*$Quan;
    $q="insert into bill(Name,Product,Quantity,Price,Total,Name_C,Mobile,Email,Gender)values('$n','$im',$Quan,$Pr,$tot,'$cname',$mob,'$email','$gender')"; 
    $a=mysqli_query($c,$q);
        if($a)
        {
         echo "<script>alert('Successfully Add')</script>";
         header('location:User.php');
        }
        else
        {
          echo "<script>alert('Error')</script>";
        }
    }
}
}
}
}
?>
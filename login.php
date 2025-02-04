<html>
	<head>
		<link rel="stylesheet" href="login.css" >
	</head>
	<body>
	<div class="wrapper">
    <form action="#" method="POST">
      <h2>Login</h2>
        <div class="input-field">
        <input type="text" name="uname" required>
        <label>Enter your Username</label>
      </div>
      <div class="input-field">
        <input type="password" name="pass" required>
        <label>Enter your password</label>
      </div>
      <button type="submit" name="Login">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="registrationn.php">Register</a></p>
      </div>
    </form>
  </div>
	</body>
	</html>
	<?php

$con=mysqli_connect('localhost','root','','registration');
if($con)
{
	if(isset($_POST['Login']))
	{
		session_start();
		$u=$_POST['uname'];
		$p=$_POST['pass'];
			$_SESSION['uname']=$u;
			if($u != '' && $p != '')
			{
				$select="select * from registration where Username='$u' AND Password='$p'";
				$rec=mysqli_query($con,$select);
				$ans=mysqli_num_rows($rec);
				if($ans > 0)
				{						
					// echo "<script>alert('Successfully');</script>";
					header("location:User.php");
				}
				else
				{
					echo "<script>alert('Please fill the Registration from');</script>";
				}
				if($u)
				{
					echo "<script>alert('Please fill username or password');</script>";
				}
			}
			$ad="select * from Admin where Username='$u' AND Password='$p'";
			$r=mysqli_query($con,$ad);
			$a=mysqli_num_rows($r);
			if($a > 0)
			{
				header("location:Front_admin.php");
			}
		}
	}
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glassmorphism Login Form | CodingNepal</title>
  <link rel="stylesheet" href="registrationn.css">
</head>
<body>
  <div class="wrapper">
    <form action="#" method="POST">
      <h2>Registeration</h2>
        <div class="input-field">
        <input type="text" name="uname" required>
        <label>Enter your Username</label>
      </div>
      <div class="input-field">
        <input type="text" name="email" required>
        <label>Enter your Email</label>
      </div>
      <div class="input-field">
        <input type="password" name="pass" required>
        <label>Enter your password</label>
      </div>
      <div class="input-field">
        <input type="password" name="cpass" required>
        <label>Enter your conform password</label>
      </div>
      <button type="submit" name="submit">Registeration</button>
      <div class="login">
        <p>Already have an account ? <a href="login.php">Login</a></p>
      </div>
    </form>
  </div>
</body>
</html>
<?php
  $con=mysqli_connect('localhost','root','','registration');
  if($con)
  {
    if(isset($_POST['submit']))
    {
      $name=$_POST['uname'];
      $eml=$_POST['email'];
      $pas=$_POST['pass'];
      $cpas=$_POST['cpass'];
      if($cpas != $pas)
    {
      echo "<script>
      alert('Please Enter Conform Password same as Password')
      </script>";
    }
    else
    {	

        $insert="insert into registration(Username,Email,Password,Conform_Password)values('$name','$eml','$pas','$cpas')";
        $rec=mysqli_query($con,$insert);
        if($name != '' && $eml != '' && $pas != '' && $cpas != '')
        {
          if($rec == 1)
          {
          echo "<script>alert('Now your Registration sucssesfully')</script>";
          }
          else	
          {
            echo "<script>alert('data not inserted')</script>";
          }
        }
      }
    }
}
?>
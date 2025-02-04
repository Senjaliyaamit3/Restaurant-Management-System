<?php
$Ro=mysqli_connect('localhost','root','','registration');
$i=$_GET['o'];
if($Ro)
{
session_start();
    $q="select * from bill where Id=$i";
    $r=mysqli_query($Ro,$q);
    $a=mysqli_num_rows($r);
    if (isset($_SESSION['uname'])) 
    {
        $username = htmlspecialchars($_SESSION['uname']);
        // echo "<script>alert('Welcome to $username')</script>";
        // echo "<body><marquee behavior=alternate><h3>Welcome to $username</h3></marquee></body>";
    }
    while($row=mysqli_fetch_assoc($r))
    {
        
        $C_Name=$row['Name_C'];
        $Food=$row['Name'];
        $Product=$row['Product'];
        $Pr=$row['Price'];
        $Q=$row['Quantity'];
    }
        $q1="insert into delivery(Id,Name,Quantity,Name_C,Price,Img)values
        ($i,'$Food',$Q,'$C_Name',$Pr,'$Product')";
        $r1=mysqli_query($Ro,$q1);
        // $a1=mysqli_num_rows($r3);
        if($r1 == 1)
        {
            $q2="Delete from bill where Id=$i";
            $r2=mysqli_query($Ro,$q2);
            header("location:order.php");
        }           
        else
        {
            echo "<script>alert('not insert')</script>";
        }
    }
?>
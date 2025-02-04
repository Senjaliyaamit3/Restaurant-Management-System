<?php
$i=$_GET['b'];
$con=mysqli_connect('localhost','root','','registration');
if($con)
{
    $u = "UPDATE `bill` SET `Accept`='Cancelled' where `Id`='$i'";
    $e=mysqli_query($con,$u);
    if($e)
    {
        echo "<script>alert('Order Cancelled By Admin');</script>";
        echo "<a href='Front_Admin.php'><button>Back to Front Page</button></a>";
    }
    else
    {
        echo "<script>alert('Something went to wrong');</script>";
    }
}
?>
<?php
    $v=$_GET['d'];
    $con=mysqli_connect('localhost','root','','registration');
    if($con)
    {
        $u = "UPDATE `bill` SET `Accept`='Confirm' where `Id`='$v'";
        $e=mysqli_query($con,$u);
        if($e)
        {
            echo "<script>alert('Order Confirm By Admin');</script>";
            echo "<a href='Front_Admin.php'><button>Back to Front Page</button></a>";
        }
        else
        {
            echo "<script>alert('Something went to wrong');</script>";
        }
    }
?>
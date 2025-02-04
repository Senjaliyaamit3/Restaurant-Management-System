<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="front_admin.css">
    </head>
    <body style="background-color:lightgray;">
    <div class="dashboard" style="float:left;background-color:#08414E">
        <ul>
            <li><a>Home</a></li>
            <li><a href="Add_food.php">Add Food</a></li>
            <li><a href="Edit_Food.php">Edit Food</a></li>
            <li><a href="Delete_Food1.php">Delete Food</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="Confirm_Ad.php">Order Selection</a></li>
        </ul>
    </div>
    <div style="float:left">
        <?php
$c=mysqli_connect('localhost','root','','registration');
if($c)
{
    $q="select * from registration";
    $r=mysqli_query($c,$q);
    $a=mysqli_num_rows($r);
    $count=0;
    while($row=mysqli_fetch_assoc($r))
    {
        $count+=+1;
    }
    $q1="select * from bill";
    $r1=mysqli_query($c,$q1);
    $a1=mysqli_num_rows($r1);
    $count1=0;
    while($row1=mysqli_fetch_assoc($r1))
    {
        $count1+=+1;
    }
    $con1=mysqli_connect('localhost','root','','front');
    if($con1)
    {
        $u="select * from front_tbl";
        $o=mysqli_query($con1,$u);
        $a=mysqli_num_rows($o);
        $c=0;
        while($ro=mysqli_fetch_assoc($o))
        {
            $c+=1;
        }
    }
    $umang=mysqli_connect('localhost','root','','registration');
    if($umang)
    {
        $qs="select * from delivery";
        $rs=mysqli_query($umang,$qs);
        $as=mysqli_num_rows($rs);
        $cs=0;
        while($row=mysqli_fetch_assoc($rs))
        {
            $cs=$cs+1;
        }
        
        echo "<div style='padding-left:100px'>";
        echo "<div style='margin:50px;background-color:white;border-radius:15px;float:left;margin-left:100px' >";
        echo "<a href='View_data.php' style='text-decoration:none'><fieldset style='width:300px;height:250px;align:center;border:none'>";
        echo "<center>";
        echo "<br><br><br><br><br>";
        echo "<h1 style='color:#08414E'>".$count."<br>Users</h1>";
    echo "</center>";
    echo "</fieldset></a>";
    echo "</div>";
    echo "<div style='float:right;background-color:white;border-radius:15px;margin-top:50px'>";
    echo "<a href='total_order.php' style='text-decoration:none'><fieldset style='width:300px;height:250px;align:center;border:none'>";
    echo "<center>";
    echo "<br><br><br><br><br>";
    echo "<h1 style='color:#08414E'>$count1<br>Orders</h1>";
    echo "</center>";
    echo "</fieldset></a>";
    echo "</div>";
    echo "<br>";
    echo "<div style='float:right;background-color:white;border-radius:15px;margin-top:40px'>";
    echo "<a href='Total_Food.php' style='text-decoration:none'><fieldset style='width:300px;height:250px;align:center;border:none'>";
    echo "<center>";
    echo "<br><br><br><br><br>";
    echo "<h1 style='color:#08414E'>$c<br>Foods<h1>";
    echo "</center>";
    echo "</fieldset></a>";
    echo "</div>";
    echo "<div style='background-color:white;border-radius:15px;float:left;margin-top:-10px;margin-left:100px' >";
    echo "<a href='view_delivery.php' style='text-decoration:none'><fieldset style='width:300px;height:250px;align:center;border:none'>";
    echo "<center>";
    echo "<br><br><br><br><br>";
    echo "<h1 style='color:#08414E'>$cs<br>Delivery</h1>";
    echo "</center>";
    echo "</fieldset></a>";
    echo "</div>";
    echo "</div>";
    }
}
?>
</div>
</body>
</html>
<?php
echo "<body style='background-color:lightgray'>";
    $a=mysqli_connect('localhost','root','','registration');

    if($a)
    {
        $q="select * from bill";
        $r=mysqli_query($a,$q);
        $c=mysqli_num_rows($r);
        while($rec=mysqli_fetch_assoc($r))
        {
            
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET">
<?php

echo "<table border='2' width='500px'>";
    echo "<tr><td width='400px'><h4>".$rec['Quantity']." ".$rec['Name']." Order by ".$rec['Name_C']."</h4></td>"; 
    $i=$rec['Id'];
    echo "<td style='background-color:Green;width:80px;align:center'><a href='Confirm_Order.php?d=$i' style='text-decoration:none;color:white'>Confirm</a></td>";
    echo "<td style='background-color:Red;width:80px;align:center'><a href='Cancel_Or.php?b=$i' style='text-decoration:none;color:white''>Cancel</a></td>";
    echo "</table>";
}
}


?>
</form>
</body>
</html>
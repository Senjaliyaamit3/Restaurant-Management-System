<?php
echo "<body style='background-color:#08414E'>";
echo "<div style='padding-left:30px'>";
    $co=mysqli_connect('localhost','root','','front');
    if($co)
    {
        $q="select * from front_tbl";
        $r=mysqli_query($co,$q);
        $a=mysqli_num_rows($r);
        echo "<table style='color:white;font-family:Courier, monospace;'border='2'><tr><td align='center'>Id</td>
        <td align='center'>Image</td>
        <td align='center'>Name</td>
        <td align='center'>Price</td>
        <td align='center' width='75px'>Delete</td>
        </tr>";
        while($reco=mysqli_fetch_assoc($r))
        {
            echo "<tr>";
                echo "<td width='50px'align='center'>".$reco['Id']."</td>";
                $u=$reco['Id'];
                echo "<td>";
                ?>
                <img src="<?php echo "Images/".$reco['Image']?>" width="190px" height="150px">
                <?php echo "</td>";
                echo "<td width='50px' align='center'>".$reco['Name']."</td>";
                echo "<td width='50px' align='center'>".$reco['Price']."</td>";
                echo "<td width='50px' align='center'><a href='delete_food.php?k=$u' style='color:white;text-decoration:none'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    echo "</div>";
?>
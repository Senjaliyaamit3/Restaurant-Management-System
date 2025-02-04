<?php
    $co=mysqli_connect('localhost','root','','front');
    echo "<body style='background-color:#08414E'>";
    echo "<div style='padding-left:10px'>";
    if($co)
    {
        $q="select * from front_tbl";
        $r=mysqli_query($co,$q);
        $a=mysqli_num_rows($r);
        echo "<table border='2'width='550px' style='color:white'>";
        echo "<tr>";
        echo "<td align=center style='width:150px'>Name</td>";
        echo "<td align=center>Image</td>";
        echo "<td align=center style='width:150px'>Price</td>";
        echo "</tr>";
        while($reco=mysqli_fetch_assoc($r))
        {
            echo "<tr>";
                echo "<td width='50px' align='center'>".$reco['Name']."</td>";
                echo "<td style='padding-left:20px'>";?>
                    <img src="<?php echo 'Images/'.$reco['Image']?>" width="190px" height="150px">
                    <?php echo "</td>";
               //     echo "<td width='50px' align='center'>".$reco['Quantity']."</td>";
                    echo "<td width='50px' align='center'>".$reco['Price']."</td>";
                //    echo "<td width='50px' align='center'>".$reco['Total']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    echo "</div>";
    echo "</body>";
?>
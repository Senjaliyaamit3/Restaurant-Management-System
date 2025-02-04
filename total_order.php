<?php
    $co=mysqli_connect('localhost','root','','registration');
    echo "<body style='background-color:#08414E;font-family:Courier, monospace'>";
    if($co)
    {
        $q="select * from bill";
        $r=mysqli_query($co,$q);
        $a=mysqli_num_rows($r);
        echo "<table border='2' style='color:white'>";
        echo "<tr>";
        echo "<td align=center>Username</td>";
        echo "<td align=center>Email</td>";
        echo "<td align=center>Name</td>";
        echo "<td align=center>Image</td>";
        echo "<td align=center>Quantity</td>";
        echo "<td align=center>Price</td>";
        echo "<td align=center>Total</td>";
        echo "</tr>";
        while($reco=mysqli_fetch_assoc($r))
        {
            echo "<tr>";
            echo "<td width='50px' align='center'>".$reco['Name_C']."</td>";
           // echo "<td width='50px' align='center'>".$reco['Mobile']."</td>";
            echo "<td width='50px' align='center'>".$reco['Email']."</td>";
               // echo "<td width='50px' align='center'>".$reco['Gender']."</td>";
                echo "<td width='50px' align='center'>".$reco['Name']."</td>";
                echo "<td>";?>
                    <img src="<?php echo 'Images/'.$reco['Product']?>" width="190px" height="150px">
                    <?php echo "</td>";
                    echo "<td width='50px' align='center'>".$reco['Quantity']."</td>";
                    echo "<td width='50px' align='center'>".$reco['Price']."</td>";
                    echo "<td width='50px' align='center'>".$reco['Total']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    echo "</body>";
?>
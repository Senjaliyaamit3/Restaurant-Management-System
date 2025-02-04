<?php
echo "<body style='background-color:#08413E'>";
    $con1=mysqli_connect('localhost','root','','registration');

    if($con1)
    {
        $qq="select * from delivery";
        $rr=mysqli_query($con1,$qq);
        $aa=mysqli_num_rows($rr);
        if($aa > 0)
        {
            echo"<table style='color:white'border='2'>
            <tr><td colspan='5' align='center'>Orders Information</td></tr>
            <tr><td align='center'>Image</td><td align='center'>Name</td><td colspan='1' align='center'>Quantity</td><td align='center'>Name_C</td><td align='center'>ConformPrice</td></tr>";
                while($row=mysqli_fetch_assoc($rr))
                {
                    echo "<tr>";
                    echo "<td>";?>
                    <img src="<?php echo 'Images/'.$row['Img']?>" width="190px" height="150px">
                    <?php echo "</td>";
                    echo "<td align='center'>".$row['Name']."</td>";
                    echo "<td align='center'>".$row['Quantity']."</td>";
                    echo "<td align='center'>".$row['Name_C']."</td>";
                    echo "<td align='center'>".$row['Price']."</td>";
                    
                    echo "</tr>";
                }          
            echo "</table>";
        }
    }
  
?>
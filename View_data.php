<?php
    $con=mysqli_connect('localhost','root','','registration');
    echo "<body style='background-color:#08414E;'>";
    if($con)
    {
        $q="select * from registration";
        $r=mysqli_query($con,$q);
        $a=mysqli_num_rows($r);
        if($a > 0)
        {
            echo"<table border='2' style='color:white;font-size:20px;height:400px;width:850px'>
            <tr><td colspan='4' align='center'>Userdata Information</td></tr>
            <tr><td align='center'>Username</td><td colspan='1' align='center'>Email</td><td align='center'>Password</td><td align='center'>Conform Password</td></tr>";
                while($row=mysqli_fetch_assoc($r))
                {
                    echo "<tr>";
                    echo "<td>".$row['Username']."</td>";
                    echo "<td>".$row['Email']."</td>";
                    echo "<td>".$row['Password']."</td>";
                    echo "<td>".$row['Conform_Password']."</td>";
                    echo "</tr>";
                }          
            echo "</table>";
        }
    }
    echo "</body>";
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
    </body>
</html>
<?php
    $con=mysqli_connect("localhost","root","","registration");
    if($con)
    {
        $q="select * from registration";
        $rec=mysqli_query($con,$q);
        $ans=mysqli_num_rows($rec);
        if($ans > 0)
        {
            echo "<table border='2'><tr><td align='center'>Username </td><td align='center'>Email</td>
            <td align='center'>Password </td><td>Edit</td></tr>";
            while($row=mysqli_fetch_assoc($rec))
            {
              echo "<tr>
                    <td>".$row['Username']."</td>
                    <td>".$row['Email']."</td>
                    <td>".$row['Password']."</td>
                    </tr>";
            }
            echo "</table>";
        }
        else
        {
            echo $ans." record founded";
        }
    }
?>
<?php
    $co=mysqli_connect('localhost','root','','registration');
    //$m=mysqli_connect('localhost','root','','registration');
    if($co)
    {
        $q="select * from bill";
        $r=mysqli_query($co,$q);
        $a=mysqli_num_rows($r);
        echo "<table border='2'><tr><td align='center'>Customer_Name</td>
        <td align='center'>Mobileno</td>
        <td align='center'>Email</td>
        <td align='center'>Gender</td>
        <td align='center'>Food_Name</td>
        <td align='center'>Product</td>
        <td align='center'>Quantity</td>
        <td align='center'>Price</td>
        <td align='center'>Total_amount</td>
        <td width='250px' align='center'>Order Accepted Or Not</td>
        <td colspan='2'>Order Received</td>
        </tr>";
        session_start();
        while($reco=mysqli_fetch_assoc($r))
        {
            $co=mysqli_connect('localhost','root','','front');
            if($co)
            {        
                if (isset($_SESSION['uname'])) 
                {
                  $username = htmlspecialchars($_SESSION['uname']);
                  $Id=$reco['Id'];
                  $name=$reco['Name_C'];
                  if($username == $name)
                  {
                        echo "<tr>";
                        echo "<td width='50px' align='center'>".$reco['Name_C']."</td>";
                        echo "<td width='50px' align='center'>".$reco['Mobile']."</td>";
                        echo "<td width='50px' align='center'>".$reco['Email']."</td>";
                        echo "<td width='50px' align='center'>".$reco['Gender']."</td>";
                        echo "<td width='50px' align='center'>".$reco['Name']."</td>";
                        echo "<td>";?>
                        <img src="<?php echo 'Images/'.$reco['Product']?>" width="190px" height="150px">
                        <?php echo "</td>";  
                        echo "<td width='50px' align='center'>".$reco['Quantity']."</td>";
                        echo "<td width='50px' align='center'>".$reco['Price']."</td>";
                        echo "<td width='50px' align='center'>".$reco['Total']."</td>";
                        
                    if($reco['Accept'] == 'Confirm')
                    {
                        echo "<td style='color:green'><h3>&nbsp;&nbsp;&nbsp;&nbsp;Your Order Accepted Successfully...&nbsp;&nbsp;&nbsp;&nbsp;</h3></td>";
                        echo "<td><a href='Delivery.php?o=$Id'><input type='submit' name='yes' value='YES'></a></td>
                        <td><input type='submit' name='no' value='NO'></td>";
                        if(isset($_POST['no']))
                        {
                            echo "<script>alert('Your Order not accepted')</script>";    
                        }
                    }
                    else
                    {
                        if($reco['Accept'] == '')
                        {
                            echo "<td style='color:red'><h3>&nbsp;&nbsp;&nbsp;&nbsp;Your Order in Process...&nbsp;&nbsp;&nbsp;&nbsp;</h3></td>";
                        }
                        else
                        {
                            echo "<td style='color:red'><h3>&nbsp;&nbsp;&nbsp;&nbsp;Your Order Not Acceted...&nbsp;&nbsp;&nbsp;&nbsp;</h3></td>";
                        }
                    }
              }
          }
          else{
            echo "<script>alert('Please login to continue')</script>";
          }
                }
                
                echo "</tr>";
            }
            echo "</table>";
        }
?>
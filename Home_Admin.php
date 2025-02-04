<?php
$c=mysqli_connect('localhost','root','','registration');
if($c)
{
    $q="select * from registration";
    $r=mysqli_query($c,$q);
    $a=mysqli_num_rows($r);
    while($row=mysqli_fetch_assoc($r))
    {
    }
}
?>
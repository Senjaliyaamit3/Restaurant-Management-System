<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#08414E">
    <form method="POST" enctype="multipart/form-data">
        <div style='padding-top:11%;font-family:Courier, monospace;'>
    <table border='0' align='center' style='background-color:gray;color:white;height:270px;width:500px;border-radius:10px;'>
    <tr align='center'>
            <td colspan='2'style='font-size:25px;'><b>Add Food Item</b></td>
    </tr>
    <tr>
        
        <td>Item Name:</td>
        <td><input type="text" placeholder="Name" name="Name"required></td>
    </tr>
    <tr>
        <td>Price</td>
        <td><input type="text" placeholder="Price" name="Price"required></td>
    </tr>
    <tr>
        <td>Choose food image:  </td>
        <td><input type="file" name="fl" value="<?php echo "img/".$reco['Image']?>"></td>
    </tr>
    <tr>
        <td colspan='2'align='center'><input type="submit" name="Add" value="Add" style="width:100px;height:30px;"></td>
    </tr>
</table>
</div>
</form>
</body>
</html>
<?php

$con=mysqli_connect('localhost','root','','front');


if($con)
{
    if(isset($_POST['Add']))
    {
    
    $n=$_POST['Name'];
    $p=$_POST['Price'];
    
    $image=$_FILES['fl']['name'];
    $tmp=explode(".",$image);
    
    $newf=round(microtime(true)).'.'.end($tmp);
    
    $upload="Images/".$newf;
    
    move_uploaded_file($_FILES['fl']['tmp_name'],$upload);
    
    
      $q="insert into front_tbl(Image,Name,Price)values('$newf','$n','$p')";
     $rec=mysqli_query($con,$q);
     if($rec)
     {
             echo "<script>alert('Data insert successfully');</script>";
     }
     else
     {
            echo "<script>alert('Data not insert');</script>";
     }
    }
}
?>
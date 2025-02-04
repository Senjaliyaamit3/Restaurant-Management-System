<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link rel="stylesheet" href="User.css">
    </head>
    <body>
        <div class="n">
            <nav>
                <div class="logo">
                    Hotel Royal
                </div>
<!-- <div class="sea">
    <input type="txt" placeholder="Search" class="search">
 </div> -->

<input type="checkbox" id="click">
<label for="click" class="menu-btn">
    <i class="fas fa-bars"></i>
</label>
<ul>
<li name="Home"><a href="#">Home</a></li>
<li><a href="about.html">About</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="order.php">Cart</a></li>
    </ul>      
</nav>
</div>       
<div style="padding-top:50px;font-size:20px;color:green;"> 
<?php
$co=mysqli_connect('localhost','root','','front');
if($co)
{        
    session_start();
    if (isset($_SESSION['uname'])) 
    {
        $username = htmlspecialchars($_SESSION['uname']);
        // echo "<script>alert('Welcome to $username')</script>";
        echo "<body><marquee behavior=alternate><h3>Welcome to $username</h3></marquee></body>";
    }
    else 
    {
        echo "<script>alert('Please login to continue')</script>";
    }
?>
</div>
<div>
<fieldset class="fie">
<div class="contain" style="font-size:17px">
<div class="par">Royal Food Restaurant</div><br> Doloremque itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam 
quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
Doloremque itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam 
quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
Doloremque itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam 
quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
</div>
<div>
<img src="Fron.jpg" class="cen_img">
</div>
</fieldset>
</div>
</div>
<div class="products">
<div class="box-container">
<?php
$q="select * from front_tbl";
$r=mysqli_query($co,$q);
$a=mysqli_num_rows($r);
while($reco=mysqli_fetch_assoc($r))
                {
                    $id=$reco['Id'];
                    ?>
                <div class="box">
                    <form method="POST">
                    <fieldset class="f1">
                        <img src="<?php echo "Images/".$reco['Image']?>"width="100px" class="im1">
                        <div class="name"><?php echo "<b>".$reco['Name']."</b>"?></div> 
                        <div class="price"><?php echo "<b>₹ ".$reco['Price']."</b>"?>
                        <button style="margin-left:43%;width:70px;height: 30px;background-color:green;color:white;border: none;border-radius: 3px;">
                            
                        <?php echo "<div name='ad1'><a href='Bill.php?i1=$id'  style='text-decoration:none;color:White';>Add cart</a></div></button>";
                        ?>
                        </div>
                    </fieldset>
                </form>
            </div>
                <?php
            };
        };
        ?>
        </div>
    </div>
    <div class="footer">
        <div class="icon">
            <h1 class="fh" style="color:gainsboro">Hotel Royal</h1>
            <ul class="fo-ul" style="color:gainsboro">
                <i class='fab fa-youtube' style='font-size:36px'></i>
                <i class='fab fa-snapchat' style='font-size:36px'></i>
                <i class='fab fa-facebook-square' style='font-size:36px'></i>
                <i class="fab fa-twitter-square" style="font-size:36px"></i>
            </ul>
        </div>
        <div>
            <ul class="support">
                <li style="color:gainsboro">Support</li><br>
                <li>Contact As</li>
                <li>FAQ</li>
                <li>Downloads</li>
                <li>Locate A Dealer</li>
                <li>Product Registration</li>
                <li>Spare Parts</li>
            </ul>
</div>    
<div>
    <ul class="support">
        <li style="color:gainsboro">Furrion</li><br>
        <li>About Furrion</li>
        <li>Furrion Design</li>
        <li>Careers</li>
        <li>Newsroom</li>
        <li>Furrion Access</li>
    </ul>
</div>
<div class="signup">
    <a href="login.php"><input type="submit" name="signup" value="signup" class="inp"></a>
</div>
<div>
    <ul>
        <li><img src="png-transparent-android-google-play-app-store-google-play-text-computer-logo-thumbnail.png" class="ply"></li>
        <li><img src="png-transparent-itunes-app-store-apple-logo-apple-text-rectangle-logo.png" class="ply"></li>
    </ul>
</div>
</div>
</body>
</html>
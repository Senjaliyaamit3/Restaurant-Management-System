<html>
<head>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="front_page.css">
<link rel="stylesheet" href="style.css">
<!-- <link rel="stylesheet" href="style.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
        <nav>
        <div class="logo">
           Hotel Royal
        </div>
        <div class="sea">
            <input type="txt" placeholder="Search" class="search">
        </div>
        
            <input type="checkbox" id="click">
             <label for="click" class="menu-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="#">Feedback</a></li>
            </ul>      
    </nav>
 	 	<div class="container">
	    	<div class="box">
	    		<img src="p.jpg" class="size">
	    	</div>
	    	<div class="box">
	    		<img src="p1.jpg" class="size">
	    	</div>
	       	<div class="box">
	    		<img src="p2.jpg" class="size">
	    	</div>
	    	<div class="box">
	    		<img src="p3.jpg" class="size">
    		</div>	
    		<div class="box">
    			<img src="p4.jpg" class="size">
    		</div> 
    	</div>
        
        <div>
            <fieldset class="fie">
                <div class="contain">
                    <div class="par">Royal Food Restaurant</div> Doloremque itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam 
                    quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                </div>
                <div>
                    <img src="Fron.jpg" class="cen_img">
                </div>
            </fieldset>
        </div>

<div class="products">
<div class="box-container">
<?php

        $co=mysqli_connect('localhost','root','','front');
        if($co)
        {
            $q="select * from front_tbl";
            $r=mysqli_query($co,$q);
            $a=mysqli_num_rows($r);
           while($reco=mysqli_fetch_assoc($r))
          {
    ?>
            <div class="box">                
            <fieldset class="f1">
                <img src="<?php echo "Images/".$reco['Image'] ?>" width='280px' height='200px' name="first" class="im1">
                <h3><?php echo "<b>".$reco['Name']."</b>"?></h3><br>
                <span class="fa fa-star checked"></span>&nbsp;&nbsp;4.7&nbsp;&nbsp;30 - 35 Min<br><br>
                <div class="price"><?php echo "₹ ".$reco['Price']?></div>
                <a href="pr.php"><button style="margin-left:43%;width:70px;height: 30px;background-color:green;color:white;border: none;border-radius: 3px;">Buy now</button></a>
            </fieldset>    
        </div>
    <?php
            }
        }
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
            <li><img src="png-transparent-android-google-play-app-store-google-play-text-computer-logo-thumbnail.png"width="200px" class="ply"></li>
            <li><img src="png-transparent-itunes-app-store-apple-logo-apple-text-rectangle-logo.png" width="200px" class="ply"></li>
        </ul>
    </div>
</div>
</body>
</html>
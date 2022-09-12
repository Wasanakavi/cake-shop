<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "cake");  
 if(isset($_POST["add_to_cart"]))  
 {  
		$a = $_SESSION["user"]["CustomerName"];
		$b = $_SESSION["user"]["Address"];
		$c = $_POST["hidden_code"];
		$d = 1;
		$e = $_SESSION["user"]["Telephone"];
		$f = $_SESSION["user"]["Email"];
		$g = $_POST["hidden_image"];
		$h = $_POST["hidden_price"];
		$i = $_POST["hidden_name"];
        $j=date("Y-m-d");
				
		$sqlq="INSERT INTO order_information(CustomerName,Address,date,type,Code,Amount,Telephone,Email,image,colour,idea,cakeImage,price,itemName,status,making_status,accept) VALUES ('$a','$b','$j','NONE', '$c','$d', '$e', '$f','$g','NONE','NONE', '$g', '$h', '$i', 'Pending','Pending','Pending')";
		$result = mysqli_query ($connect,$sqlq);
		if(!$result){
			echo "not inserted";
		}else{
				
		}					  
 } 
 ?>  

<html>  
      <head>  
              
		   <style>
            background-color:#A7BEBA;
            background-image:url("cup cake 4.png");


 </style>
 
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
		   <link rel="stylesheet" type="text/css" href="cake cart 1.css">
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		   

 
      </head>  
      <body style="background-image:url('cup cake 1.jpg');">
	  
<div id="topbar">
<div id="topnav">
	<a href="cake.html">Home</a>
	<a href="about.html">About Us</a>
	<a href="Product and Services.html">Products And Services</a>
	<a id="active" href="cakecart.php">Order Menu</a>
	<a href="add cart.php">Cart</a>
	<a href="own desing cake1.php">Own Design</a>
    <div class="cart_div">
<a style="float:right:" href="new.php"><img src="status 4.jpg" style="width:26px; height:26px; "/>  ORDER STATUS </a></input>
</div>
  </div>
</div>

           <br />  
           <div class="container" style="width:1000px;">  
                 
                <?php  
                $query = "SELECT * FROM cakecart ORDER BY code ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-3">  
                       
                          <div style="border:1px solid #333;  border-radius:5px; padding:16px; align:center; overflow:hidden;height:445px; width:200px; ">  
                               <form method="post" action="cakecart.php?action=add&id=<?php echo $row["code"]; ?>">
							   <img style="max-height:200px;" src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">LKR <?php echo $row["price"]; ?></h4>  
                                 
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
							   <input type="hidden" name="hidden_image" value="<?php echo $row["image"]; ?>" />
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
							   <input type="hidden" name="hidden_code" value="<?php echo $row["code"]; ?>" /> 				   
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
							   
	    						</form>							   
							   <form action="paynow.php" method="post">
									<input type="hidden" name="hidden_code" value="<?php echo $row["code"]; ?>" /> 
									<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
									<input type="hidden" name="hidden_image" value="<?php echo $row["image"]; ?>" />
									<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
									<input type="submit" name="buynow"  class="btn btn-success" value="Buy Now" /> 
							   </form>
                          </div>  
						  <br>
                      
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />    
                
           </div>  
           <br /> 
		   
<footer >
        <div class="footer">
            <div class="row">
                <div class="col1">
                    <ul >
                        <li>INFO</li><br>
                        <li><a href="about.html">About Us</a></li>
                       
                        <li><a href="https://translate.google.lk/">Sinhala & Tamil Translator</a></li>
                         
                    </ul>
                </div>
                <div class="col2">
                    <ul class="socialmedia">
                        <li>CONTACT US</li><br>
                        <li class="fb"><a  href="https://www.facebook.com/Jays-Art-103578618093586/" target="_blank">Facebook</a></li>
                        
                        <li class="in"><a href="https://instagram.com/jayani.senarathna.98?igshid=nur5j2cghh1l" target="_blank">Instagram</a></li>
                        
                    </ul>
                </div>
                <div class="col3">
                    <ul class="officeinfo" >
                        <li>GALLE HEAD OFFICE</li><br>
                        <li>No 374, Samagi Road, Piyadigama,</li>
                        <li>Galle.</li>
                        <li class="ofi1"><strong>Email:</strong> jaysartcake@gmail.com</li>
                        <li class="ofi2"><strong>Hotline:</strong> +94 76 684 7435</li>
                        <li class="ofi3"><strong>Landline:</strong> +94 91 393 0888</li>
                    </ul>
                </div>
                
                <div class="col4" >
                    <ul>
                        <li>Payments</li><br>
                        <li><img class="cards" src="creditcard.jfif" alt="Accepted Credit Cards" height="100px" width="200px"></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </footer>
	</body>
	</html>
	
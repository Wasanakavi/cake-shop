<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "cake");  
 $user = $_SESSION["user"]["CustomerName"];
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
			$order_id = $_GET["id"];
			$deleteQuery = "DELETE FROM order_information WHERE id = '$order_id'";  
			if(!mysqli_query($connect, $deleteQuery)){
				echo 'Delete item fail '.$order_id;
			}else{
				echo '<script>alert("Item Removed")</script>';  
				echo '<script>window.location="add cart.php"</script>';  
			}
      }  
 }  
 ?>  

<html>  
      <head>  
              
		   <style>






 </style>
 
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
		   <link rel="stylesheet" type="text/css" href="addCart 1.css">
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		   

 
      </head>  
      <body style="background-image:url('cup cake 1.jpg');"> 
<div id="topbar">
<div id="topnav">
	<a href="cake.html">Home</a>
	<a href="about.html">About Us</a>
	<a href="Product and Services.html">Products And Services</a>
	<a href="cakecart.php">Order Menu</a>
	<a id="active" href="add cart.php">Cart</a>
    <div class="cart_div">
<a style="float:right:" href="new.php"><img src="status 4.jpg" style="width:26px; height:26px; "/>  ORDER STATUS </a></input>
</div>
  </div>
</div>

           <br />  
           <div class="container" style="width:1000px;">  
                 

                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr> <th width="15%"></th>
                               <th width="15%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="15%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php  
							$query = "SELECT * FROM order_information Where CustomerName = '$user' ORDER BY id ASC";  
							$result = mysqli_query($connect, $query);  
							$total  = 0;
							if(mysqli_num_rows($result) > 0)  
							{  
								 while($row = mysqli_fetch_array($result))  
								 {  
							?>  
                          <tr> <td><img style=" max-width: 149px;" src="<?php echo $row["cakeImage"]; ?>" class="img-responsive" /></td>
                               <td><?php echo $row["itemName"]; ?></td>  
                               <td><?php echo $row["Amount"]; ?></td>  
                               <td>LKR <?php echo $row["price"]; ?></td>  
                               <td>LKR <?php echo number_format($row["Amount"] * $row["price"], 2); ?></td>
							   <td><a href="customize.php?action=update&id=<?php echo $row["id"]; ?>"><span class="text-danger">Customize</span></a></td>							   
                               <td><a href="add cart.php?action=delete&id=<?php echo $row["id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($row["Amount"] * $row["price"]);  
                               } 
                          ?>  
						  
                          <tr> <td></td>
                               <td colspan="3" align="right">Total</td>  
                               <td align="left"> <?php echo 'LKR '.number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
					  </div>  
           </div>  
           <br /> 
		   
<form action="payment.php?amount=<?php echo $total; ?>" method="post">
<form>

 <input style="background-color:#85d2d0;" type="submit"  value="Pay Now >>>" name="payment" id="payment">
 <br>
 <br>

</form>
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
	
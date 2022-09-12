<html>

    <head>
          <title> Table with Speacial orders</title>
		  <link rel="stylesheet" type="text/css" href="speacial orders.css">
		  
		  
         
		  
    </head>
	<body>
	
	<div id="topbar">
    <div id="topnav">

  <a id="active" href="speacial orders.php">Speacial Orders</a>
  <a href="cake.html">Home</a>
  <a href="login.php">Log In</a>
  <a href="Product and Services.html">Product And Services</a>
  <a href="about.html">About Us</a>
  <a href="cakecart.php">Cart</a>
  <a href="available orders.php">Availabel Orders</a>

  <form color="red" align="right"action="logout.php" method="post"><input type="submit" id="logout" name="logout" value="LOGOUT" onclick="logout()"></form>
  </div>
</div>
<h1 align = "center"> Speacial Orders </h1>

<section> <div class="sideMenu"><div class="frmdiv">
         
		  
    </head>
	<body>
<center>
	    <form action=""method ="POST" enctype="multipart/form-data">
		    <table width="15%" border ="1" cellpadding="2">
			   <thead>
			   <tr>
			     <th> Cake Type</th>
				 <th> Name</th>
				 <th> Email</th>
				 <th> Phone Number</th>
			     <th> Image</th>
				 <th> Amount</th>
				 <th> Date</th>
				 <th> Colour</th>
				 <th> Idea</th>
				 
			     
				 
				 </tr>
				 </thead>
				 <?php
				 $connection = mysqli_connect("localhost","root","");
				 $db = mysqli_select_db($connection,'cake');
				 
				 $query ="SELECT * FROM `special_orders`";
				 $query_run = mysqli_query($connection,$query);
				 
				 while($row = mysqli_fetch_array($query_run)) 
				 {
					 ?>
					 <tr>
					     <td> <?php echo $row['caketype'];  ?></td>
						 <td> <?php echo $row['name'];  ?></td>
						 <td> <?php echo $row['email'];  ?></td>
						 <td> <?php echo $row['phonenumber'];  ?></td>
						 <td> <?php echo'<img src = "data: image;base64,'.base64_encode($row['image']).'" alt="Image" style="width:100px; height:=100px;" >';?> </td>
						 <td> <?php echo $row['amount'];  ?></td>
						 <td> <?php echo $row['date'];  ?></td>
						 <td> <?php echo $row['colour'];  ?></td>
						 <td> <?php echo $row['idea'];  ?></td>
						
						 
					 </tr>
					 <?php
				 }
				 ?>
				 </table>
				 </form>
				 
	
	</center>
	</body>
	</html>
	</section>
	
	
	<footer >
        <div class="footer">
            <div class="row">
                <div class="col1">
                    <ul type="none">
                        <li>INFO</li><br>
                        <li><a href="about.html">About Us</a></li>
                       
                        <li><a href="https://translate.google.lk/">Sinhala & Tamil Translator</a></li>
                         
                    </ul>
                </div>
                <div class="col2">
                    <ul class="socialmedia" type="none">
                        <li>CONTACT US</li><br>
                        <li class="fb"><a  href="https://www.facebook.com/Jays-Art-103578618093586/" target="_blank">Facebook</a></li>
                        
                        <li class="in"><a href="https://instagram.com/jayani.senarathna.98?igshid=nur5j2cghh1l" target="_blank">Instagram</a></li>
                        
                    </ul>
                </div>
                <div class="col3">
                    <ul class="officeinfo" type="none">
                        <li>GALLE HEAD OFFICE</li><br>
                        <li>No 374, Samagi Road, Piyadigama,</li>
                        <li>Galle.</li>
                        <li class="ofi1"><strong>Email:</strong> jaysartcake@gmail.com</li>
                        <li class="ofi2"><strong>Hotline:</strong> +94 76 684 7435</li>
                        <li class="ofi3"><strong>Landline:</strong> +94 91 393 0888</li>
                    </ul>
                </div>
                
                <div class="col4" >
                    <ul type="none">
                        <li>Payments</li><br>
                        <li><img class="cards" src="creditcard.jfif" alt="Accepted Credit Cards" height="100px" width="200px"></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </footer>
	
	

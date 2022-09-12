<?php
include("session.php"); 
$connect = mysqli_connect("localhost", "root", "", "cake");  
$user = $_SESSION["user"]["CustomerName"];?>
<html>
     <head>
     <link rel="stylesheet" type="text/css" href="cake cart 1.css">
         <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
   
<div id="topbar">
<div id="topnav">
	<a href="cake.html">Home</a>
	<a href="about.html">About Us</a>
	<a href="Product and Services.html">Products And Services</a>
	<a  href="cakecart.php">Order Menu</a>
	<a href="add cart.php">Cart</a>
	<a href="own desing cake1.php">Own Design</a>
    <div class="cart_div">
<a id="active" style="float:right:" href="new.php"><img src="status 4.jpg" style="width:26px; height:26px; "/>  ORDER STATUS </a></input>
</div>
  </div>
</div>
<br>

<h3 style="float:left; color:red;"  >AVAILABLE ORDER STAUTUS DETAILS </h3>
<br>
<br>

<table cellspacing="20px" align="center" cellspacing="20px" class="table table-success table-striped"><th class="table-active" style="color:blue;">CODE</th>

<th class="table-primary" style="color:blue;" >ITEM NAME</th>
<th class="table-secondary" style="color:blue;">AMOUNT</th>
<th class="table-info" style="color:blue;">DATE</th>
<th class="table-success" style="color:blue;">ACCEPT OR NOT</th>
<th class="table-danger" style="color:blue;">MAKING STATUS</th>
<th class="table-warning" style="color:blue;">PAYMENT STATUS</th>
</tr>


<!-- On cells (`td` or `th`) -->
<tr>
<?php
				 $connection = mysqli_connect("localhost","root","");
				 $db = mysqli_select_db($connection,'cake');
				 
				 $query ="SELECT * FROM `order_information` where CustomerName='$user' ORDER BY `Date` DESC";
				 $query_run = mysqli_query($connection,$query);
				 
				 while($row = mysqli_fetch_array($query_run)) 
				 {
					 ?>
					 <tr>
                     <td class="table-active"> <?php echo $row['Code'];  ?></td>
					     <td class="table-primary"> <?php echo $row['itemName'];  ?></td>
						 <td class="table-secondary"> <?php echo $row['Amount'];  ?></td>
						 <td class="table-info"> <?php echo $row['Date'];  ?></td>
						 <td class="table-success"> <?php echo $row['accept'];  ?></td>
						 <td class="table-danger"> <?php echo $row['making_status'];  ?></td>
                         <td class="table-warning"> <?php echo $row['status'];  ?></td>
                 
                          
</tr>
<?php } ?>           
</table>
<br>
<br>
<br>
<br>


<h3 style="float:left; color:red;"  >SPECIAL ORDER STAUTUS DETAILS </h3>
<br>
<br>

<table cellspacing="20px" align="center" cellspacing="20px" class="table table-success table-striped">
<th class="table-primary" style="color:blue;" >CAKE TYPE</th>
<th class="table-secondary" style="color:blue;">AMOUNT</th>
<th class="table-info" style="color:blue;">DATE</th>
<th class="table-success" style="color:blue;">ACCEPT OR NOT</th>
<th class="table-danger" style="color:blue;">MAKING STATUS</th>
<th class="table-warning" style="color:blue;">PAYMENT STATUS</th>
</tr>


<!-- On cells (`td` or `th`) -->
<tr>
<?php
				 $connection = mysqli_connect("localhost","root","");
				 $db = mysqli_select_db($connection,'cake');
				 
				 $query ="SELECT * FROM `special_orders` where name='$user' ORDER BY `date` DESC";
				 $query_run = mysqli_query($connection,$query);
				 
				 while($row = mysqli_fetch_array($query_run)) 
				 {
					 ?>
					 <tr>
                     
					     <td class="table-primary"> <?php echo $row['caketype'];  ?></td>
						 <td class="table-secondary"> <?php echo $row['amount'];  ?></td>
						 <td class="table-info"> <?php echo $row['date'];  ?></td>
						 <td class="table-success"> <?php echo $row['accept'];  ?></td>
						 <td class="table-danger"> <?php echo $row['status'];  ?></td>
                         <td class="table-warning"> Not Paid</td>
                 
                          
</tr>
<?php } ?>           
</table>
<br>
<br>
<br>
<br>

<footer >
        <div class="bg-secondary text-white text-center">
            <div class="row">
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <ul >
                        <li>INFO</li><br>
                        <li><a style="text-decoration:none;color:white;" href="about.html">About Us</a></li>
                       
                        <li><a style="text-decoration:none;color:white;" href="https://translate.google.lk/">Sinhala & Tamil Translator</a></li>
                         
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <ul class="socialmedia">
                        <li>CONTACT US</li><br>
                        <li class="fb"><a style="text-decoration:none;color:white;" href="https://www.facebook.com/Jays-Art-103578618093586/" target="_blank">Facebook</a></li>
                        
                        <li class="in"><a style="text-decoration:none;color:white;" href="https://instagram.com/jayani.senarathna.98?igshid=nur5j2cghh1l" target="_blank">Instagram</a></li>
                        
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <ul class="officeinfo" >
                        <li>GALLE HEAD OFFICE</li><br>
                        <li>No 374, Samagi Road, Piyadigama,</li>
                        <li>Galle.</li>
                        <li class="ofi1"><strong>Email:</strong> jaysartcake@gmail.com</li>
                        <li class="ofi2"><strong>Hotline:</strong> +94 76 684 7435</li>
                        <li class="ofi3"><strong>Landline:</strong> +94 91 393 0888</li>
                    </ul>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0" >
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
                 

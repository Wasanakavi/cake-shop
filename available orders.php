<html>

    <head>
          <title> Table with availabel orders</title>
		  <link rel="stylesheet" type="text/css" href="available orders.css">
		  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
         
		  
    </head>
	<body>
	
	<div id="topbar">
    <div id="topnav">

  <a id="active" href="available orders.php">Available Orders</a>
  <a href="cake.html">Home</a>
  <a href="login.php">Log In</a>
  <a href="Product and Services.html">Product And Services</a>
  <a href="about.html">About Us</a>
  <a href="cakecart.php">Cart</a>
  <a href="speacial orders.php">Speacial Orders</a>

  <form color="red" align="right"action="logout.php" method="post"><input type="submit" id="logout" name="logout" value="LOGOUT" onclick="logout()"></form>
  </div>
</div>
<h1 align = "center"> Availabel Orders </h1>

<section> <div class="sideMenu"><div class="frmdiv">

	<center>
	    <form action=""method ="POST" enctype="multipart/form-data">
		    <table  border ="1px" cellpadding="4px" cellspacing="1px" align="center" class="table table-striped table-light">  
			   <thead>
			   
			   <tr>
			     <th width="5%"> Name</th>
				 <th width="5%"> ADDress</th>
				 <th width="5%"> Email</th>
				 <th width="5%"> Phone Number</th>
			     <th width="5%"> Image</th>
				 <th width="5%"> Amount</th>
				 <th width="5%"> Date</th>
				 <th width="5%"> Colour</th>
				 <th width="5%"> Idea</th>
                 <th width="7%"> Baking</th>
                 <th width="5%"> Decorations</th>
                 <th width="5%"> Order Done</th>
                 <th width="5%"> Accept</th>
                 <th width="5%"> Confirm</th>
                 
                 
				 
			     
				 
				 </tr>
				 </thead>
				 <?php
				 $connection = mysqli_connect("localhost","root","");
				 $db = mysqli_select_db($connection,'cake');
				 
				 $query ="SELECT * FROM `order_information`";
				 $query_run = mysqli_query($connection,$query);
				 
				 while($row = mysqli_fetch_array($query_run)) 
				 {
					 ?>
					 <tr>
					     <td> <?php echo $row['CustomerName'];  ?></td>
						 <td> <?php echo $row['Address'];  ?></td>
						 <td> <?php echo $row['Email'];  ?></td>
						 <td> <?php echo $row['Telephone'];  ?></td>
						 <td> <?php echo'<img src = "data: image;base64,'.base64_encode($row['image']).'" alt="NO COUSTOMIZE IMAGE" style="width:100px; height:=100px;" >';?> </td>
						 <td> <?php echo $row['Amount'];  ?></td>
						 <td> <?php echo $row['Date'];  ?></td>
						 <td> <?php echo $row['colour'];  ?></td>
						 <td> <?php echo $row['idea'];  ?></td>
                          
                         <td>
								<form method='get' action='available orders.php'>
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
									<input type="submit" id="baking" name="baking" value="Done" class="btn btn-primary">
								</form>
							 </td>
							 <td>
								<form method='get' action='available orders.php'>
									<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
									<input type="submit" id="decorations" name="decorations" value="Done" class="btn btn-secondary">	
								</form>
							</td>
							 <td>
								<form method='get' action='available orders.php'>
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
									<input type="submit" id="done" name="done" value="Done"class="btn btn-warning">
								</form>
							 </td>
							 <td>
								<form method='get' action='available orders.php'>
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
									<input type="submit" id="cant" name="cant" value="Cant"class="btn btn-danger">
								</form>
							 </td>
							 <td>
								<form method='get' action='available orders.php'>
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
									<input type="submit" id="accept" name="accept" value="accept"class="btn btn-success">
								</form>
							 </td>
						 </tr>
				<?php } ?>
                 
			</table>
		</form>
		
		
		
		
		<?php 
				

				if($_GET["baking"] ?? ""=="submit")
				{   $v = $_GET["id"];
					$sql = "UPDATE order_information SET making_status='BAKING' WHERE id = $v";
					if(!mysqli_query ($connection,$sql)){
						echo "not inserted";
					}	
                }
				if($_GET["decorations"] ?? ""=="submit")
				{
					$v = $_GET["id"];
					$sql = "UPDATE order_information SET making_status='DECORATIONS' WHERE id = $v";
					if(!mysqli_query ($connection,$sql)){
						echo "not inserted";
					}	
                }
				if($_GET["done"]?? ""=="submit")
				{
					$v = $_GET["id"];
					$sql = "UPDATE order_information SET making_status='DONE' WHERE id = $v";
					if(!mysqli_query ($connection,$sql)){
						echo "not inserted";
					}	
                }
				
				if($_GET["cant"]?? ""=="submit")
				{
					$v = $_GET["id"];
					$sql = "UPDATE order_information SET accept='CANT' WHERE id = $v";
					if(!mysqli_query ($connection,$sql)){
						echo "not inserted";
					}	
                }
				
				if($_GET["accept"]?? ""=="submit")
				{ $v = $_GET["id"];
					$sql = "UPDATE order_information SET accept='ACCEPTED' WHERE id = $v";
					if(!mysqli_query ($connection,$sql)){
						echo "not inserted";
					}	
                }
				
			?>
				
				 </table>
				 </form>
				 
	
	</center>
	</body>
	</html>
	</section>
	
	
	<br>
	
	<footer  style="width:100%; ">
			<div class="bg-secondary text-white text-center"  style="width: 1345px; position:absolute;">
				<div class="row">
					
					<div class="col-lg-2 col-md-6 mb-6 mb-md-0">
						<ul ><br>
							<li>INFO</li><br>
							<li><a style="text-decoration:none;color:white;" href="about.html">About Us</a></li>
						   
							<li><a style="text-decoration:none;color:white;" href="https://translate.google.lk/">Sinhala & Tamil Translator</a></li>
							 
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 mb-6 mb-md-0">
						<ul class="socialmedia"><br>
							<li>CONTACT US</li><br>
							<li class="fb"><a style="text-decoration:none;color:white;" href="https://www.facebook.com/Jays-Art-103578618093586/" target="_blank">Facebook</a></li>
							
							<li class="in"><a style="text-decoration:none;color:white;" href="https://instagram.com/jayani.senarathna.98?igshid=nur5j2cghh1l" target="_blank">Instagram</a></li>
							
						</ul>
					</div>
					<div class="col-lg-4 col-md-6 mb-6 mb-md-0">
						<ul class="officeinfo" ><br>
							<li>GALLE HEAD OFFICE</li><br>
							<li>No 374, Samagi Road, Piyadigama,</li>
							<li>Galle.</li>
							<li class="ofi1"><strong>Email:</strong> jaysartcake@gmail.com</li>
							<li class="ofi2"><strong>Hotline:</strong> +94 76 684 7435</li>
							<li class="ofi3"><strong>Landline:</strong> +94 91 393 0888</li>
						</ul>
					</div>
					
					<div class="col-lg-4 col-md-6 mb-6 mb-md-0" >
						<ul><br>
							<li>Payments</li><br>
							<li><img class="cards" src="creditcard.jfif" alt="Accepted Credit Cards" height="100px" width="200px"></li>
						</ul>
					</div>
				</div>
			</div>
			
		</footer>
		
	
<html>

    <head>
          <title> Table with speacial orders</title>
    </head>
	<body>
	<center>
	    <form action=""method ="POST" enctype="multipart/form-data">
		    <table>
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
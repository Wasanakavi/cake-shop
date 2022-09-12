<?php

if($_POST["Submit"] ?? ""=="submit"){
$a = $_POST["code"];
$b = $_POST["name"];
$c = $_POST["img"];
$d = $_POST["price"];



$conn= new mysqli('localhost','root','');
if(!$conn)
{
echo"not connected";
} 
if (!mysqli_select_db($conn,'cake')){
	echo "database not seected";
}
$sqlq="INSERT INTO cakecart(code, name, image,price) VALUES ('$a','$b','$c','$d')";
if(!mysqli_query ($conn,$sqlq)){
	echo "not imserted";

}	else{
	header("location:admin.php");
}	
}
if($_POST["update"] ?? ""=="UPDATE"){
$a = $_POST["code"];
$b = $_POST["name"];
$c = $_POST["img"];
$d = $_POST["price"];



$conn= new mysqli('localhost','root','');
if(!$conn)
{
echo"not connected";
} 
if (!mysqli_select_db($conn,'cake')){
	echo "database not seected";
}
$sqlq="UPDATE cakecart SET name='$b', image='$c',price='$d' WHERE code='$a'";
if(!mysqli_query ($conn,$sqlq)){
	
	echo '<script>'; echo 'alert("RECORD NOT UPDATED")'; echo'</script>';
	
	header("location:admin.php");

}	else{
	
	echo '<script>'; echo 'window.alert("RECORD UPDATED")';echo '</script>';
	
	header("location:admin.php");
}	
}


if($_POST["delete"] ?? ""=="DELETE"){
$a = $_POST["code"];




$conn= new mysqli('localhost','root','');
if(!$conn)
{
echo"not connected";
} 
if (!mysqli_select_db($conn,'cake')){
	echo "database not seected";
}
$sqlq="DELETE FROM cakecart WHERE code='$a'";
if(!mysqli_query ($conn,$sqlq)){
	
	echo '<script>'; echo 'alert("RECORD NOT DELETED")'; echo'</script>';
	
	header("location:admin.php");

}	else{
	
	echo '<script>'; echo 'window.alert("RECORD DELETED")';echo '</script>';
	
	header("location:admin.php");
}	
}
?>
	
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart manager</title>
<link rel="stylesheet" type="text/css" href="admin.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://codepen.io/skjha5993/pen/bXqWpR.css">



</head>
<body style="background-color:#616A6B;">
<div id="topbar">
<div id="topnav">
  <a id="active" href="admin.php">Cart Management</a>
  <a href="cake.html">Home</a>
 
  <a href="Product and Services.html">Product And Services</a>
  <a href="about.html">About Us</a>
  <a href="cakecart.php">Cart</a>
  <a href="speacial orders.php">Speacial Orders</a>
  <a href="available orders.php">Available Orders</a>
  <form color="red" align="right"action="logout.php" method="post"><input type="submit" id="logout" name="logout" value="LOGOUT" onclick="logout()"></form>
  </div>
</div>
<br>

<div class="container">
<form name = "order" action = "admin.php" method = "POST" enctype="multipart/form-data">

        <div class="row jumbotron">
        <div class="col-sm-6 form-group">
        <h2 class="text-center" style="color:blue;" >ADD AND UPDATE PRODUCT</h2>
        
</div>
<div class="col-sm-6 form-group">
        
</div>
            <div class="col-sm-6 form-group">
                <label for="code">Cake Code</label>
                <input type="text" name = "code" id = "code" required class="form-control" placeholder="Enter Code">
            </div>
            <div class="col-sm-6 form-group">
                <label for="name">Name</label>
                <input type="text" name = "name" id = "name" required class="form-control" placeholder="Enter Cake Name">
            </div>
            <div class="col-sm-6 form-group">
                <label for="img">Image Name</label>
                <input type="text" name = "img" id = "img" class="form-control" placeholder="Enter Image Name." required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price" required>
            </div>
            
            
            

            <div class="col-sm-4 form-group mb-0">
            <input  type = "Submit" value="ADD" name = "Submit"  class="btn btn-primary " >
			
            </div>
            <div class="col-sm-4 form-group mb-0">
            <input  type = "Submit" value="UPDATE" name = "update"  class="btn btn-success " >
            </div>

            <div class="col-sm-4 form-group mb-0">
            <input  type = "reset" value="RESET"   class="btn btn-danger " >
			
            </div>
            
        </div>
        </form>
    </div>
</div>
<br> <br> <br>


<div class="container">
<form name = "order" action = "admin.php" method = "POST" enctype="multipart/form-data">

        <div class="row jumbotron">
        <div class="col-sm-6 form-group">
        <h2 class="text-center" style="color:blue;" >DELETE PRODUCT</h2>
        
</div>
<div class="col-sm-6 form-group">
        
</div>
            <div class="col-sm-12 form-group">
                <label for="code">Cake Code</label>
                <input type="text" name = "code" id = "code" required class="form-control" placeholder="Enter Code">
            </div>
            

            <div class="col-sm-6 form-group mb-0">
            <input  type = "Submit" value="DELETE" name = "delete"  class="btn btn-primary " >
            </div>
           
            <div class="col-sm-6 form-group mb-0">
            <input  type = "reset" value="RESET"   class="btn btn-danger " >
			
            </div>
            
        </div>
        </form>
    </div>
</div>
<br> <br> <br>
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
	</body>
	</html>
	

<?php

if($_POST["Submit"] ?? ""=="submit"){
$a = $_POST["fn"];
$b = $_POST["address"];
$c = $_POST["contact"];
$d = $_POST["email"];
$e = $_POST["city"];
$f = $_POST["gender"];
$g = $_POST["pwd"];


$conn= new mysqli('localhost','root','');
if(!$conn)
{
echo"not connected";
} 
if (!mysqli_select_db($conn,'cake')){
	echo "database not seected";
}
$sqlq="INSERT INTO registration_information(CustomerName, password, Address,Telephone,Email,City,Gender) VALUES ('$a','$g','$b','$c','$d','$e','$f')";
if(!mysqli_query ($conn,$sqlq)){
	echo "not inserted";

}	else{
	header("location:login.php");
}	
}?>
	
<html>
<head> 
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
<link rel="stylesheet" type="text/css" href="registration 1.css">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://codepen.io/skjha5993/pen/bXqWpR.css">



</head>
<body style="background-image:url('cake4.jpeg');">
<div id="topbar">
	<div id="topnav">
		<a href="cake.html">Home</a>
		<a href="about.html">About Us</a>
		<a href="Product and Services.html">Products And Services</a>
		<a href="login.php">Log In</a>
		<a id="active" href="login.php">Registration</a>
	</div>
</div><br>


<div class="container">
<form name = "order" action = "registration.php" method = "POST" enctype="multipart/form-data">
            
            
        <div class="row jumbotron">
        <div class="col-sm-6 form-group">
        <h2 class="text-center" style="color:blue;" >REGISTRATION</h2>
        
</div>
<div class="col-sm-6 form-group">
        
</div>
            
            <div class="col-sm-6 form-group">
                <label for="name-l"> Customer Name</label>
                <input type="text" name = "fn" id = "fn" required class="form-control" placeholder="Enter your Name.">
            </div>
            <div class="col-sm-6 form-group">
                <label for="password">Password</label>
                <input type="password" name = "pwd" id = "pwd" class="form-control" placeholder="Enter your password." required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="address">Address</label>
                <textarea  name = "address" id = "address" class="form-control" placeholder="Enter your Address" required rows="1"> </textarea>
            </div>
            <div class="col-sm-6 form-group">
                <label for="contact">Contact No</label><br>
                <input type="number"  name="contact" id="contact" class="form-control" placeholder="Enter your Contact No"  required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email." required>
            </div>
            
            
            <div class="col-sm-3 form-group">
                <label for="city">City</label>
                <select name = "city" id = "city" required class="form-control">
<option value="select">-select-</option>
<option value="galle">Galle</option>
<option value="matara">Matara</option>
<option value="colombo">Colombo</option>
</select>
            </div>
            <div class="col-sm-3 form-group">
                <label for="gender">Gender</label><br>
                <input type="radio"  name="gender" id="male" value="M"  required>Male
                <input type="radio"  name="gender" id="female" value="F"  required>Female
                
            </div>
            <div class="col-sm-6 form-group">
                <label for="confirm">Confirm Information</label>
                <input type="checkbox" name="check" id="check" value="yes" required>
            </div>
            
            
            <div class="col-sm-12 form-group mb-0" >
               <input  type="reset"  class="btn btn-danger float-left" value="Reset">
            </div>
            

            <div class="col-sm-12  form-group mb-0">
            <input type="submit" name="Submit" id="Submit" class="btn btn-primary float-right" value="Submit">
            </div>
            
        </div>
        </form>
    </div>
</div>



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
	

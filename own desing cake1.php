<?php

if($_POST["Submit"] ?? ""=="submit"){
$a= $_POST["type"];
$b= $_POST["name"];
$c= $_POST["email"];
$d= $_POST["pn"];
$f= $_POST["amount"];
$g= $_POST["date"];
$i= $_POST["clour"];
$j= $_POST["idea"];
if(getimagesize($_FILES['image']['tmp_name'])==FALSE){
	echo "error"; 
}
else{
	$image=$_FILES['image']['tmp_name'];
	$image=addslashes(file_get_contents($image));
	
}

$conn= new mysqli('localhost','root','');
if(!$conn)
{
echo"not connected";
} 
if (!mysqli_select_db($conn,'cake')){
	echo "database not seected";
}
$sqlq="INSERT INTO `special_orders`(caketype,name,email,phonenumber,image,amount,date,colour,idea,status,accept) VALUES ('$a','$b','$c','$d','$image','$f','$g','$i','$j','Pending','Pending')";
		if(!mysqli_query ($conn,$sqlq)){
			echo "not inserted";
			
		}
		else{
			
			header("location:noties1.html");
		}
		
		mysqli_close($conn);
}
?>


<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direct Order Page</title>
<link rel="stylesheet" type="text/css" href="order 1.css">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://codepen.io/skjha5993/pen/bXqWpR.css">

<script>

	

function validate()
{

var i=document.getElementById("date").value;

 if (i== "")
 {
 alert ("Enter date");
 return false;
 } 
}


</script>
</head>
<body style="background-image:url('cake2.jpg');">
<div id="topbar">
<div id="topnav">
  <a id="active" href="#login">Direct Order Page</a>
  <a href="cake.html">Home</a>
  <a href="Product and Services.html">Product And Services</a>

  <a href="About.html">About Us</a>
  <a href="registration.php">Registration</a>
  <a href="cakecart.php">Cart</a>
  <div class="cart_div">
<a style="float:right:" href="new.php"><img src="status 4.jpg" style="width:26px; height:26px; "/>  ORDER STATUS </a></input>
</div>
  <form color="red" align="right"action="logout.php" method="post"><input type="submit" id="logout" name="logout" value="LOGOUT"></form>
  </div>

</div><br>

<div class="container">
<form name = "order" action = "own desing cake1.php" method = "POST" enctype="multipart/form-data">

        <div class="row jumbotron">
        <div class="col-sm-6 form-group">
        <h2 class="text-center" style="color:blue;" >OWN DESIGN ORDERING</h2>
        
</div>
<div class="col-sm-6 form-group">
        
</div>
            <div class="col-sm-6 form-group">
                <label for="name-f">Cake Type</label>
                <select name = "type" id = "type" required  class="form-control">
<option value="Not Selected">-select-</option>
<option value="fondent design cake"> fondent design cake</option>
<option value="Butter cream Cake"> Butter cream Cake</option>
<option value="Cup Cake">Cup Cake</option>
</select>
            </div>
            <div class="col-sm-6 form-group">
                <label for="name-l">Name</label>
                <input type="text" name = "name" id = "name" required class="form-control" placeholder="Enter your Name.">
            </div>
            <div class="col-sm-6 form-group">
                <label for="email">Email</label>
                <input type="email" name = "email" id = "email" class="form-control" placeholder="Enter your email." required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="pn">Phone Number</label>
                <input type="number" class="form-control" name="pn" id="pn" placeholder="Enter your phone no." required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="image">Insert Image</label><br>
                <input type="file"  name="image" id="image"  required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="amount">Amount</label>
                <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter amount." required>
            </div>
            
            <div class="col-sm-3 form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date" id="date" placeholder="Enter amount." required>
                
            </div>
            <div class="col-sm-3 form-group">
                <label for="colour">Colour</label>
                <input type="color" name="clour" class="form-control" id="clour" placeholder="" required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="idea">Idea</label>
                <textarea  name = "idea" id = "idea" class="form-control" placeholder="Enter your Idea" required rows="1"> </textarea>
            </div>
            <div class="col-sm-6 form-group mb-0">
               <input type="reset"  class="btn btn-danger float-left" value="Reset">
            </div>
            

            <div class="col-sm-12 form-group mb-0">
            <input type="submit" name="Submit" id="Submit" class="btn btn-primary float-right" value="Submit">
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
                        <li><a href="about1.html">About Us</a></li>
                       
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
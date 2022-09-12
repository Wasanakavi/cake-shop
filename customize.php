<?php
include("session.php"); 
$connect = mysqli_connect("localhost", "root", "", "cake"); 

$order_id = $_GET["id"];
$query = "SELECT * FROM order_information Where id = '$order_id'";  
$result = mysqli_query($connect, $query);  
if(mysqli_num_rows($result) > 0)  
{  
	$cake_order = mysqli_fetch_array($result);  
}else{
	echo '<script>window.location="add cart.php"</script>';
}
		
?>

<?php

if($_POST["Submit"] ?? ""=="submit"){
	


$a = $_POST["date"];
$b= $_POST["colour"];
$c= $_POST["text"];
$d= 1;
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
$sqlq="UPDATE order_information SET Date = '$a', Amount = '$d', colour = '$b', idea = '$c', image='$image' Where id = '$order_id'";
		if(!mysqli_query ($conn,$sqlq)){
			echo "Update Fail";
		}
		mysqli_close($conn);
		echo '<script>window.location="add cart.php"</script>';
}
?>


<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customize page</title>
<link rel="stylesheet" type="text/css" href="customize.css">
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
<body style="background-image:url('cake1.jpg');">

<div id="topbar">
<div id="topnav">
	<a href="cake.html">Home</a>
	<a href="cakecart.php">Order Menu</a>
	<a id="active" href="customize.php">Customize </a>
	<a href="add cart.php">Cart</a>
	
  </div>
</div>

<br>
<div class="sidemenue" >
<div class="container">
<form name = "order"action = "customize.php?action=update&id=<?php echo $order_id; ?>" method = "POST" enctype="multipart/form-data">
            
            

            <div class="row jumbotron">
            <div class="col-sm-6 form-group">
        <h2 class="text-center" style="color:blue;" >CUSTOMIZE ORDERING</h2>
        
</div>
<div class="col-sm-6 form-group">
        
</div>
            
            <div class="col-sm-6 form-group">
                <label for="amount">Amount</label>
                <span class="form-control" ><?php echo $cake_order['Amount'];?></span>
            </div>
            <div class="col-sm-3 form-group">
                <label for="date">Date</label>
                <input type="date" name = "date" id = "date" class="form-control" placeholder="Enter Date." value="<?php echo $cake_order['Date'];?>" required>
            </div>
            
            <div class="col-sm-3 form-group">
                <label for="image">Insert Image</label><br>
                <input type="file"  name="image" id="image"  required>
            </div>
            

            <div class="col-sm-3 form-group">
                <label for="colour">Colour</label>
                <input type="color" name="colour" class="form-control" id="colour" placeholder="" required value="<?php echo $cake_order['colour'];?>">
            </div>
            <div class="col-sm-6 form-group">
                <label for="idea">Idea</label>
                <textarea  name = "text" id = "text" class="form-control" placeholder="Enter your Idea" required rows="1"> <?php echo $cake_order['idea'];?></textarea>
            </div>
            <div class="col-sm-6 form-group mb-0">
               <button class="btn btn-danger float-left" ><a href="add cart.php" style="color:white;">Close</a></button>
            </div>
            

            <div class="col-sm-1 form-group mb-0">
            <input type="submit"  id="Submit" class="btn btn-primary float-right" value="Submit" name = "Submit" onclick="return validate();">
            </div>
            
        </div>
        </form>
    </div>
</div>
<br>


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
	
	
	

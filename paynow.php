<?php
include("session.php"); 
$connect = mysqli_connect("localhost", "root", "", "cake");  
$user = $_SESSION["user"]["CustomerName"];
$order_id;
if(isset($_POST["buynow"]))  
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
	$j= date("Y-m-d");
				
	$sqlq="INSERT INTO order_information(CustomerName,Address,date,type,Code,Amount,Telephone,Email,image,colour,idea,cakeImage,price,itemName,status,making_status,accept) VALUES ('$a','$b','$j','NONE', '$c','$d', '$e', '$f','$g','NONE','NONE', '$g', '$h', '$i', 'Paid','Pending','ACCEPTED')";
	$result = mysqli_query ($connect,$sqlq);
	if(!$result){
		echo "not inserted";
	}else{
		$order_id = mysqli_insert_id($connect);
			
	}				   
 } 
if($_POST["Submit"] ?? ""=="submit"){

	$b= $_POST["colour"];
	$c= $_POST["text"];
	$d= 1;
	$ordernew_id = $_POST["order_id"];
	
	
	$conn= new mysqli('localhost','root','');
	if(!$conn)
	{
	echo"not connected";
	} 
	if (!mysqli_select_db($conn,'cake')){
		echo "database not seected";
	}
	$sqlq="UPDATE order_information SET  Amount = '$d', colour = '$b', idea = '$c' Where id = '$ordernew_id'";
		if(!mysqli_query ($conn,$sqlq)){
			echo "Update Fail";
		}else{
			mysqli_close($conn);
			ob_start();

			ob_get_clean();
			header( "Content-Type: application/vnd.ms-excel" );
			header( "Content-disposition: attachment; filename=bill-payment.xls" );
			echo 'Item Name' . "\t\t" . 'Code' . "\t" . 'Quantity' . "\t" . 'Price' . "\t" . 'Total' . "\n";
			  
			$total = $d*$_POST["hidden_price"];
			echo $_POST["hidden_name"] . "\t\t" . $_POST["hidden_code"] . "\t" . $d ."\t LKR" . $_POST["hidden_price"] . "\t LKR" . $total."\n";
			
			echo "\n\t\t\t" .'Total' . "\t\t LKR" . $total. "\n";
			die();
		}
}
		
?>

<?php
$connect = mysqli_connect("localhost", "root", "", "cake"); 

?>


<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment page</title>
<link rel="stylesheet" type="text/css" href="payment 2.css">
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
<body style="background-image:url('bynow.jpg');">
<div id="topbar">
<div id="topnav">
	<a href="cake.html">Home</a>
	<a href="cakecart.php">Order Menu</a>
	<a id="active" href="paynow.php">Bynow </a>
	<a href="add cart.php">Cart</a>
	
  </div>
</div>

<br><br>



<div class="container">
<form name = "order" action = "paynow.php" method = "POST" enctype="multipart/form-data">

        <div class="row jumbotron">
        <div class="col-sm-6 form-group">
        <h2 class="text-center" style="color:blue;" >BYNOW</h2>
        
</div>
<div class="col-sm-6 form-group">
        
</div>
            <div class="col-sm-3 form-group">
                <label for="amount">Amount</label>
                <span class="form-control" >1</span>
            </div>
            <div class="col-sm-3 form-group">
                <label for="color">Colour</label>
                <input type="color" name = "colour" id = "colour" required class="form-control" placeholder="">
            </div>
            <div class="col-sm-6 form-group">
                <label for="idea">Idea</label>
                <input type="text" name = "text" id = "text" class="form-control" placeholder="Enter your idea." required>
            </div>
            <div class="col-sm-12 form-group">
                <label for="cn">Card Number</label>
                <input type="number" class="form-control" name="cn" id="cn" placeholder="Enter your Card no." required>
            </div>
            <div class="col-sm-4 form-group">
                <label for="month">Month</label><br>
                <input type="number"  name="month" id="month" class="form-control" required placeholder="01">
            </div>
            
            
            <div class="col-sm-4 form-group">
                <label for="year">Year</label>
                <input type="number" class="form-control" name="year" id="year" placeholder="2021" required>
                
            </div>
            <div class="col-sm-4 form-group">
                <label for="cvv">CVV</label>
                <input type="number" name="cvv" class="form-control" id="cvv" placeholder="8080" required>
            </div>
            
            <div class="col-sm-6 form-group mb-0">
               <button  class="btn btn-danger float-left"  ><a href="cakecart.php" style="color:white;">Close</a></button>
            </div>
            

            <div class="col-sm-6 form-group mb-0">
            <input  type = "Submit" value="Pay Now" name = "Submit" onclick="return validate();" class="btn btn-primary float-right" >
			<input type="hidden" name="hidden_code" value="<?php echo $c; ?>" /> 
            <input type="hidden" name="hidden_name" value="<?php echo $i; ?>" />  
            <input type="hidden" name="hidden_price" value="<?php echo $h; ?>" />  
            <input type="hidden" name="order_id" value="<?php echo $order_id; ?>" />  
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
	
	
	

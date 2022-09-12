<?php
/*session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){
	header("location: Product and Services.html");
exit;}*/
session_start();
if($_POST["login"] ?? ""=="submit"){
$u=$_POST["us"];
$p=$_POST["pw"];

$conn= new mysqli('localhost','root','');
if(!$conn)
{
echo"not connected";
} 

if (!mysqli_select_db($conn,'cake')){
echo "database not selected";}
	

$sql=("SELECT * FROM registration_information WHERE CustomerName='$u' && password='$p'");
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num == 1){

$_SESSION["username"]= $u;
$_SESSION["user"] = mysqli_fetch_array($result);
header("location:cakecart.php");
exit();}
if($u=="admin" &&$p=="admin"){header("location:admin.php");}
else{echo'<script> if (confirm ("Invalid Login..."))
{
header("location:login.php");
}
</script>';
}}


?>

<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> login page</title>

    <link rel="stylesheet" type="text/css" href="CSS/login 1.css">
</head>
<body>
<div id="topbar">
	<div id="topnav">
		<a href="Home.html">Home</a>
		<a href="about.html">About Us</a>
		<a href="Gallery.html">Gallery</a>
		<a id="active" href="PHP/login.php">Log In</a>
	</div>
</div>

<body>
    <div class="full-screen-container">
      <div class="login-container">
        <h3 class="login-title">Welcome</h3>
        <form name = "order" action = "login.php" method = "POST" enctype="multipart/form-data">
          <div class="input-group">
            <label>User Name</label>
            <input type="text" name="us" id="us"/>
          </div>
          <div class="input-group">
            <label>Password</label>
            <input type="password" name ="pw" id="pw" />
          </div>
          <input type="submit" class="login-button"  name="login" id="login" value="Sign In">
          <button type="submit" class="login-button" ><a href="registration.php">Create New Account</a></button>
        </form>
   
      </div>
    </div>
  </body>
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
                        <li><img class="cards" src="C:\wamp64\www\cake shop\Images\creditcard.jfif" alt="Accepted Credit Cards" height="100px" width="200px"></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </footer>
	</body>
	</html>
	

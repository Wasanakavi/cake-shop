<?php 
session_start();
if($_POST["logout"] ?? ""=="LOGOUT"){
session_destroy();

header("location: login.php");
exit;
}
?>
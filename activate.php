<?php
session_start();
include 'dbconn.php';
if(isset($_GET['vkey']))
{
$vkey = $_GET['vkey'];
$updatequery ="update userregdata set Status='Active' where vkey='$vkey'";
$query =mysqli_query($conn,$updatequery);

if($query){
if(isset($_SESSION['msg'])){

$_SESSION['msg'] ="Account verified successfully";
header('location:login.php');
}else{
$_SESSION['msg']="you are not logged in";
header('location:login.php');
}
}else{
	$_SESSION['msg']="Account not updated";
header('location:Signup.php');
}
}


?>
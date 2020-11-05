userinfo.php
<?php 
$mysqli =mysqli_connect('localhost','root','','mysiteuserdata.userinfodata','mysiteuserdata.userinfodata');
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$user= $_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];
$query = "insert into userinfodata (user, email, mobile, comments)
values ('$user' , '$email' , '$mobile' ,'$comments') ";

?>
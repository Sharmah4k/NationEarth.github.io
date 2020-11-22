<?php 

session_start();

$servername = "localhost";
$username = "root";


// Create connection
$conn = mysqli_connect($servername, $username);

mysqli_select_db($conn,'mysiteuserdata');

$name= $_POST['name'];// input
$pass=$_POST['password'];// input
$option = ['cost' => 10 , 'salt' => 'mlftiodpstdvwatygxzqiopjrftr'];
$password_hash= password_hash($pass,PASSWORD_BCRYPT,$option); 

$s =" select * from userregdata where name = '$name'&& password = '$password_hash'";// Validate the login
$result= mysqli_query($conn, $s);
$num = mysqli_num_rows($result);


if($num == 1)
{
	$_SESSION['name'] = $name;

header('location:index.php'); // log in successfull

	
}
else 
{?>
	<script>
		alert('wrong username or password entered');
		window.location = 'login.php';
	</script><?php
}
 
?>
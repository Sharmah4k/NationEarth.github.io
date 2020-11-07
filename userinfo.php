userinfo.php
<?php 
$servername = "localhost";
$username = "root";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully";
?>
<script>
	alert('form submitted successfully');
	window.location = 'index.php';
</script>
<?php
mysqli_select_db($conn,'mysiteuserdata');

$user= $_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];
$query = "insert into userinfodata (user, email, mobile, comments)
values ('$user' , '$email' , '$mobile' ,'$comments') ";

mysqli_query($conn,$query);


?>
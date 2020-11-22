<?php
session_start();
include 'dbconn.php';
if(isset($_POST['submit']))
{
$name= $_POST['name'];// input
$pass=$_POST['password'];// input
$s =" select * from userregdata where name = '$name' and status = 'Active'";// Validate the login
$result= mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
if ($num) {
  $email_pass =mysqli_fetch_assoc($result);
  $db_pass =$email_pass['password'];
  $_SESSION['name'] = $email_pass['name'];
  $pass_decode = password_verify($pass, $db_pass);
  if($pass_decode){
    echo "log in successfull";
    header('location:index.php');
    
  }else{
    echo "password incorrect";
  }
    
  
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>signinform</title>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/signup.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <a class="navbar-brand" href="index.html">Nation Earth</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#">Contacts</a>
      </li>

      <li class="nav-item">
<a class="nav-link" href="login.php">LOGIN</a>
</li>
       
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  
    

</nav>

    	<div id="login-box">
        <p class="bg-success text-white"><?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}

else{
  echo $_SESSION['msg']="you are logged out";
}



        ?></p>
    		<div class="left-box">
    			<h1>log in</h1>
               <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);  ?>" method="POST" >
                <label><i class="fa fa-user fa-2x "></i></label>
    			<input type="text" name="name" placeholder="Username"  />
                 <label><i class="fa fa-lock fa-2x"></i></label>
    			<input type="password" name="password" placeholder="Password" />
   			
    			<button type="submit" class="btn btn-success mb-2" name="submit">login</button>
        
             </form>
             <a href="Signup.php" >Create a new account</a> 
             </div>  
                     
    		<div class="right-box">
    			<span class="signinwith">sign in with<br/>Social Network
    			</span>
                            
    			<button class="social facebook">log in with facebook</button>
                 <button class="social twitter">log in with twitter</button>
                 <button class="social instagram">log in with instagram</button>
                 <button class="social google">log in with google</button>

    		</div>
    		<div class="or">OR</div>
    	</div>




 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
<footer>
     <p class="p-3 bg-dark text-white text-center">NATION EARTH </p>
      </footer>
</html>
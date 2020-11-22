<?php
session_start();

require_once __DIR__.'/functions.php';
require_once __DIR__.'/config.php';

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
 	<?php
  session_start();

require_once __DIR__.'/functions.php';
require_once __DIR__.'/config.php';

include 'dbconn.php';
if(isset($_POST['submit']))
{
$name= mysqli_real_escape_string($conn,$_POST['name']);
$email= mysqli_real_escape_string($conn,$_POST['email']);
$pass= mysqli_real_escape_string($conn,$_POST['password']);
$option = ['cost' => 10 , 'salt' => 'mlftiodpstdvwatygxzqiopjrftr'];

$password_hash= password_hash($pass,PASSWORD_BCRYPT,$option);
$vkey = bin2hex(random_bytes(15));

$s =" select * from userregdata where name = '$name'";
$result= mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
$e =" select * from userregdata where email = '$email'";
$result1= mysqli_query($conn, $e);
$num1 =mysqli_num_rows($result1);

if($num == 1)
{?>
	<script>
	alert('Username already taken');
     window.location = 'Signup.php';
	
</script>
<?php
}
else if($num1 == 1)
{?>
    <script> alert('already have an account with this email address');
    window.location = 'Signup.php';
     </script> <?php
}
else{
$query = "insert into userregdata (name, email, password,vkey,status)
values ('$name' , '$email' , '$password_hash','$vkey','Inactive') ";
$squery=mysqli_query($conn, $query);






//if($query){
///$to = $email;
//$subject ="Email Verification";
//$message ="<a href='http://localhost/registration.php?vkey=$vkey'>registeraccount</a>";
//$headers="From: sharmah1080@gmail.com \r\n";
//headers .="MIME-Version: 1.0" ."\r\n";
//headers .="Content-type:text/html;charset=UTF-8" . "\r\n";
//header('location:thankyou.php');}



require_once ("vendor/phpmailer/phpmailer/PHPMailerAutoload.php");
$mail = new PHPMailer(true);

try {
    


  //check query is execute successfully or not
    
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = CONTACTFORM_SMTP_HOSTNAME;
    $mail->SMTPAuth = true;
    $mail->Username = CONTACTFORM_SMTP_USERNAME;
    $mail->Password = CONTACTFORM_SMTP_PASSWORD;
    $mail->SMTPSecure = CONTACTFORM_SMTP_ENCRYPTION;
    $mail->Port = CONTACTFORM_SMTP_PORT;

    // Recipients
     $mail->setFrom('sharmah1080@gmail.com', 'yourcompanyname');
    $mail->addAddress($email);
    $mail->addReplyTo('sharmah1080@gmail.com');

    // Content
     $mail->isHTML(true); //false if you don't use html.
    $mail->Subject = 'Email Verification';
    
      
      //email body
      $mail->Body = "Hi, $name. click provided link to activate your account <a href='http://localhost/MYSite/activate.php?vkey=$vkey'>RegisterAccount</a>";
  


    if($mail->send()) {
        //mail not send
        $_SESSION['msg'] ="verify your account $email";
        header('location:login.php');
    }
    else {
        echo "mail not send";
    }


} catch (Exception $e) {
    redirectWithError("An error occurred while trying to send your message: ".$mail->ErrorInfo);
}


}
return 0;

}?>


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
<a class="nav-link" href="logout.php">LOGIN</a>
</li>
       
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search"  placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  
    

</nav>
      

    	<div id="login-box">
      
    		<div class="left-box">
    			<h1>Sign Up</h1>
          <form  action="<?php echo htmlentities($_SERVER['PHP_SELF']);  ?>" method="POST">
           
    			<input type="text" name="name" class="placeicon" placeholder= "&#xf406;Username"/>
    			<input type="text" name="email" class="placeicon" placeholder="&#xf003;Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="please enter the valid emailid" />
          
    			<input id="txtPassword" type="password" name="password" class="placeicon" placeholder="&#xf023;Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
           
    			<input id="txtConfirmPassword" type="password" name="password2" class="placeicon" placeholder="&#xf023;Retypepassword" />

    			<button type="submit" class="btn btn-success mb-2" name="submit">Signup</button>
                 
                 
              
             </form> 
             <a href="login.php" >Already have an account</a>   
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
        
    		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#txtPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>
    	
<footer>
     <p class="p-3 bg-dark text-white text-center">NATION EARTH </p>
      </footer>



    </body>

</html>
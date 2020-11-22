



<?php 

session_start();
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/functions.php';
require_once __DIR__.'/config.php';

$servername = "localhost";
$username = "root";


// Create connection
$conn = mysqli_connect($servername, $username);

mysqli_select_db($conn,'mysiteuserdata');
$option = ['cost' => 10 , 'salt' => 'mlftiodpstdvwatygxzqiopjrftr']; //salt blue fish
$name= $_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
 $password_hash= password_hash($pass,PASSWORD_BCRYPT,$option);   //blue fish 
$s =" select * from userregdata where name = '$name'";
$result= mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
$e =" select * from userregdata where email = '$email'";
$result1= mysqli_query($conn, $e);
$num1 =mysqli_num_rows($result1);
$vkey = md5(time().$name);
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
$query = "insert into userregdata (name, email, password,vkey)
values ('$name' , '$email' , '$password_hash','$vkey') ";
mysqli_query($conn, $query);
//if($query){
///$to = $email;
//$subject ="Email Verification";
//$message ="<a href='http://localhost/registration.php?vkey=$vkey'>registeraccount</a>";
//$headers="From: sharmah1080@gmail.com \r\n";
//headers .="MIME-Version: 1.0" ."\r\n";
//headers .="Content-type:text/html;charset=UTF-8" . "\r\n";
//header('location:thankyou.php');}
$mail = new \PHPMailer\PHPMailer\PHPMailer(true);

try {
    


  //check query is execute successfully or not
    
    //Server settings
    $mail->SMTPDebug = CONTACTFORM_PHPMAILER_DEBUG_LEVEL;
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
      $mail->Body = "<a href='http://localhost/MYSite/verify.php?vkey=$vkey'>RegisterAccount</a>";
  


    if($mail->send()) {
        //mail not send
        echo "mail send";
        header('location:thankyou.php');
    }
    else {
        echo "mail not send";
    }


} catch (Exception $e) {
    redirectWithError("An error occurred while trying to send your message: ".$mail->ErrorInfo);
}

?>
<script>
	alert('form submitted successfully');
	window.location = 'login.php';
	
</script>
<?php
}
return 0;

?>



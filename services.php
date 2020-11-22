<!DOCTYPE html>
<html>

 <head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
     .placeicon{
  font-family: fontawesome;
}
   </style>
    </head>
    

    <body>
    	
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  ...
</nav>

<div class="left-box">
          <h1>Sign Up</h1>
          <form  action="registration.php" method="post" >
           
          <input type="text" name="name" class="placeicon" placeholder= "&#xf406; Username" />
           <div class="form-group has-success has-feedback">
          <input type="text" name="email" class="placeicon" placeholder="&#xf003; Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="please enter the email-validation" />
          <span class="glyphicon glyphicon-ok form-control-feedback"></span>
        </div>
          <input id="txtPassword" type="password" name="password" class="placeicon" placeholder="&#xf023; Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
           
          <input id="txtConfirmPassword" type="password" name="password2" class="placeicon" placeholder="&#xf023; Retypepassword" />

          <input id="btnSubmit" type="submit" type="signup-button" value="Sign Up"  />
                 
              
             </form> 
             <a href="login.php" >Already have an account</a>   
        </div>


        <div class="container">
  <h2>Horizontal form: control states</h2>
  <form class="form-horizontal">
    <div class="form-group">
      <label class="col-sm-2 control-label">Focused</label>
      <div class="col-sm-10">
        <input class="form-control" id="focusedInput" type="text" value="Click to focus...">
      </div>
    </div>
    <div class="form-group">
      <label for="disabledInput" class="col-sm-2 control-label">Disabled</label>
      <div class="col-sm-10">
        <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
      </div>
    </div>
    <fieldset disabled>
      <div class="form-group">
        <label for="disabledTextInput" class="col-sm-2 control-label">Disabled input and select list (Fieldset disabled)</label>
        <div class="col-sm-10">
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
        </div>
      </div>
      <div class="form-group">
        <label for="disabledSelect" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <select id="disabledSelect" class="form-control">
            <option>Disabled select</option>
          </select>
        </div>
      </div>
    </fieldset>
    <div class="form-group has-success has-feedback">
      <label class="col-sm-2 control-label" for="inputSuccess">Input with success and glyphicon</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputSuccess">
        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
      </div>
    </div>
    <div class="form-group has-warning has-feedback">
      <label class="col-sm-2 control-label" for="inputWarning">Input with warning and glyphicon</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputWarning">
        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
      </div>
    </div>
    <div class="form-group has-error has-feedback">
      <label class="col-sm-2 control-label" for="inputError">Input with error and glyphicon</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputError">
        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
      </div>
    </div>
  </form>
</div>

</body>
</html>








<!DOCTYPE html>
<html>
<?php
 
 session_start();
 if(!isset($_SESSION['name'])){
 header('location:login.php');
}
 ?>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&family=Quicksand&family=Raleway&family=Roboto&display=swap" rel="stylesheet">
  
    </head>
    

    <body>

<h1>Welcome <?php echo $_SESSION['name'] ; ?> </h1>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
        <a class="nav-link" href="productDIR/product.php">Products</a>
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
<a class="nav-link" href="logout.php">LOGOUT</a>
</li>
      <li class="nav-item">
       
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>




<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/001.jpg" alt="First slide">
      <div class="carousel-caption">
    <h5>Cyberpunk 2077</h5>
    <p>Delayed</p>
  </div>
    </div>

    <div class="carousel-item">
    <img src="image/002.jpg" alt="Second slide">
      <div class="carousel-caption">
    <h5>cars</h5>
    <p>Racing</p>
  </div>
    </div>

    <div class="carousel-item">
      <img src="image/003.jpg" alt="Third slide">
      <div class="carousel-caption">
    <h5>anime</h5>
    <p>Toons</p>
  </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<a href="about.php"> <h2 class="text-center">About Us</h2> </a>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<a href="about.php"><img src="image/earth.jpg" class="img-fluid aboutimg"></a>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4">NATION EARTH</h2>
			<p class="py-3">Uniting globe together</p>
			<a href="about.php"class="btn btn-success">more</a>
		</div>
	</div>
	</div>
</section>

<section class="my-5">
	    <div class="py-5">
		 <a href="services.php"> <h2 class="text-center">Our Services</h2> </a>
	      </div>
	       <div class="container-fluid">
		     <div class="row">
			  <div class="col-lg-4 col-md-4 col-12">
				<div class="card">
                <img class="card-img-top" src="image/card001.jpg" alt="Card image">
               <div class="card-body">
             <h4 class="card-title">Red tree</h4>
           <p class="card-text">samurai</p>
         <a href="#" class="btn btn-primary">See Profile</a>
       </div>
     </div>
   </div>
    <div class="col-lg-4 col-md-4 col-12">
				<div class="card">
                <img class="card-img-top" src="image/card002.jpg" alt="Card image">
               <div class="card-body">
             <h4 class="card-title">saturn</h4>
           <p class="card-text">Beautiful rings all around</p>
         <a href="#" class="btn btn-primary">See Profile</a>
       </div>
     </div>
   </div>
    <div class="col-lg-4 col-md-4 col-12">
				<div class="card">
                <img class="card-img-top" src="image/card003.jpg" alt="Card image">
               <div class="card-body">
             <h4 class="card-title">olympus</h4>
           <p class="card-text">mighty Zeus</p>
         <a href="#" class="btn btn-primary">See Profile</a>
       </div>
     </div>
   </div>
  </div>
 </div>
</section>

<section class="my-5">
	    <div class="py-5">
		 <a href="services.php"> <h2 class="text-center">Gallery</h2> </a>
	      </div>
	       <div class="container-fluid">
		     <div class="row">
			  <div class="col-lg-4 col-md-4 col-12">
			  	<img src="image/G001.jpg" class="img-fluid pb-3">
			  </div>
			  <div class="col-lg-4 col-md-4 col-12">
			  	<img src="image/G002.jpg" class="img-fluid pb-3">
			  </div>
			  <div class="col-lg-4 col-md-4 col-12">
			  	<img src="image/G003.jpg" class="img-fluid pb-3">
			  </div>
			  <div class="col-lg-4 col-md-4 col-12">
			  	<img src="image/G004.jpg" class="img-fluid pb-3">
			  </div>
			  <div class="col-lg-4 col-md-4 col-12">
			  	<img src="image/G005.jpg" class="img-fluid pb-3">
			  </div>
			  <div class="col-lg-4 col-md-4 col-12">
			  	<img src="image/G006.jpg" class="img-fluid pb-3">
			  </div>
			</div>
		</div>
	</section>

<section class="my-5">
	    <div class="py-5">
		 <a href="services.php"> <h2 class="text-center">UserInfo</h2> </a>
	      </div>
	      <div class="w-50 m-auto">
	      	<form action="userinfo.php" method="post">
	      		<div class="form-group">
	      			<label>UserName</label>
	      			<input type="text" name="user" autocomplete="off" class="form-control">
	      			
	      		</div>
	      		<div class="form-group">
	      			<label>Email ID</label>
	      			<input type="text" name="email" autocomplete="off" class="form-control">
	      			
	      		</div>
	      		<div class="form-group">
	      			<label>Mobile Number</label>
	      			<input type="text" name="mobile" autocomplete="off" class="form-control">
	      			
	      		</div>
	      		<div class="form-group">
	      			<label>Comments</label>
	      			<textarea class="form-control" name="comments"></textarea>
	      			
	      		</div>
	      		  <button type="submit" class="btn btn-success mb-2">Submit</button>
	      	</form>
	      </div>
	  </section>

	  <footer>
	   <p class="p-3 bg-dark text-white text-center">NATION EARTH </p>
      </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
    </html>
    
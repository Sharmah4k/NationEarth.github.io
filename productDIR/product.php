 <!DOCTYPE html>
<html>

 <head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
</head>
<body >  	
<div >
   <nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top"><a class="navbar-brand" href="index.html">Nation Earth</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  ...<span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="product.php">Products</a>
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
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  
    


</nav>  
</div>
<div class="container mt-5 mb-3">
<div  class="row">
<?php


$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'mysiteuserdata');

$query ="SELECT  `Product_Name`, `Product_Image`, `Product_Price`, `Product_Discount` FROM `productsregdata` ORDER BY 	Product_ID ASC";
 
 $queryfire= mysqli_query($con,$query);
 $num = mysqli_num_rows($queryfire);
 if ($num > 0) {
  while ($product = mysqli_fetch_array($queryfire)) {
?>
<div  class="col-lg-3 col-md-3 col-sm-12 ">
<form>
	<div class="card  mt-3 ">
		<h6 class="card-title bg-info text-white"> <?php echo $product['Product_Name']; ?> </h6>

		<div class="card-body">
			<img src=" <?php echo $product['Product_Image']; ?>"alt="g" class="img-fluid">
			<h6 > &#8377; <?php echo $product['Product_Price']; ?> 
           <span>( <?php echo $product['Product_Discount']; ?> </span>% off)</h6>
           <h6 class="badge badge-#fff"> 4.8 <i class="fa fa-star-o fa-2x"></i></h6>
        
		</div>
		<div class="btn-group d-flex">
			<button class="btn btn-outline-danger flex-fill">add to cart</button><button class="btn btn-danger">Buy Now</button>
		</div>
	</div>
</form>
</div>

  <?php	
  }
 }

?>


</div>
</div>
</body>
</html>






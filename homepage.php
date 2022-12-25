<?php
include 'constants.php';

session_start();

$sql = "SELECT * FROM product";
$r = mysqli_query($con,$sql);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Mobidash</title>
	<style>
	.btn-secondary {
    color: black;
    background-color: #ffffff;
    border-color: #6c757d;
}
.nav-item a:hover {
    color: black;
    transform: scale(1.05);
	font-weight: bold;
}
	</style>
  </head>
  <body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Mobile Shopping</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" href="signup.html">Sign up</a>
        </li>
          <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    Categories
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="category.php#gm">Redmi</a></li>      
    <li><a class="dropdown-item" href="category.php#cv">Samsung</a></li>
    <li><a class="dropdown-item" href="category.php#cb">Vivo</a></li>
	<li><a class="dropdown-item" href="category.php#ub">Apple</a></li>
	<li><a class="dropdown-item" href="category.php#mb">One Plus</a></li>
  </ul>
</div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/sam offer.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/offer1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/offer.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container pt-5">
  <div class="row">
    <?php
    while ($row = mysqli_fetch_assoc($r)) {
    ?>
    <div class="col">
      <a href="product.php">
          <img src="img/<?php echo $row['Pimg']; ?>" alt="Snow" style="width: 100%" />
          <center>
            <p><?php echo $row['Pname']; ?></p>
            <p>₹ <?php echo $row['Pprice']; ?>/-</p>
          </center>
        </a>
    </div>
    <?php
    }
    ?>
  </div>
</div>
<footer class="page-footer font-small teal pt-4" style="margin-left: 20px;">
  <div class="container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-3 mt-md-0 mt-3">
        <h5 class="text-uppercase font-weight-bold" >About</h5>
        <a href="contact-us.html"><p>Contact Us</p></a>
        <a href><p>About Us</p></a>
        <a href><p>Stores</p></a>
      </div>
      <div class="col-md-3 mt-md-0 mt-3">
        <h5 class="text-uppercase font-weight-bold" >Help</h5>
        <a href><p>Payment</p></a>
        <a href><p>Shipping</p></a>
        <a href><p>Cancellation</p></a>
        <a href><p>Return</p></a>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase font-weight-bold">Policy</h5>
        <a href><p>Return Policy</p></a>
        <a href><p>Terms of Use</p></a>
        <a href><p>Security</p></a>
        <a href><p>Privacy</p></a>
      </div>
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase font-weight-bold">Registered Office Address</h5>
        <br>
        <p>123 Park Avenue <br>
        New York,NY 10170</p>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="index.html"> MobileShopping.com</a>
  </div>
</footer>
  </body>
</html>
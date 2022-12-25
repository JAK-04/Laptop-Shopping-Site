<?php

include 'constants.php';

session_start();

$sql = "SELECT * FROM product";
$r = mysqli_query($con, $sql);

?>

<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="webcss.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Mobidash</title>
</head>

<body>
   <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="img/slider1.jpg" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="img/slider2.jpg" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="img/slider3.jpg" class="d-block w-100" alt="...">
         </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
   </div>

   <a href="add_product.php">Add product</a>

   <div class="product">
      <div class="row row-cols-1 row-cols-md-2 g-4">
         <?php
         while ($row = mysqli_fetch_assoc($r)) {
         ?>
            <div class="col">
            <a href="prod_edit.php?id='<?php echo $row['Pid']; ?>'">
               <div class="card h-100">
                  <img src="img/<?php echo $row['Pimg']; ?>" class="card-img-top" style="width: 50%;margin-left: 170px;">
                  <div class="card-body">
                     <h5 class="card-title"><?php echo $row['Pname']; ?></h5>
                     <a href="delete.php?id='<?php echo $row['Pid']; ?>'">delete</a>
                  </div>
               </div>
            </a>
            </div>
         <?php
         }
         ?>
      </div>
   </div>
</body>
</html>
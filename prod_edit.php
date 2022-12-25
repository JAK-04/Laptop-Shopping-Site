<?php

session_start();

include 'constants.php';

if (isset($_GET['id'])) {
  $Ind = $_GET['id'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  include 'constants.php';

  $p_name = $_POST["pname"];
  $p_cat = $_POST["pcatagory"];
  $desc = $_POST["desc"];
  $qnt = $_POST["qnt"];
  $price = $_POST["price"];
  $img = $_POST["img"];


  $upd = "UPDATE `product` SET `Pname` = '$p_name', `Pcat` = '$p_cat', `Pdesc` = '$desc', `Pqnt` = '$qnt', `Pprice` = '$price', `Pimg` = '$img' WHERE `product`.`Pid` = $Ind;";
  $result = mysqli_query($con, $upd);

  if ($result) {
    header("Location: product_manage.php");
  }
}

$sql = "SELECT * FROM product WHERE Pid = $Ind ";
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

  <title>Add Product</title>

  <style>
    .btn-secondary {
      color: black;
      background-color: #ffffff;
      border-color: #6c757d;
    }

    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    button:hover {
      opacity: 1;
    }

    .cancelbtn {
      padding: 14px 20px;
      background-color: #f44336;
    }

    .cancelbtn,
    .signupbtn {
      float: left;
      width: 50%;
    }

    .container {
      padding: 16px;
    }

    .clearfix::after {
      content: "";
      clear: both;
      display: table;
    }

    #eml,
    #pas,
    #cpas {
      color: red;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <?php

  while ($row = mysqli_fetch_assoc($r)) {
  ?>
    <center>
      <div class="row row-cols-2 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="img/<?php echo $row['Pimg'];?>" height="400" class="card-img-top " alt="...">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $row['Pname']; ?> </h5><br>
              <h5 class="card-title text-center"><?php echo $row['Pcat']; ?> </h5><br>
              <h5 class="card-title text-center"><?php echo $row['Pprice']; ?> </h5><br>
              <h5 class="card-title text-center"><?php echo $row['Pqnt']; ?> </h5><br>
              <p class="card-text"><?php echo $row['Pdesc']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </center>
  <?php
  }
  ?>
  <hr>
  <div class="bg" style="height: 1150px;">
    <br><br>
    <div class="main" style="height: 1050px;">
      <center>
        <h3 class="lt">Add Product</h3>
      </center>
      <form name="register" class="form" action="prod_edit.php?id='<?php echo $row['Pid']; ?>'" onsubmit="return formvalidate()" method="POST">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Name</label>
          <input type="text" style="width:410px" class="form-control" id="pname" name="pname">
          <span id="vpname"></span>
        </div><br>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Catagory</label>
          <input type="text" style="width:410px" class="form-control" id="pcatagory" name="pcatagory">
          <span id="vpcatagory"></span>
        </div><br>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Description</label>
          <input type="text" style="width:410px" class="form-control" id="desc" name="desc">
          <span id="vprocessor"></span>
        </div><br>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Qnt</label>
          <input type="text" style="width:410px" class="form-control" id="qnt" name="qnt">
          <span id="vram"></span>
        </div><br>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Price</label>
          <input type="text" style="width:410px" class="form-control" id="price" name="price">
          <span id="vrom"></span>
        </div><br>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Pictures</label>
          <input type="file" class="form-control" id="img" name="img">
          <span id="vscreen"></span>
        </div><br>
        <div class="sub">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
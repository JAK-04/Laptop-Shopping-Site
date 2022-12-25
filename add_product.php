<?php

    session_start();
	
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'constants.php';

    $p_name = $_POST["pname"];
    $p_cat = $_POST["pcatagory"];
    $desc = $_POST["desc"];
    $qnt = $_POST["qnt"];
    $price = $_POST["price"];
    $img = $_POST["img"];

    $ins = "INSERT INTO `product` (`Pname`, `Pcat`, `Pdesc`, `Pqnt`, `Pprice`, `Pimg`) VALUES ('$p_name', '$p_cat', '$desc','$qnt', '$price','$img')";
    $result = mysqli_query($con,$ins);

    if($result)
    {
        header("Location: product_manage.php");
    }
}

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
    #eml,#pas,#cpas{
		color:red;
		font-weight: bold;
		}
  </style>
  </head>
  <body>
	<hr>
	<div class="bg" style="height: 1150px;">
	<br><br>
		<div class="main" style="height: 1050px;">
			<center><h3 class="lt">Add Product</h3></center>
			  <form name ="register" class="form" action="add_product.php" onsubmit="return formvalidate()" method="POST">
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
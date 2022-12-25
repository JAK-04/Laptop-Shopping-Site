<?php

$login = false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'constants.php';

    $mail = $_POST["mail"];
    $pass = $_POST["pass"];

    $read = "SELECT * FROM `user` WHERE `Email` = '$mail' AND `Password` = '$pass'";
    $result = mysqli_query($con,$read);

	$adm = "admin444@mail.con";

    $num = mysqli_num_rows($result);
    if($num == 1)
    {
		session_start();
		$login = true;
		$_SESSION['name'] = $mail;
		if($mail == $adm)
		{
			$_SESSION['adminlogincheck'] = true;
			header("Location: product_manage.php");
		}
		else
		{
			$_SESSION['logincheck'] = $login;
			header("Location: homepage.php");
		}
			
    }
    else{
        echo "<span style='float:left;color:red; margin-left:600px;margin-top:400px;'>Invalid User.</span>";
    }
}
?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<style>
		form {
  border: 3px solid #f1f1f1;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
button:hover {
  opacity: 0.8;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}
img.avatar {
  width: 20%;
  border-radius: 40%;
}
.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}
	</style>
</head>
<body>

	<form action="login.php" method="post" method="POST">
  <div class="imgcontainer">
    <img src="LOGO.png" alt="Avatar" class="avatar">
  </div>
  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Username" name="mail" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  
</form>
</body>
</html>
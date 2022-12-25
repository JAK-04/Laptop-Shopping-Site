<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'constants.php';

    $mail = $_POST["mail"];
    $pass = $_POST["pass"];

    $ins = "INSERT INTO `user` (`Email`, `Password`) VALUES ('$mail','$pass')";

    $result = mysqli_query($con,$ins);

    if($result)
    {
        header("Location: login.php");
    }
}
?>

<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
  <script>
    function validate() {
      var email = document.getElementById("email").value;
      var pasword = document.getElementById("pass").value;
      var cpasword = document.getElementById("cpass").value;
      if (email == "") {
        document.getElementById("eml").innerHTML = "Please Enter Your Email";
        return false;
      }
      var emailformat = /^[a-z A-Z 0-9 \_\.\-]+\@[a-z A-Z]{2,6}[.]{1}[a-z]{2,4}[.]{0,1}[a-z]{0,2}$/;
      if (emailformat.test(email)) {
        document.getElementById("eml").innerHTML = "";
      } else {
        document.getElementById("eml").innerHTML = "Please Enter correct email format";
        return false;
      }
      var pass = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,12}$/;
      let result = (pasword).match(pass);
      if (!result) {
        document.getElementById("pas").innerHTML = "Please enter Minimum 8 characters at least 1 Alphabet and 1 Number";
        return false;
      } else {
        document.getElementById("pas").innerHTML = "";
      }
      if (cpasword == "") {
        document.getElementById("cpas").innerHTML = "Please Enter Your Confirm Password";
        return false;
      }
      if ((cpasword.length < 1) || (cpasword.length > 12)) {
        document.getElementById("cpas").innerHTML = "Please Enter Your Password between 1 to 12 characters";
        return false;
      }
      if (pasword !== cpasword) {
        document.getElementById("cpas").innerHTML = "password is not matched with confirm password.";
        return false;
      }
    }
  </script>
</head>

<body>
  <form action="register.php" style="border:1px solid #ccc" onsubmit="return validate()" method="POST">
    <div class="container">
      <h1>Sign Up</h1>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="mail" id="email">
      <span id="eml"></span>
      <br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" id="pass">
      <span id="pas"></span>
      <br>
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="cpass" id="cpass">
      <span id="cpas"></span>
      <br>
      <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
        <p>already have an account? click here to <a href="login.php" style="color:dodgerblue">login</a>.</p>
      </div>
    </div>
  </form>
</body>

</html>
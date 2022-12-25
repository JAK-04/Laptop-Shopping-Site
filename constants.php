<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "website";

$con = mysqli_connect($server,$user,$pass,$db);

if(!$con)
{
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection Successfull";

?>
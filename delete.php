<?php

session_start();

include 'constants.php';

if(isset($_GET['id']))
{
    $Ind = $_GET['id'];
    echo "This is executed";
}

$del = "DELETE FROM product WHERE Pid = $Ind";
mysqli_query($con,$del);

?>
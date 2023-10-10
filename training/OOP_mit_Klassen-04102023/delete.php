<?php

include('function.php');
include('Mysql.php');

$conn = new Mysql();



if($_POST["save"] == "Senden")
{
    $conn->delete($res);
    header("Location: index.php");
}





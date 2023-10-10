<?php

include('function.php');

$conn = createMySQLConnection();


if($_POST["save"] == "Senden")
{
    foreach ($_POST as $key => $value) {

        if ($key == "save") continue;
        
       $res = $conn->query("DELETE FROM studenten WHERE studenten.martnummer =".$key);

    }
}


header("Location: index.php");


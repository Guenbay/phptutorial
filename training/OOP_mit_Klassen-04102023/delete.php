<?php

include('MySql.php');

//$conn = createMySQLConnection();
$conn = new Mysql();

if($_POST["save"] == "Senden")
{
    foreach ($_POST as $key => $value) 
    {
        if ($key == "save") continue;
        
        $res = $conn->delete("DELETE FROM studenten WHERE studenten.id =".$key);    
    }
}


header("Location: index.php");


<?php

//Verbindung mit dem Server aufbauen:
/* 
1. erstelle eine verbundung $conn=mysqli_connect($serverName,$userName,$password);
2. wenn alles ok, dann wähle die datenbnaknamen: $conn->select_db("bankomat");
*/

function createMySQLConnection()

{
    $serverName='localhost';
    $userName='root';
    $password='';

    $conn=mysqli_connect($serverName,$userName,$password);
    if(!$conn)
        {
            die('There is problem connection'.mysqli_connect_error());
        }

    $conn->select_db("studium");
    return $conn;
}

function getIdUrl()
{
    $serverName='localhost';
    $userName='root';
    $password='';

    $conn=mysqli_connect($serverName,$userName,$password);
    $conn->select_db("studium");
    
    $res = $conn->query("SELECT * FROM studenten WHERE martnummer=".$_GET['id']);
    $data = $res->fetch_assoc();
    return $data;
}

?>
<?php

include('function.php');

$conn = createMySQLConnection();

//Erstelle Student
if(isset($_POST["vorname"]))
    $resStudent= $conn->query("INSERT INTO studenten (id, martnummer, vorname, nachname, durchschnitt) VALUES (NULL, '$_POST[martnummer]', '$_POST[vorname]', '$_POST[nachname]', '$_POST[durchschnitt]')");

//Erstelle Kurs
if(isset($_POST["kursname"]))
    $resKurs = $conn->query("INSERT INTO kurse (id, kurscode, kursname) VALUES (NULL,'".$_POST['kurscode']."', '".$_POST['kursname']."')");
?>
<?php
//Erstellen eines assoziatives Array, das Informationen zu Studenten enthält 
//(z. B. Name, Alter, Note). 
$student1 = array("Name"=>"Ihssas", "Alter"=>"30", "Note"=>"2");
$student2 = array("Name"=>"Ahssas", "Alter"=>"32", "Note"=>"3");

//Nummerisches Array, Liste von Studenten
$listStudenten = array($student1, $student2);

//Funktion, weiteren Studenten hinzufügen in Liste
function addStudent($parameterName, $parameterAlter, $parameterNote, $parameterListe)
{
    $azArray = array("Name"=>$parameterName, "Alter"=>$parameterAlter, "Note"=>$parameterNote);
    
    array_push($parameterListe, $azArray);
    return $parameterListe;
}

$name = "Hanebambel";
$alter = "200";
$note = "9";


$newList = addStudent($name, $alter, $note, $listStudenten);
var_dump($newList);


?>
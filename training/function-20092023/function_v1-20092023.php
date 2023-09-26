<?php
//Erstellen eines assoziatives Array, das Informationen zu Studenten enthält 
//(z. B. Name, Alter, Note). 
$student1 = array("Name"=>"Ihssas", "Alter"=>"30", "Note"=>"2");
$student2 = array("Name"=>"hassas", "Alter"=>"32", "Note"=>"3");

//Nummerisches Array, Liste von Studenten
$listStudenten = array($student1, $student2);

//Funktion, weiteren Studenten hinzufügen in Liste
function addStudent($listStudenten, $student)
{
    array_push($listStudenten, $student);
    return $listStudenten;
}

$student3 = array("Name"=>"Ahssas", "Alter"=>"32", "Note"=>"3");

$listStudenten = addStudent($listStudenten, $student3);
var_dump($listStudenten);


?>
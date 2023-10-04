<?php

$autos = array(
    array(
        "Marke" => "Toyota",
        "Modell" => "Camry",
        "Baujahr" => 2020,
        "Farbe" => "Blau"
    ),
    array(
        "Marke" => "Honda",
        "Modell" => "Civic",
        "Baujahr" => 2019,
        "Farbe" => "Rot"
    ),
    array(
        "Marke" => "Ford",
        "Modell" => "Mustang",
        "Baujahr" => 2022,
        "Farbe" => "Schwarz"
    )
);
//Ausgabe Array Auto-Marke:
//echo $autos[0]["Marke"];
//echo $autos[0]["Modell"];
//echo $autos[0]["Baujahr"];
//echo $autos[0]["Farbe"];

//Lösung mit Forschleife
for ($i=0; $i < count($autos); $i++)
{
    echo "FOR AUTOS: ";
    echo $autos[$i]["Marke"]."\n";
}

//Lösung mit FOREACH-Schleife v1
foreach ($autos as $key => $value) {
    echo "FOREACH AUTOS: ";
    echo $value["Marke"]."\n";
}

//Lösung mit FOREACH-Schleife v2
foreach ($autos as $key => $value)
{
    echo "Marke: ".$autos[$key]["Marke"]."\n";   
    echo "Modell: ".$autos[$key]["Modell"]."\n";   
    echo "Baujahr: ".$autos[$key]["Baujahr"]."\n";   
    echo "Farbe: ".$autos[$key]["Farbe"]."\n";   

   
}
?>
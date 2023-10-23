**Do: Objektorientierte Programmierung (OOP)**
* Aufgabe 1: Erstellen Sie eine Klasse "Auto" mit Eigenschaften wie Marke, Modell und Baujahr. Erstellen Sie dann ein Objekt dieser Klasse und geben Sie seine Eigenschaften aus.
* Aufgabe 2: Implementieren Sie eine Klasse "Rechner", die Grundrechenarten wie Addition, Subtraktion, Multiplikation und Division durchführen kann. Testen Sie die Klasse mit verschiedenen Berechnungen.
* Aufgabe 3: Erstellen Sie eine Klasse "Benutzer" mit Eigenschaften wie Benutzername und Passwort. Implementieren Sie Methoden, um Benutzer anzumelden und abzumelden.

<?php
include ("Aufgabe_Do_Rechner.php");

class Aufgabe_Do_Auto
{
    public $marke = "Soda";
    public $modell = "Via";
    public $baujahr = "2014";

    public function __construct()
    {
        $marke = "Automarke ";
        $modell = "Automodell ";
        $baujahr = "Autobaujahr";

        $this->marke = $marke;
        $this->modell = $modell;
        $this->baujahr = $baujahr;
    }

    
}

$auto = new Aufgabe_Do_Auto();
$rechner = new Aufgabe_Do_Rechner();

echo $auto->marke, $auto->modell, $auto->baujahr."\n" ;

echo "Addition (5 + 6): ".$rechner->addition(5,6)."\n";
echo "Subtraktion (2023, 1993): ".$rechner->subtraktion(2023,1993)."\n";
echo "Multiplikation (7 * 8): ".$rechner->multiplikation(7,8)."\n";
echo "Division (25 / 5): ".$rechner->division(25,5)."\n";

?>
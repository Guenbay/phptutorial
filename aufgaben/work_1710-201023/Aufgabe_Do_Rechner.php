**Do: Objektorientierte Programmierung (OOP)**
* Aufgabe 1: Erstellen Sie eine Klasse "Auto" mit Eigenschaften wie Marke, Modell und Baujahr. Erstellen Sie dann ein Objekt dieser Klasse und geben Sie seine Eigenschaften aus.
* Aufgabe 2: Implementieren Sie eine Klasse "Rechner", die Grundrechenarten wie Addition, Subtraktion, Multiplikation und Division durchführen kann. Testen Sie die Klasse mit verschiedenen Berechnungen.
* Aufgabe 3: Erstellen Sie eine Klasse "Benutzer" mit Eigenschaften wie Benutzername und Passwort. Implementieren Sie Methoden, um Benutzer anzumelden und abzumelden.

<?php
class Aufgabe_Do_Rechner
{
    public function addition($zahl1, $zahl2)
    {
       $addition = $zahl1 + $zahl2;
       return $addition;
    }

    public function subtraktion($zahl1, $zahl2)
    {
        $subtraktion = $zahl1 - $zahl2;
        return $subtraktion;
    }

    public function multiplikation($zahl1, $zahl2)
    {
        $multipl = $zahl1 * $zahl2;
        return $multipl;
    }

    public function division($zahl1, $zahl2)
    {
        $division = $zahl1 / $zahl2;
        return $division;
    }
}

?>
<?php

class Kurs
{
    public $kursname;
    public $kurscode;
    /*public $teilnehmer = 10; //**Aufgabe 8 Wenn Kurs ausgebucht ist...***/
    
    public function getKursCode()
    {
        return $this->kurscode;
    }
    
    public function setKurs($kursname, $kurscode)
    {
        $this->kursname = $kursname;
        $this->kurscode = $kurscode;
    }

    /*//PSEUDO CODE ----BEGIN----
    public function kursAnmelden($kursname, $teilnehmer)
    {

        //$teilnehmer = 10
        wenn neue Teilnehmer hinzukommt, dann $teilnehmer -1
        if $platz == 0 
        echo "Ausgebucht"

        //$teilnehmer = 0
        $platz = count($teilnehmer);
        if ($platz >= 10)
        {
            echo "Kurs ist bereits ausgebucht.";
        }

    }

    Implementieren Sie Validierungsregeln für die Eingabe von Daten, um sicherzustellen, dass die Daten konsistent und korrekt sind.
    
    Validierung = Prüft ob etwas richtig ist
    Validierungsregeln = Regel um zu Prüfen

    Abfrage = if
    Wenn eingabe von Daten == KORREKT z.B. >> "TRUE"
    {
        $this->Daten = $Daten
    }
    WENN NICHT 
//PSEUDO CODE ----ENDE----*/

}

?>
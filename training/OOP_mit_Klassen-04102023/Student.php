<?php

class Student extends Kurs
{

    public $vorname;
    public $nachname;
    public $martnr;
    public $noten;
    private $durchschnitt; 

    //function __construct($nachname, $vorname, $martnr)
    //{
    //    $this->name = "Student";
    //    $this->vorname = $vorname;
    //    $this->nachname = $nachname;
    //    $this->martnr = $martnr;
    //}

    public function getMartnr()
    {
        return $this->martnr;
    }

    public function setName($vorname, $nachname)
    {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }

    public function setMartnr($martnr)
    {
        $this->martnr = $martnr;
    }

    /* -- PSEUDO CODE für Aufgabe 3 06.10.2023 mit Lina und Ziko
    private function noten($noten, $fach)
    {
        if ($fach == "Web")
        {
            $this->noten = $noten;
        }

        if ($fach == "App")
        {
            $this->note = $noten;
        }
        
    }

    public function durchschnitt($id, $noten, $durchschnitt)
    {
        //addiere alle noten($noten) eines Studenten($id) zusammen und 'teile sie durch anzahl der fächer = $durchschnitt'
    }
    //PSEUDO CODE ----ENDE--- */
}

?>
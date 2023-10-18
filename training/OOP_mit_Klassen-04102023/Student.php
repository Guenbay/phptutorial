<?php

class Student
{

    public $vorname;
    public $nachname;
    public $martnr;

    public $durchschnitt;

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
    
    public function durschnitt($durchschnitt)
    {
        
        $this->durschnitt = $durchschnitt;

    }
}

?>
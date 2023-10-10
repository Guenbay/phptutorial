<?php

class Kurs
{
    public $kursname;
    public $kurscode;
    
    public function getKursCode()
    {
        return $this->kurscode;
    }
    
    public function setKurs($kursname, $kurscode)
    {
        $this->kursname = $kursname;
        $this->kurscode = $kurscode;
    }


}

?>
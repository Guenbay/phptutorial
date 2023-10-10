<?php 

class GraduateStudent extends Student
{
    //spezifische Eigenschaften
    public $eigenschaft1 = "lesen";
    public $eigenschaft2 = "sprechen";
    public $eigenschaft3 = "schreiben";

    //Spezifische Methoden für Graduate-Student
    public function spezificMethod($eigenschaft1, $eigenschaft2, $eigenschaft3)
    {
        $this->eigenschaft1 = $eigenschaft1;
        $this->eigenschaft2 = $eigenschaft2;
        $this->eigenschaft3 = $eigenschaft3;
    }

    //**AUFGABE 4 - AM ENDE ** -> Zeigen Sie den Einsatz von Vererbung und Polymorphismus
    public function Einsatz($noten) 
    {
        echo "Zeige Einsatz von Vererbung (Note)".$this->noten;
    }

}
?>
<?php

class Bankkonto 
{
    
public $name;
public $kntnr;
private $kontostand = 0;

public function getkontostand()
    {
        return $this->kontostand;
    }

public function buchung($betrag, $art)
    {
        
        if ($art == "einzahlung")
        {
            $this->kontostand += $betrag;
            return $this->kontostand;
        }

        if ($art == "auszahlung" && $this->kontostand - $betrag >= 0)
            {

                $this->kontostand -= $betrag;
                return $this->kontostand;
                
            }
            else if ($art == "auszahlung" && $this->kontostand - $betrag <= 0)
            {
                echo "Auszahlung nicht möglich. ";
            }
   }   
   
//   public function senden($kntnr, $betrag)
//   {
//    
//IDEE 1:
//    $this->kntnr ? str_replace($this->kontostand, $this->kontostand, $this->kontostand +=$betrag) : "Fehler";
//----------------
//IDEE 2:
//      if ($kntnr == $this->kntnr)
//        {
//            $neuerKontostand = $this->kontostand -= $betrag;
//            echo "Überweisung erfolgreich. \n";
//            return $neuerKontostand;
//        } else {
//            echo "Senden fehlgeschlagen - Falsches Konto... \n";
//            
//        }
//        
//        //str_replace($kntnr, $this->kontostand, $this->kontostand +=$betrag); 
//     }

}         
?>
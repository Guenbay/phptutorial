<?php

class Girokonto extends Bankkonto
{
    public function einzahlung($betrag)
    {
        $this->buchung($betrag, "einzahlung");
    }

    public function auszahlung($betrag)
    {
        $this->buchung($betrag, "auszahlung");
    }

//    public function ueberweisung($kntnr, $betrag)
//    {
//        $this->senden($kntnr, $betrag); 
//    }

}

?>
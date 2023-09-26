Übung 1:
Erstellen Sie ein assoziatives Array, das Informationen zu Büchern enthält (z. B. Titel, Autor). 
Implementieren Sie Funktionen, um ein Buch hinzuzufügen, ein Buch zu aktualisieren, ein Buch zu löschen und alle Bücher anzuzeigen.


<?php
    //Definiere leeres Bücherregal
    $buecher = array();

    //Erstelle Funktion "Buch hinzufügen"
    function addBook($book, $buecher)
    {
        array_push($buecher, $book);
        return $buecher;
    }

    //Erstelle Funktion "Buch löschen"
    function deleteBook($index, $buecher)
{
    $tmp = array();
    
    for ($i=0; $i < count($buecher); $i++) { 
    
        if ($index == $i)
        {
            continue;
        }
        
        $tmp[] = $buecher[$i];
  }

  return $buecher;

}

    //Erstelle Funktion "Buch Bearbeiten"
    function editBook($data, $i, $buecher)
    {
        foreach ($data as $key => $value) {
            if ($key == "titel")
            {
                $buecher[$i]["titel"] = $value;
            }
            if ($key == "Autor")
            {
                $buecher[$i]["Autor"] = $value;
            }
        }
        return $buecher;
    }

    //Ausführung der Funktion "Buch hinzufügen" mit Array titel und Autor
    // Übergabe des Arrays $book in $buecher
    $buecher = addBook(array("titel"=>"Blackout", "Autor"=>"Ivan Gartsev"), $buecher);
    $buecher = addBook(array("titel"=>"Geschmiedet in Feuer und Magie", "Autor"=>"Daniel Fox"), $buecher);
    $buecher = addBook(array("titel"=>"Das tibetische Buch vom Leben und vom Sterben – Ein Schlüssel zum tieferen Verständnis von Leben und Tod", "Autor"=>"Sogyal Lakar Rinpoche"), $buecher);
    $buecher = addBook(array("titel"=>"Iron Flame - FLammengeküsst", "Autor"=>"Rebecca Yarros"), $buecher);
    $buecher = addBook(array("titel"=>"Ihssas - Gefühlvolle Emotion", "Autor"=>"Lingun"), $buecher);

    //Ausführung der Funktion "Buch entfernen"
    $buecher = deleteBook(2, $buecher);

    //Ausführung der Funktion "Buch ändern"
    $buecher = editBook(array("Autor"=>"Fox Daniel"), 1, $buecher);

    
    //Ausgabe in Konsole der Bücher
    for ($i=0; $i < count($buecher); $i++) 
    { 
        echo "Buchindex: ".$i."\n";
        
        foreach ($buecher[$i] as $key => $value) 
        {
            echo $key. ": ".$value."\n";
        }
    }


?>

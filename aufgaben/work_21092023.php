1. Hallo Welt:
Erstelle ein PHP-Skript, das "Hallo Welt!" auf dem Bildschirm ausgibt.
<?php
 
 echo "Hallo Welt!";

?>

2. Variablen und Ausgabe:
Erstelle eine Variable mit dem Namen "name" und speichere deinen Namen darin. Gib den Wert der Variable auf dem Bildschirm aus.
<?php

    $name = "Günbay";
    echo $name;

?>

3. Rechnen mit Variablen:
Erstelle zwei Variablen, eine für die Zahl 5 und eine für die Zahl 3. Addiere sie und gib das Ergebnis aus.

<?php

    $zahl1 = 5;
    $zahl2 = 3;
    $addition = $zahl1 + $zahl2;
    echo $addition;

?>

4. Bedingungen:
Schreibe ein PHP-Skript, das prüft, ob eine Zahl größer oder kleiner als 10 ist, und eine entsprechende Nachricht ausgibt.

<?php

    for ($i=0; $i <= 20; $i++)   
    {
        if ($i < 10) {
            echo "Zahl ".$i." ist kleiner als 10\n";
        }
        else if ($i == 10)
        {
            echo "Zahl ".$i." ist gleich 10\n";
        }
        else
            echo "Zahl ".$i." ist groeßer als 10\n";
    }
    
?>

5. Schleifen:
a. Schreibe eine Schleife, die die Zahlen von 1 bis 5 ausgibt.
b. Schreibe eine Schleife, die die Zahlen von 10 bis 1 abwärts ausgibt.

<?php

    echo "Zahl 1 bis 5:\n";
    for ($i=0; $i <= 5; $i++)
    {
        echo $i." ";
        
    }
    
    echo "\nZahl 10 bis 1:\n";
    for ($i=10; $i >=1; $i--)
    {
        echo $i." ";
    }
?>

6. Arrays:
a. Erstelle ein numerisches Array mit den Zahlen von 1 bis 5 und gib es aus.
b. Erstelle ein assoziatives Array mit den Namen und Alter von drei Personen und gib es aus.

<?php

    $numArray = array(1,2,3,4,5);
    var_dump($numArray);

    $person1 = array("Name"=>"Günbay", "Alter"=>"30");
    $person2 = array("Name"=>"Ihssas", "Alter"=>"29");
    $person3 = array("Name"=>"Yabnüg", "Alter"=>"31");
    $azArray = array($person1, $person2, $person3);
    var_dump($azArray);
?>

7. Funktionen:
a. Schreibe eine Funktion, die zwei Zahlen addiert und das Ergebnis zurückgibt.
b. Schreibe eine Funktion, die prüft, ob eine Zahl gerade oder ungerade ist, und eine entsprechende Nachricht zurückgibt.

<?php
    function addition($a, $b)
    {
        $sum = $a + $b;
        return $sum;
    }

    function check($number)
    {
        if ($number % 2 != 0)
        {
            echo "Die Zahl ".$number." ist ungerade";
        } 
        else
        {
            echo "Die Zahl ".$number." ist gerade";
        }

    }

    echo "Ergebnis der Addition: ".addition(4,4)."\n";
    echo check(4);
?>
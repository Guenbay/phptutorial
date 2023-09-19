Aufgabe 1: Variablendeklaration und -ausgabe
Erstellen Sie eine PHP-Variable, die eine Ganzzahl, eine Zeichenkette und einen booleschen Wert deklariert 
und diese auf dem Bildschirm ausgibt.

<?php

//Variable Ganzzahl, String und boolean
$a = 10;
$b = 20;
$myVar = 18;
$myString = "Teilnehmer";
$myBoolTrue = "Abfrage ist TRUE";
$myBoolFalse = "FALSE";

//Ausgabe
echo "Das Alter von " ,$myString, " ","ist gleich: " ,$myVar, "\n";
echo "10 + 20 = " , ($a + $b), "\n";

//if-Schleife für boolische Abfrage
if ($a == $b)
{
    echo "10 ist gleich 20 = Falsch";
}
else 
{
    echo $myBoolFalse,"\n";
    
} 

//(Condition) ? (Statement1) : (Statement2);
$bool = ($b >= $a && $myVar <= $b) ? $myBoolTrue : $myBoolFalse;
echo $bool;
?>

Aufgabe 3: Zeichenkettenoperationen
Erstellen Sie eine PHP-Funktion, die zwei Zeichenketten miteinander konkateniert und das Ergebnis ausgibt.
<?php
//Variabeln Definieren
    $firstString = "Hallo";
    $secondString = "Welt";
    $first = "Servus ";
    $second = "München";
    $twoStrings = "$firstString$secondString";
    $twoStringsTwo = $first.$second;
//Ausgabe
    echo $twoStrings, "\n";
    echo $twoStringsTwo;
?>

Aufgabe 9: Datum und Zeit
Erstellen Sie ein PHP-Skript, das das aktuelle Datum und die aktuelle Uhrzeit ausgibt.
<?php
//Standard-Zeitzone setzen, die verwendet werden soll.
//date_default_timezone_set('UTC');

//Variante 1
    $date = date("D M Y| d.m.Y");
    $time = date("H:m:s");
    echo "Datum: ", $date," ", "Uhrzeit: ", $time, "\n";

//Variante 2
    echo "Datum: ", date("D M | d.m.Y"), "\n";
    echo "Uhrzeit: ", date("H:m:s"), "\n";
    echo "Wochentag, Kalenderwoche: ", date("w, W");
?>

Aufgabe 12: Zeichenkettenmanipulation
Schreiben Sie ein PHP-Skript, das eine Zeichenkette deklariert 
und dann die Anzahl der Zeichen in der Zeichenkette sowie die umgekehrte Zeichenkette ausgibt.
<?php
//Definiere Zeichenkette und Zeichen-Zähler 
    $string = "Ihssas";
    $count = strlen($string);
//Ausgabe
    echo "Diese Zeichenkette hat ", $count , " Zeichen", "\n";
    echo "Umgekehrte Zeichenkette: ", strrev($string), "\n";
    echo "Mein Name umgekehrt: ", strrev("GUENBAY");

?>

Aufgabe 15: Bedingte Anweisungen mit Switch
Schreiben Sie ein PHP-Skript, das den Wochentag basierend auf einer Ganzzahl 
(1 für Montag, 2 für Dienstag usw.) mithilfe einer Switch-Anweisung ermittelt und ausgibt.

<?php

//Definiere zähler $i=Wochentag >>date("w")<< 
//Für $i switch case 1-7

$i = date("w");
    switch ($i):
        case 1:
            echo "Montag";
            break;
        case 2:
            echo "Dienstag";
            break;
        case 3:
            echo "Mittwoch";
            break;
        case 4:
            echo "Donnerstag";
            break;
        case 5:
            echo "Freitag";
            break;
        case 6:
            echo "Samstag";
            break;
        case 7:
            echo "Sonntag";
            break;
        default:
            echo "Kein Wochentag gefunden";
    endswitch;

?>


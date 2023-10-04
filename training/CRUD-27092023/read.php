<?php
include('Bankkonto.php');
include('Girokonto.php');
include('Sparbuch.php');
include('functions.php');

//verbinde dich mit einer Datenbank und hole den Kontostand
/*
1. Inkludiere die function.php ein um eine verbundung zum MySQL-Server und der Datenbank ("bankomat") zu erstellen;
2. erstelle Variable $conn um Verbindungsaufbau nutzen zu können.
3. query abfeuern: $res = $conn->query("SELECT * FROM accounts (id, firstname, ....);
4. bekommen wir eine resource $res
    verarbeiten wir die Ergebnisse der Datenbankabfrage while ($row = $res->fetch_array()){var_dump($row);}
5. 
*/

$conn = createMySQLConnection();

$res = $conn->query("SELECT * FROM accounts");


?>

<html>
    <head>
    </head>
    <body>
        <p><h1>Kunden einlesen</h1></p>
        <ul>
        <?php
        while ($row = $res->fetch_assoc())
        {
            echo "<li>".$row["id"]."-".$row["firstname"]."-".$row["surename"].$row["email"]."</li>";
        }
        ?>
        </ul>


    </body>
</html>

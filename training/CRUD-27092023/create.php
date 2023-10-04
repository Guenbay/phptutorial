<?php
include('Bankkonto.php');
include('Girokonto.php');
include('Sparbuch.php');
include('functions.php');

//verbinde dich mit einer Datenbank und mache einen Eintrag in eine
/*
1. füge die function.php ein um eine verbundung zum MySQL-Server und der Datenbank ("bankomat") zu erstellen;
2. query abfeuern: $res = $conn->query("CREATE INTO accounts(id, firstname, ....) VALUES (NULL, '".$POST_['fistname']."',....);
4. bekommen wir eine resource $res
5. verarbeiten wir die Ergebnisse der Datenbankabfrage while ($row = $res->fetch_array()){var_dump($row);}
*/
$conn = createMySQLConnection();

if(isset($_POST["email"]))
  $res = $conn->query("INSERT INTO accounts (firstname, surename, email, girokonto_id, sparbuch_id) VALUES ('".$_POST['firstname']."', '".$_POST['surename']."', '".$_POST['email']."', NULL, NULL)");


$vorhandeneKunden = $conn->query("SELECT * FROM accounts");

?>

<html>
    <head>
    </head>
    <body>
        <p><h1>Kunden anlegen</h1></p>
        <form action="create.php" method="POST">
            <input type="text" placeholder="Vorname" name="firstname"/>
            <input type="text" placeholder="Nachname" name="surename"/>
            <input type="text" placeholder="E-Mail" name="email"/>
            <input type="submit" value="Erstellen"/>
        </form>

        <p><h1>Vorhandene Kunden</h1></p>
        <ul>
        <?php
        while ($row = $vorhandeneKunden->fetch_assoc())
        {
            echo "<li>".$row["id"]."-".$row["firstname"]."-".$row["surename"].$row["email"]."</li>";
        }
        
        ?>
        </ul>

    </body>
</html>

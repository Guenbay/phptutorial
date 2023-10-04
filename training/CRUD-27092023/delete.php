<?php
include('Bankkonto.php');
include('Girokonto.php');
include('Sparbuch.php');
include('functions.php');

$conn = createMySQLConnection();

if(isset($_POST["id"]))
$kundenLoeschen = $conn->query("DELETE FROM accounts WHERE accounts.id =".$_POST["id"]);

$vorhandeneKunden = $conn->query("SELECT * FROM accounts");

?>
<html>
    <head>
    </head>
    <body>
        
        <p><h1>Kunden einlesen</h1></p>
        <ul>
        <?php
        while ($row = $vorhandeneKunden->fetch_assoc())
        {
            echo "<li>".$row["id"]."-".$row["firstname"]."-".$row["surename"].$row["email"]."</li>";
        }
        ?>
        </ul>
        
        <p><h1>Kunden Löschen</h1></p>
        <form action="delete.php" method="POST">
            <input type="text" placeholder="geben sie eine id an" name="id"/>
            <input type="submit" value="Löschen" name=accounts.id/>
        </form>
    </body>
</html>
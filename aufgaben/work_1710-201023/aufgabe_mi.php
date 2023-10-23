**Mi: Konstanten und Datenbanken**
* Aufgabe 1: Definieren Sie eine Konstante, die die maximale Anzahl von Verbindungen zu einer Datenbank festlegt. 
    Verwenden Sie die Konstante dann, um auf die Datenbank zuzugreifen.
* Aufgabe 2: Erstellen Sie eine MySQL-Datenbank und eine Tabelle, um Benutzerdaten zu speichern. 
    Schreiben Sie ein PHP-Skript, um Daten in die Tabelle einzufügen.
* Aufgabe 3: Schreiben Sie ein PHP-Skript, das Daten aus der Datenbank abruft und auf der Webseite anzeigt.

<?php
//AUFGABE 1
function createMySQLConnection()
{
    $serverName='localhost';
    $userName='root';
    $password='';

    $conn=mysqli_connect($serverName,$userName,$password);
    if(!$conn)
        {
            die('There is problem connection'.mysqli_connect_error());
        }

    $conn->select_db("test");
    return $conn;
}

$conn = createMySQLConnection();
if(isset($_POST["email"]))
$conn->query("INSERT INTO `abenutzer` (`id`, `vorname`, `nachname`, `email`) VALUES (NULL, '$_POST[vorname]', '$_POST[nachname]', '$_POST[email]')");
$showAll = $conn->query("SELECT * FROM abenutzer");


?>

<html>
    <head></head>
    <body>
        <h1>Benutzerdaten Einfügen</h1>
        <form action="aufgabe_mi.php" method="POST">
            <input type="text" placeholder="vorname" name="vorname">
            <input type="text" placeholder="nachname" name="nachname">
            <input type="text" placeholder="email" name="email">
            <input type="submit" value="speichern">

            <table border ="1">
                <tr>
                    <td>ID</td>
                    <td>Vorname</td>
                    <td>Nachname</td>
                    <td>Email</td>
                </tr>
            

                <?php
                while ($row = $showAll->fetch_assoc())
                {
                    echo "<tr>";
                        echo "<td>".$row["id"]."</td>";
                        echo "<td>".$row["vorname"]."</td>";
                        echo "<td>".$row["nachname"]."</td>";
                        echo "<td>".$row["email"]."</td>";
                    echo "<tr>";
                }
                ?>
            </table>
        </form>

    </body>
</html>
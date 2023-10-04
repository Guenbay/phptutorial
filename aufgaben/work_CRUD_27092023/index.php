<?php
include('function.php');
include('Kurs.php');
include('Student.php');

$conn = createMySQLConnection();

if(isset($_POST["vorname"]))
  $resStudent = $conn->query("INSERT INTO studenten (nachname, vorname) VALUES ('".$_POST['nachname']."', '".$_POST['vorname']."')");
if(isset($_POST["kursname"]))
  $resKurs = $conn->query("INSERT INTO kurse (id, kurscode, kursname) VALUES (NULL,'".$_POST['kurscode']."', '".$_POST['kursname']."')");
if(isset($_POST["martnummer"]))
$studentLoeschen = $conn->query("DELETE FROM studenten WHERE studenten.martnummer =".$_POST["martnummer"]);
if(isset($_POST["id"]))
$kursLoeschen = $conn->query("DELETE FROM kurse WHERE kurse.id =".$_POST["id"]);

$vorhandeneStudenten = $conn->query("SELECT * FROM studenten");
$vorhandeneKurse = $conn->query("SELECT * FROM kurse");

?>

<html>
    <head>
    </head>
    <body>
        <div style="float: left">
            <div>
                <h1>Studenten Anlegen</h1>
                <form action="index.php" method="POST">
                    <input type="text" placeholder="Nachname" name="nachname"/>
                    <input type="text" placeholder="Vorname" name="vorname"/>
                    <input type="submit" value="Student Eintragen"/>
                </form>
            </div>
            <div style="">
                <h1>Eingetragene Studenten</h1>
                <ul>
                    <?php 
                        while ($row = $vorhandeneStudenten->fetch_assoc())
                        {
                            echo "<li>".$row["martnummer"]."-".$row["nachname"]."-".$row["vorname"]."</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>

        <div style="float: left">
            <div>
                <h1>Kurs Anlegen</h1>
                <form action="index.php" method="POST">
                    <input type="text" placeholder="Kursname" name="kursname"/>
                    <input type="text" placeholder="Kurs-Code" name="kurscode"/>
                    <input type="submit" value="Kurs Eintragen"/>
                </form>
            </div>
            <div style="">
                <h1>Eingetragene Kurse</h1>
                <ul>
                    <?php 
                        while ($row = $vorhandeneKurse->fetch_assoc())
                        {
                            echo "<li>".$row["id"]."-".$row["kursname"]."-".$row["kurscode"]."</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>

        <div id="fixed_container" style="background-color: beige; border-color: black; border-radius: 10%; position: fixed; right: 10%; top: 20%; width 8rem; margin-top: 2.5em">
            <div id="studenten">
                <div>
                    <h1>Studenten Löschen</h1>
                    <form action="index.php" method="POST" style="text-align: center">
                        <input type="text" placeholder="geben sie eine id an" name="martnummer"/>
                        <input type="submit" value="Löschen" name=studenten.martnummer/>
                    </form>
                </div>
            </div>
            <div id="kurse">
                <div>
                    <h1>Kurs Löschen</h1>
                    <form action="index.php" method="POST" style="text-align: center">
                        <input type="text" placeholder="geben sie eine id an" name="id"/>
                        <input type="submit" value="Löschen" name=kurse.id/>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
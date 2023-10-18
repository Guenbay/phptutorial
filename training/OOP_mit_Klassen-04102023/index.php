<?php
include('Kurs.php');
include('Student.php');
include('MySql.php');


//$conn = createMySQLConnection();
$conn = new Mysql();

if(isset($_POST["vorname"]))
    $resStudent = $conn->create("INSERT INTO studenten (id, martnummer, vorname, nachname, durchschnitt) VALUES (NULL, '$_POST[martnummer]', '$_POST[vorname]', '$_POST[nachname]', '$_POST[durchschnitt]')", "student");

if(isset($_POST["kursname"]))
    $resKurs = $conn->create("INSERT INTO kurse (id, kurscode, kursname) VALUES (NULL, '$_POST[kurscode]', '$_POST[kursname]')", "kurs");

if(isset($_POST["kurscode"]))
    $resFach = $conn->create("INSERT INTO faecher (id, kurscode, kursname, kursbeschreibung) VALUES (NULL, '$_POST[kurscode]', '$_POST[kursname]', '$_POST[kursbeschreibung]')", "fach");
                            
if(isset($_POST["note"]))
    $resNote = $conn->create("INSERT INTO notenbuch (id, kurscode, martnummer, note) VALUES (NULL, '$_POST[kurscode_note]', '$_POST[martnummer_note]', '$_POST[note]')", "note");
                           
//Prüfung schreiben WENN ID-Eingabe nicht in der Tabelle existiert, dann echo "ID existiert nicht."
if(isset($_POST["id"]))
    $studentLoeschen = $conn->delete("DELETE FROM studenten WHERE studenten.id =".$_POST["id"]);   

//Anzeige in Tabellen-Format für die Tabelle Kurs
if(isset($_POST["id"]))
    $kursLoeschen = $conn->delete("DELETE FROM kurse WHERE kurse.id =".$_POST["id"]);


$vorhandeneStudenten = $conn->read("SELECT * FROM studenten");


//$zeigeStudenten = $vorhandeneStudenten->fetch_assoc();
//$vorhandeneKurse = $conn->read("SELECT * FROM kurse");

//DURCHSCHNITT --- BEGIN --
$notenDurchschnitt = $conn->read("SELECT note FROM notenbuch");
$avg = $notenDurchschnitt->fetch_assoc();
$durchschnitt = $conn->average(abs($avg['note']), count($avg)); 
echo "Durchschnitt: ".$durchschnitt."\n";
//DURCHSCHNITT --ENDE--
?>

<html>
    <head>
    </head>
    <body>
    <p><h1>Studenten</h1></p>
        
        <?php //var_dump($accountData); ?>
        <form action="delete.php" method="post">
        <table border ="1">
            <tr>
                <td>Auswahl</td>
                <td>ID</td>
                <td>Martikelnummer</td>
                <td>Vorname</td>
                <td>Nachname</td>
                <td>Durchschnitt</td>
                <td>Funktionen</td>
            </tr>
            
            <?php
            while ($row = $vorhandeneStudenten->fetch_assoc())
            {
                echo "<tr>";
                    echo "<td><input type=\"checkbox\" name=\"". $row['id']. "\" /></td>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['martnummer']."</td>";
                    echo "<td>".$row['vorname']."</td>";
                    echo "<td>".$row['nachname']."</td>";
                    echo "<td>".$row['durchschnitt']."</td>";
                    echo '<td><a href="update.php?id='.$row['id'].'">Bearbeiten</a></td>';
                echo "</tr>";
            }           
            ?>
            
        </table>
        <input type="submit" name="save" /> <!--DELETE-->
        <!--  <input type="submit" value="Bearbeiten" name="change" --Update --> 
        </form>
        
    <!--Anzeige der Tabelle KURSE BEGIN--
        <form action="delete.php" method="post">
        <table border ="1">
            <tr>
                <td>id</td>
                <td>Kurscode</td>
                <td>Kursname</td>
            </tr>

        //    <?php
        //    while ($row = $vorhandeneKurse->fetch_assoc())
        //    {
        //        echo "<tr>";
        //            echo "<td><input type=\"checkbox\" name=\"".$row['id']. "\" /><td>";
        //            echo "<td>".$row['id']."</td>";
        //            echo "<td>".$row['kursname']."</td>";
        //            echo "<td>".$row['kurscode']."</td>";
        //            echo '<td><a href="update.php?id='.$row['id'].'">Bearbeiten</a></td>';
        //        echo "</tr>";
        //    }
        //    ?>
        </table>
        <input type="submit" name="save" /> -----DELETE-----
        </form> 
    --KURSE ENDE-->

        <div>
            <div>
                <h1>Studenten Anlegen</h1>
                <form action="index.php" method="POST"> 
                    <input type="text" placeholder="Martikelnummer" name="martnummer"/>
                    <input type="text" placeholder="Vorname" name="vorname"/>
                    <input type="text" placeholder="Nachname" name="nachname"/>
                    <input type="text" placeholder="Durschnittsnote" name="durchschnitt"/>
                    <input type="submit" value="Student Eintragen"/>
                </form>
            </div>
        </div>

        <div>
            <div>
                <h1>Kurs Anlegen</h1>
                <form action="index.php" method="POST">
                    <input type="text" placeholder="Kurs-Code" name="kurscode"/>
                    <input type="text" placeholder="Kursname" name="kursname"/>
                    <input type="submit" value="Kurs Eintragen"/>
                </form>
            </div>
        </div>

        <div>
            <div>
                <h1>Fach Anlegen</h1>
                <form action="index.php" method="POST">
                    <input type="text" placeholder="Kurs-Code" name="kurscode"/>
                    <input type="text" placeholder="Kursname" name="kursname"/>
                    <input type="text" placeholder="Beschreibung" name="kursbeschreibung"/>
                    <input type="submit" value="Fach Eintragen"/>
                </form>
            </div>
        </div>

        <div>
            <div>
                <h1>Noten Anlegen</h1>
                <form action="index.php" method="POST">
                    <input type="text" placeholder="Kurs-Code" name="kurscode_note"/>
                    <input type="text" placeholder="Martikelnummer" name="martnummer_note"/>
                    <input type="text" placeholder="Note" name="note"/>
                    <input type="submit" value="Fach Eintragen"/>
                </form>
            </div>
        </div>

        <div id="fixed_container" style="background-color: beige; border-color: black; border-radius: 10%; position: fixed; right: 10%; top: 20%; width 8rem; margin-top: 2.5em">
            <div id="studenten">
                <div>
                    <h1>Studenten Löschen</h1>
                    <form action="index.php" method="POST" style="text-align: center">
                        <input type="text" placeholder="geben sie eine id an" name="id"/>
                        <input type="submit" value="Löschen" name=studenten.id/>
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
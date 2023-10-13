<?php
include('function.php');
include('Kurs.php');
include('Student.php');


$conn = createMySQLConnection();

if(isset($_POST["vorname"]))
    $resStudent= $conn->query("INSERT INTO studenten (id, martnummer, vorname, nachname, durchschnitt) VALUES (NULL, '$_POST[martnummer]', '$_POST[vorname]', '$_POST[nachname]', '$_POST[durchschnitt]')");
if(isset($_POST["kursname"]))
    $resKurs = $conn->query("INSERT INTO kurse (id, kurscode, kursname) VALUES (NULL,'".$_POST['kurscode']."', '".$_POST['kursname']."')");
if(isset($_POST["id"]))
    $studentLoeschen = $conn->query("DELETE FROM studenten WHERE studenten.id =".$_POST["id"]);
if(isset($_POST["id"]))
    $kursLoeschen = $conn->query("DELETE FROM kurse WHERE kurse.id =".$_POST["id"]);

$vorhandeneStudenten = $conn->query("SELECT * FROM studenten");
//$zeigeStudenten = $vorhandeneStudenten->fetch_assoc();
$vorhandeneKurse = $conn->query("SELECT * FROM kurse");

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
        

        <div style="float: left">
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

        <div style="float: left">
            <div>
                <h1>Kurs Anlegen</h1>
                <form action="index.php" method="POST">
                    <input type="text" placeholder="Kursname" name="kursname"/>
                    <input type="text" placeholder="Kurs-Code" name="kurscode"/>
                    <input type="submit" value="Kurs Eintragen"/>
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
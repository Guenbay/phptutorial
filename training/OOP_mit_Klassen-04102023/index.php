<?php
include('Kurs.php');
include('Student.php');
include('Mysql.php');

$conn = new Mysql();

//Erstelle Student
if(isset($_POST["vorname"]))
        $conn->create("INSERT INTO studenten (martnummer, vorname, nachname) VALUES ('".$_POST['martnummer']."','".$_POST['vorname']."', '".$_POST['nachname']."')");
        
//Erstelle Kurs 
if(isset($_POST["kursname"]))
$resKurs = $conn->create("INSERT INTO kurse (id, kurscode, kursname) VALUES (NULL,'".$_POST['kurscode']."', '".$_POST['kursname']."')");

//delete Student on Window
if(isset($_POST["martnummer"]))
$studentLoeschen = $conn->delete("DELETE FROM studenten WHERE studenten.martnummer =".$_POST["martnummer"]);

//delete Kurs on Window 
if(isset($_POST["id"]))
$kursLoeschen = $conn->delete("DELETE FROM kurse WHERE kurse.id =".$_POST["id"]);

//read Student on Window
$conn->read("SELECT * FROM studenten");

//$vorhandeneStudenten = $conn->query("SELECT * FROM studenten");
//$row = $vorhandeneStudenten->fetch_assoc();

//$vorhandeneKurse = $conn->query("SELECT * FROM kurse");
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    
    <div class="nav">
        <a class="active" href="index.php">Home</a>
        <a href="#update.php">News</a>
        <a href="#delete.php">Contact</a>
        <a href="#conn.php">About</a>
    </div>

    <p><h1>Studenten</h1></p>
        
        <?php //var_dump($accountData); ?>
        <form action="delete.php" method="post">
        <table border ="1">
            <tr>
                <td class="table1">Auswahl</td>
                <td class="table1">Martikelnummer</td>
                <td class="table1">Vorname</td>
                <td class="table1">Nachname</td>
                <td class="table1">Durchschnitt </td>
                <td class="table1">Funktionen</td>
            </tr>
            
            <?php
            while ($row = $conn->$vorhandeneStudenten->fetch_assoc())
            {
                echo "<tr>";
                    echo "<td><input type=\"checkbox\" name=\"". $row['martnummer']. "\" /></td>";
                    echo "<td>".$row['martnummer']."</td>";
                    echo "<td>".$row['vorname']."</td>";
                    echo "<td>".$row['nachname']."</td>";
                    echo "<td></td>";
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
                    <input type="text" placeholder="Nachname" name="nachname"/>
                    <input type="text" placeholder="Vorname" name="vorname"/>
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

        <div id="fixed_container" class="container">
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
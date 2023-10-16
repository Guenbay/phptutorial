<?php

include('function.php');

"\n".var_dump($_GET)."\n";

//Verbindung zu bereits vorhandenen Kunden
$conn = createMySQLConnection();
//$data = getIdUrl();


if (isset($_POST['id']) && $_POST['send'])
{
    //if (isset($_POST['email']))
    {
        $id = $_POST['id'];
        $martnummer = $_POST['martnummer'];
        $vorname = $_POST['vorname'];
        $nachname = $_POST['nachname'];
        $durchschnitt = $_POST['durchschnitt'];

        $conn->query("UPDATE studenten SET martnummer='$martnummer', vorname='$vorname', nachname='$nachname', durchschnitt = '$durchschnitt' WHERE id='$id'");
        header('Location: index.php');
    }
}



$id = $_GET['id'];

if (isset($id))
{
    
    $res = $conn->query("SELECT * FROM studenten WHERE id=".$id);

    if(!$data = $res->fetch_assoc())
    {
        die("Die ID ist falsch oder existiert nicht.");
    }
}



//Foreach versuch

?>

<html>
    <head>
    </head>
    <body>
    <div style="float: left">
        <div>
            <h1>Studenten Bearbeiten</h1>
            <form action="update.php" method="POST">
                <input type="text" value="<?php echo $data['martnummer'] ?>" name="martnummer"/>
                <input type="text" value="<?php echo $data['vorname'] ?>" name="vorname"/>
                <input type="text" value="<?php echo $data['nachname'] ?>" name="nachname"/>
                <input type="text" value="<?php echo $data['durchschnitt'] ?>" name="durchschnitt"/>

                <input type="hidden" value="send" name="send"/>
                <input type="hidden" value="<?php echo $data['id'] ?>" name= "id"/>
                <input type="submit" value="Student Bearbeiten"/>
            </form>
        </div>
    </div>
    </body>
</html>

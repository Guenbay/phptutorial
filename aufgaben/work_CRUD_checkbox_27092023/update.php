<?php

include('function.php');

var_dump($_POST)."\n";

//Verbindung zu bereits vorhandenen Kunden
//$conn = createMySQLConnection();
//$data = getIdUrl();


if ($_POST['send'])
{
    //if (isset($_POST['email']))
    {
        $martnummer = $_POST['martnummer'];
        $vorname = $_POST['vorname'];
        $nachname = $_POST['nachname'];

        //$conn->query("UPDATE studenten SET vorname='$vorname', nachname='$nachname' WHERE martnummer='$id'");
       
        $update = $conn->query("UPDATE studenten SET vorname='$vorname', nachname='$nachname' WHERE martnummer='$martnummer'");
        
        if ($update)
        {
          //    header('Location: index.php');
          
            echo "\nData Updated in Database- Reloading Page in 3 sec.\n ";
       //     sleep(5);
            header('Refresh: 3; url=index.php');
        }
        else 
        {
            echo "Data could not be Updated";
        }

    }
}



//$id = $_GET['id'];

if ($id = $_GET['id'] && isset($id))
{
    $res = $conn->query("SELECT * FROM studenten WHERE martnummer=".$id);

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
                <input type="text" value="<?php echo $data['nachname'] ?>" name="nachname"/>
                <input type="text" value="<?php echo $data['vorname'] ?>" name="vorname"/>
                <input type="hidden" value="send" name="send"/>
                <input type="hidden" value="" name= "martnummer"/>
                <input type="submit" value="Student Bearbeiten"/>
            </form>
        </div>
    </div>
    </body>
</html>

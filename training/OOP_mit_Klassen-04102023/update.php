<?php
include('function.php');
include('Mysql.php');

var_dump($_POST)."\n";

//Verbindung zu bereits vorhandenen Kunden
//$conn = createMySQLConnection();
//$data = getIdUrl();


if ($_POST['send'])
{
    $conn->update();    
}


if ($id = $_GET['id'])
{
    //ausgabe
    $data = $conn->read("SELECT * FROM studenten WHERE id=".$id);
    
}



//Foreach versuch

?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div style="float: left">
        <div>
            <h1>Studenten Bearbeiten</h1>
            <form action="update.php" method="POST">
                <input type="text" value="<?php echo $data['nachname'] ?>" name="nachname"/>
                <input type="text" value="<?php echo $data['vorname'] ?>" name="vorname"/>
                <input type="text" value="<?php echo $data['martnummer'] ?>" name="martnummer"/>
                <input type="hidden" value="<?php echo $data['id'] ?>" name="id"/>
                <input type="hidden" value="send" name="send"/>
                <input type="submit" value="Student Bearbeiten"/>
            </form>
        </div>
    </div>
    </body>
</html>

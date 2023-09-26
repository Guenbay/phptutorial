<?php

include('Bankkonto.php');
include('Girokonto.php');
include('Sparbuch.php');

$myAccount =  new Girokonto();

//verbinde dich mit einer Datenbank und hole den Kontostand
$myAccount->einzahlung(1000);


$myAccount->buchung($_POST['einzahlung'], "einzahlung");
$myAccount->buchung($_GET['auszahlung'], "auszahlung");


// $_GET & $_POST

var_dump($_GET, $_POST);


?>

<html>
    <head>
    </head>
        <body>
            <h1>Unsere Bankkonten<h1>
            <?php echo $myAccount->name ;?>
            <?php echo $myAccount->getkontostand() ;?>

            
            <form action="" method="POST">

                <input type="text" value="0" name="einzahlung"/>
                <input type="submit" value="Senden POST"/>

            </form>

            <form action="" method="GET">
                
                <input type="text" value="0" name="auszahlung"/>
                <input type="submit" value="Senden GET"/>

            </form>

        </body>
</html>

<?php
//verbinde dich mit einer DB und speichere den aktuellen Kontostand

?>
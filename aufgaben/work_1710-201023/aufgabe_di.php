**Di: Schleifen und Variablen**
* Aufgabe 1: Schreiben Sie ein PHP-Programm, das eine for-Schleife verwendet, um die Zahlen von 1 bis 10 auszugeben.

<?php
//Aufgabe 1
    for ($i=1; $i <= 10 ; $i++) { 
        # code...
        echo $i." ";
    }
?>

* Aufgabe 2: Erstellen Sie eine Variable, die Ihren Namen speichert, und geben Sie sie auf der Webseite aus.
<?php
//Aufgabe 2
    $name = "Günbay";
    echo $name;

?>

* Aufgabe 3: Verwenden Sie eine while-Schleife, um alle geraden Zahlen von 2 bis 20 auszugeben.
<?php 
    echo "Aufgabe 3: ";
    $a = 2;
    while ($a <= 20)
    {
        //echo $a.($a % 2 == 0 ? "gerade" : "ungerade")."\n";
        if ($a % 2 == 0)
        {
            echo $a." ";
        }
        $a++;
    }
?>

<html>
    <head>
    </head>
    <body>
        <h1><?php echo "Aufgabe 1: "; for ($i=1; $i <= 10; $i++) {echo $i;} ?></h1>
        <h1><?php echo "Aufgabe 2: ".$name ?></h1>
        <h2>
        <?php 
            echo "Aufgabe 3: ";
            $a = 2;
            while ($a <= 20)
            {
                //echo $a.($a % 2 == 0 ? "gerade" : "ungerade")."\n";
                if ($a % 2 == 0)
                {
                    echo $a." ";
                }
            
                $a++;
            }
        ?>
        </h2>
        
    </body>
</html>


























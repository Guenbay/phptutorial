<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Themen</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<section id="Startseite">
<h1 class="head_title"><bold>Themen des PHP Moduls</bold></h1>
<h2>created by Günbay (R)</h2>

    
    <div style="background-color: beige;">
        <p>Das ist eine Ausgabe von dem ausgeführten Code:</p>
        <br>
        <?php echo "Hallo PHP Einführung 09.23"; ?>
    </div>    

    <div style="background-color: rgb(223, 223, 211);">
        <p>Code werden wie folgt angezeigt:</p>
        <pre>
            <code class="language-php">
              &lt;?php
                 echo "Hallo, Welt\n";
              ?&gt;
            </code>
        </pre>
    </div>
</section>

<section id="variabeln_und_werte">
    <h2>Variablen und Werte</h2>
    <p>In PHP werden Variablen vwerdendet, um Daten zu speichern und zu verarbeiten. Eine Variable ist im Wesentlichen ein Name oder eine Bezeichnung für einen Wert oder eine Datenmenge. PHP ist eine schwach typisierte Sprache, was bedeutet, dass man keine expliziten Datentypen für Variablen deklarieren muss. PHPH erkennt automatisch den Datentyp anhand des zugewiesenen Werts.</p>

    <div style="background-color: beige;">
        <p>Hier ein Ausgabe von ausgeführtem Code:</p>
        <pre>
            <code class="language-php">
                <?php
                    echo $myName = "Name ";
					echo $myBirthday = "Birtdhay ";
                    echo $myVar = 30;
                    echo $myText = " This is a Text"
                ?>
            </code>
        </pre>
    </div>

    
    <div style="background-color: rgb(223, 223, 211);">
	    <h3>Variablen deklarieren und Werte zuweisen:</h3>
	    <p>Anzeige des Codes der oben stehenden Ausgabe:</p>
        <div style="color: rgba(27, 103, 234, 0.837);">
           <pre>
                <code>
                    &lt;?php                            
                        echo $myName = "Name ";         
                        echo $myBirthday = "Birtdhay "; 
                        echo $myVar = 30;               
                        echo $myText = " This is a Text"
                    ?&gt;                               
                </code>
            </pre>
            
        </div>
    </div>
</section>

<section id="data_types">
<h2>Datentypen</h2>

<p>Folgende Datentypen sind auch in PHP standard wie folgt:</p>
    <div class="text-center" style="background-color: rgb(223, 223, 211);">
        <ul class="list-group list-group-flush">
            <li class="list-group-item bg-light">Integer (Ganzzahlen): $zahl = 10;</li>
            <li class="list-group-item bg-light">Float (Gleitkommazahlen): $pi = 3.14159;</li>
            <li class="list-group-item bg-light">String (Zeichenketten): $name = "John";</li>
            <li class="list-group-item bg-light">Boolean (Wahrheitswerte): $istWahr = true;</li>
        </ul>
    </div>
</section>

<h2>PHP-Funktionsreferenz</h2>

<section id="string_function">
    <h3><p>Arbeitsweise mit Zeichenketten</p></h3>

    <div class="card" style="width: 20rem; float: left;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">strlen($string)</li>
          <li class="list-group-item">strpos($string, $suche)</li>
          <li class="list-group-item">str_replace($suche, $ersetze, $string)</li>
        </ul>
    </div>
	<div class="card mb-3" style="width: 20rem; float: left;">
		<div class="card-header">
			Genutze variabeln
		</div>
        <ul class="list-group list-group-flush">
          <li>$myName = "Name";</li>
          <li>$myBirthday = "Birthday";</li>
		  <li>$myVar = 30;</li>
		  <li>echo $myText = " This is a Text";</li>
        </ul>
    </div>
	
    <div style="background-color: beige;">
	<p>Ausgabe von Code:</p>
		<p>strlen: <?php $count = strlen($myText); echo $count; ?> </p>
		<p>strpos: <?php $newstring = $myBirthday; $pos = strpos($newstring, 'a'); echo $pos; ?> </p>
		<p><?php $replace = str_replace("$myName", "Another One", "$myName"); echo $replace ?></p>
    </div>
	
	<div style="background-color: rgb(223, 223, 211);">
	<p>Anzeige von geschriebenen code<p>
		&lt?php $count = strlen($myText); echo $count; ?&gt;
		<br>
		&lt?php $newstring = $myBirthday; $pos = strpos($newstring, 'a'); echo $pos; ?&gt
		<br>
		&lt?php $replace = str_replace("$myName", "Another One", "$myName"); echo $replace ?&gt
    </div>

</section>

<section id="math_function">
    <h3><p>Arbeitsweise mit Mathematische Funktionen</p></h3>

    <div class="card" style="width: 20rem; float: left;">
		<div class="card-header">
			Funktion
		</div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">abs($zahl)</li>
          <li class="list-group-item">sqrt($zahl)</li>
          <li class="list-group-item">rand($min, $max)</li>
        </ul>
    </div>

    <div style="background-color: beige">
        <p>Ausgabe von Code:</p>
        <?php echo(abs(-4.2)); echo(abs(5)); echo(abs(-5)); ?>
	    <br>
		<?php echo(abs(5.2)); ?>
		<br>
        <?php echo "Wurzel aus 9\n = ", sqrt(9); ?>
        <br>
        <?php echo "Wurzel aus 25\n = ", sqrt(25); ?>
	    <br>
        <?php echo "Zufallszahl - Random = ", rand(); ?>
		<br>
		<?php echo "Zufallszahl - Zw. 1 - 110 = ", rand(1, 110); ?>
    </div>

    <div style="background-color: rgb(223, 223, 211);">
        <p>Anzeige von geschriebenen Code:</p>
        &lt?php (abs(-4.2)); (abs(5)); (abs(-5)); ?&gt
        <br>
        &lt?php echo "Wurzel aus 9\n = ", sqrt(9); ?&gt
        <br>
        &lt?php echo "Wurzel aus 25\n = ", sqrt(25); ?&gt
        <br>
        &lt?php echo "Zufallszahl - Random = ", rand(); ?&gt
        <br>
		&lt?php echo "Zufallszahl - Zw. 1 - 110 = ", rand(1, 110); ?&gt
    </div>
    
</section>

<section id="data_operation">
<h2>Dateioperationen</h2>

    <div class="card" style="width: 20rem; float: left;">

        <ul class="list-group list-group-flush">
          <li class="list-group-item">"==" | UND</li>
          <li class="list-group-item">"!=" | NICHT UND</li>
          <li class="list-group-item">rand($min, $max)</li>
        </ul>
    </div>

    <div class="card" style="width: 20rem;">

        <ul class="list-group list-group-flush">
          <li class="list-group-item">"==" | UND</li>
          <li class="list-group-item">"!=" | NICHT UND</li>
          <li class="list-group-item">rand($min, $max)</li>
        </ul>
    </div>


</section>


    
<section>
    <h2>Datenbankzugriff</h2>

</section>

<section>
    <h2>Fallunterscheidungen bzw. Verzweigungen</h2>
    <p>Operationen</p>
    <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

</section>


    <p>Anweisungen</p>
    <h2>Numerische und assoziative Arrays</h2>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</body>
</html>
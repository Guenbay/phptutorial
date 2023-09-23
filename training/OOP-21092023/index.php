<?php

include('Bankkonto.php');
include('Girokonto.php');
include('Sparbuch.php');

$ivanKonto = new Girokonto();
$ivanKonto-> name = "Ivan";
$ivanKonto-> kntnr = 100;
$ivanKonto-> einzahlung(1000);
$ivanKonto-> auszahlung(950);


$guenbayKonto = new Girokonto();
$guenbayKonto-> name = "Günbay";
$guenbayKonto-> kntnr = 110;
$guenbayKonto-> einzahlung(100);
$guenbayKonto-> auszahlung(50);

$linaKonto = new Girokonto();
$linaKonto-> name = "Lina";
$linaKonto-> kntnr = 120;
$linaKonto-> einzahlung(200);
$linaKonto-> auszahlung(150);

$ZikranKonto = new Girokonto();
$ZikranKonto-> name = "Zikran";
$ZikranKonto-> kntnr = 130;
$ZikranKonto-> einzahlung(500);
$ZikranKonto-> auszahlung(450);



echo "Kontostand von ".$ZikranKonto->name." beträgt: ".$ZikranKonto->getkontostand()." Euro"."\n";
echo "Kontostand von ".$linaKonto->name." beträgt: ".$linaKonto->getkontostand()." Euro"."\n";
echo "Kontostand von ".$guenbayKonto->name." beträgt: ".$guenbayKonto->getkontostand()." Euro"."\n";
echo "Kontostand von ".$ivanKonto->name." beträgt: ".$ivanKonto->getkontostand()." Euro";

?>
<?php

function addition($a, $b)
{
    $summe = $a + $b;
    return $summe;
}

function multiplication($a, $b)
{
    $summe = $a * $b;
    return $summe;
}

$a = addition(5,5);
$m = multiplication(5,5);
echo "Addition: ".$a."\n";
echo "Multiplikation: ".$m;


?>


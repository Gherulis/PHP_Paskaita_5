<?php 
echo "veikia";
$name = "petras";
echo $name;
if($name ="petras")
{
    echo "tiesa";
} else {echo "netiesa";}


$failas = "nuotrauka.txt";
$pavadinimas = explode(".", $failas);
var_dump ($pavadinimas);
$name = $pavadinimas[0];
$extension = $pavadinimas[1];
// echo "<br>";
// echo $name;
// echo "<br>";
// echo $extension;


if($extension == "jpg") {echo $name;} else { echo "nezinau";}


?>
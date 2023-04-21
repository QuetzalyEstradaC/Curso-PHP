<?php
/*
foreach(expresion as $variable){
     acciones que se tendra dentro del bucle
}
*/
$Arreglo = ["abcdefghijklmnopqrst",30,'e',56.5,true,false,12];
echo "<pre>\n";
var_dump($Arreglo);
echo "</pre>\n";
foreach($Arreglo as $Recorrido){
    echo "<p>$Recorrido</p>\n";
}
echo "Termina el ciclo <br>";
?>

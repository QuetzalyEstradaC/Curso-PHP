<?php
// declar una variable $ + identificador + asignacion del tipo de dato o valor
$Variable = 45;
$Mensaje = "El valor de la variable es:";
$Numero1 = 5; 
$Numero2 = 4; 
$Numero3 = 89;
$Suma = $Numero1 + $Numero2 + $Numero3;
$Resta = $Numero1 - $Numero2 - $Numero3;
$Mutiplicacion = $Numero1 * $Numero2 * $Numero3;
$Division = $Numero1 / $Numero2/ $Numero3;
$Radio = 2;
define('Pi', '3.1416');
$Decremento;
$Incremento;
echo "La suma de ".$Numero1." + ".$Numero2." + ".$Numero3. " es: ".$Suma."<br>";
echo "La resta de ".$Numero1." - ".$Numero2." - ".$Numero3. " es: ".$Resta."<br>";
echo "La multiplicacion de ".$Numero1." ".$Numero2." ".$Numero3. " es: ".$Mutiplicacion."<br>";
echo "La divicion de ".$Numero1."/".$Numero2."/".$Numero3. " es: ".$Division."<br>"; 
// echo var_dump(constant('Hora'))."<br>";
// echo var_dump($Suma);
// echo $Mensaje, $Variable;
// area de un circulo
$Ejemplo = Pi * $Radio * $Radio;
$Mensaje2 = "El area del circulo con el radio de: ".$Radio." por el valor de Pi que es: ".Pi." el resultado es: ".$Ejemplo;
echo $Mensaje2."<br>";
echo var_dump(constant('Pi'));
?>

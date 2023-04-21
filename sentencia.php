<?php
  $Valor1 = 25;
  $Valor2 = 15;
  $Valor3 = 65;
  $Persona = "Mujer";
  $letra = 'J';
  // sentencia if operadores relacionales o operadores logicos
  /* if(Condicion){
       codigo o accion a realizar en el navegador si se cumple la condicion
    }
     else{
      si la accion es contraria al if dentro de las llaves la accion a ejecutarse
    }
  */
  //este if ocupara operadores relacionales
  /*if($Valor1 >= $Valor2){
       echo "Verdadero";
  }
  else{
    echo="falso";
  }
  */
  /*
   comparando el valor de la variable con un string
  if($Persona == 'Hombre'){
        echo "Como el genero de la variable persona es Hombre se llamara pedro <br>";
  }
  else{
        echo "Como no se cumple el if entonces el genero no es Hombre por lo tanto no puede darle nombre";
  }
  */
  /* if($Valor1 >= $Valor2 && $Valor1 >= $Valor3){
       echo "El valor de: " .$Valor1."es mayor a: " .$Valor3." y mayor a: "$Valor3";
  }
  else if($Valor2 >= $Valor3 && $Valor2 >= $Valor3){
   echo "El valor de: " .$Valor2."es mayor a: " .$Valor1." y mayor a: "$Valor3";
  }
  else if($Valor3 >= $Valor1 && $Valor3 >= $Valor2){
   echo "El valor de: " .$Valor3."es mayor a: " .$Valor1." y mayor a: "$Valor2";
  }
  else{
    echo "no se cumple ninguna condicion";
  }
  */
  if($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u'){
      echo "El valor de la variable letra es ".$letra." una vocal";
  }
  else{
    echo "El valor de la variable letra es una consonante";
  }
  ?>

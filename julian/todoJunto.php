<?php
// 4- Crear un archivo todoJunto.php que incluya el archivo funciones.php y superficie.php en donde
//se definirá una función que reciba los radios de 3 círculos y retorna la mayor superficie entre ambos.
//Para este ejercicio se deberá reutilizar las funciones ya definidas.

// 5- Modificar todoJunto.php para que en su primer línea diga $funcionesEjecutadas = 0. Luego,
//modificar cada función de funciones.php y superficie.php para que al comenzar hagan $funcionesEjecutadas++.
//Probar llamar a varias funciones y ver cuánto vale $funcionesEjecutadas en cada momento. ¿Esto está permitido?
//¿Qué sucede?
//    Es necesario declarar como variable globar a $funcionesEjecutadas dentro de las funciones para que esto funcione

$funcionesEjecutadas = 0;

var_dump ($funcionesEjecutadas);

include 'funciones.php';
include 'superficie.php';

function todoJunto($radio1, $radio2, $radio3){
  $mayor = mayor($radio1, $radio2, $radio3);
  return circulo($mayor);
}

var_dump(todoJunto(20, 1, 80));
var_dump ($funcionesEjecutadas);

 ?>

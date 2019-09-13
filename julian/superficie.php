<?php
// Generar un archivo llamado superficie.php:
//
// Definir una función triangulo() que retorne su superficie.
// Definir una función rectangulo() que retorne su superficie.
// Definir una función cuadrado() que retorne su superficie.
// Utilizando la función pi(), definir una función circulo() que retorne su superficie.

function triangulo($base, $altura){
  global $funcionesEjecutadas;
  $funcionesEjecutadas ++;

  return $base * ($altura / 2);
}

function rectangulo($base, $altura){
  global $funcionesEjecutadas;
  $funcionesEjecutadas ++;

  return $base * $altura;
}

function cuadrado($lado){
  global $funcionesEjecutadas;
  $funcionesEjecutadas ++;

  return $base * $base;
}

function circulo($radio){
  global $funcionesEjecutadas;
  $funcionesEjecutadas ++;
  
  $pi = pi();
  return $pi * $radio ** 2;
}

// var_dump(circulo(5));

?>

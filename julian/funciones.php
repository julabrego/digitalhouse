<?php
// Generar un archivo llamado funciones.php:
//
// Definir una función mayor() que reciba 3 números y devuelva el mayor.
// Definir una función tabla() que reciba un parámetro base, un parámetro límite, y devuelve un array
// con la secuencia de números desde el numero base hasta el numero limite.
// Modificar mayor() para que si recibe sólo 2 parámetros, compare a esos dos números con el número 100.
// Modificar tabla para que si recibe un sólo parámetro utilice el número 100.

function mayor($num1, $num2, $num3 = 100){
  // $numeros = [$num1, $num2, $num3];
  // arsort($numeros);
  global $funcionesEjecutadas;
  $funcionesEjecutadas ++;

  if ($num1 > $num2 && $num1 > $num3){
    return $num1;
  }elseif ($num2 > $num1 && $num2 > $num3){
    return $num2;
  }elseif ($num3 > $num1 && $num3 > $num2){
    return $num3;
  }


}

function tabla($base, $limite = 100){
  $resultado = [];
  for ($i = 1; $i <= $limite; $i++){
    $resultado[] = $base * $i;
  }
  global $funcionesEjecutadas;
  $funcionesEjecutadas ++;

  return $resultado;
}

?>

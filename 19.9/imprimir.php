<?php
// Crea el archivo imprimir.php que imprima la variable $_GET a través de
// un var_dump y acceder al mismo con el siguiente Query String:
// imprimir.php?nombre=montoto&email=montoto@digitalhouse.com


//var_dump($_GET);

// foreach($_POST as $key => $value){
//   echo "$key => $value<br>";
// }

//Proba la función de php getAllHeaders() e imprimir su resultado. ¿Qué información ves?

$headers = getAllHeaders();

var_dump($headers);
?>

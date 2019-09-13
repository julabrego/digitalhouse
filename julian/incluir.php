<?php

// Generar un archivo llamado incluir.php que retorne un echo con el siguiente string “Soy incluir.php”.
//
// Incluir en incluir.php  el archivo saludo.php (el cual aún no existe). ¿Qué sucede? ¿Tira algún error?
// Tira un Warning pero sigue ejecutando el código
// Reemplazar el include por require. ¿Qué sucede?  // Tira un fatal error y deja de ejecutar
// Generar en la misma carpeta un archivo saludo.php que solamente haga echo “Hola mundo”.
//¿Qué sucede ahora con el punto a y el punto b?
// En el archivo incluir.php reemplazar el require por include, e incluir 3 veces el mismo archivo. ¿Qué sucede?
//    Devuelve tres veces lo mismo
// En el archivo incluir.php reemplazar todos los include por include_once. ¿Qué sucede?
//    Lo devuelve una sola vez

include_once 'saludo.php';
include_once 'saludo.php';
include_once 'saludo.php';

echo "Soy incluir.php";

 ?>

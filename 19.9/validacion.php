<?php
/*
VALIDACIÓN Y PERSISTENCIA

Objetivo
Ahora qué manipulamos un poco mejor los métodos de transmisión de datos vamos a querer
chequear que la información que viaje sea la que nos va a servir para trabajar, por eso vamos a
tener que validar la misma, y en el caso de qué no esté completa de manera adecuada vamos a
querer que el usuario no tenga qué volver a completar todos los datos (esto es una muy buena
práctica y mejora mucho la experiencia del usuario en nuestra web)

Consignas
6. Añadiremos validación para el formulario de registración. Para esto te sugerimos
algunos factores para tener en cuenta:
a. Una buena estrategia es que el formulario de registración haga un pedido por
POST hacia el mismo archivo. Esto permite que primero valides y luego lo envíes
a la página de éxito.
b. Es importante validar primero que nada si el usuario envió información.

c. Si el usuario efectivamente envió información deberías validar campo por
campo tomando el enfoque de “preguntar si hay un error en el campo”.
d. Es importante acumular todos los errores para poder mostrarlos de forma
ordenada en el HTML.
e. Si tras todas las validaciones no hay ningún error, deberías redirigir al usuario a
la página de éxito.
f. Para redirecciones ver header('Location: http://www.example.com/');
7. En caso de que el formulario traiga errores tenés persistir los datos que el usuario ya
había enviado en el formulario.

VERSIÓN NINJA: ¡En ésta versión sería ideal persistir sólo aquellos campos que no hayan
tenido errores! ¿Se te ocurre cómo hacerlo?
*/

 ?>

<?php

$nombre = $username = $email = $password = $confirmar = "";

$mensaje_error = [
  'nombre' => "",
  'username' => "",
  'email' => "",
  'password' => "",
  'confirmar' => "",
];

if ($_POST){


  if ($_POST['nombre'] == ""){
    $mensaje_error['nombre'] = "Complete su nombre completo";
  }elseif(strlen($_POST['nombre']) < 3){
    $mensaje_error['nombre'] = "El nombre debe tener al menos cuatro caracteres";
  }else{
    $nombre = $_POST['nombre'];
  }

  if ($_POST['username'] == ""){
    $mensaje_error['username'] = "Complete su nombre de usuario";
  }elseif(strlen($_POST['username']) < 6){
    $mensaje_error['username'] = "El nombre de usuario debe tener al menos seis caracteres";
  }else{
    $username = $_POST['username'];
  }

  if ($_POST['email'] == ""){
    $mensaje_error['email'] = "Complete su email";
  }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $mensaje_error['email'] = "El formato del email no es correcto";
  }else{
    $email = $_POST['email'];
  }

  if ($_POST['password'] == "" && $_POST['confirmar'] == ""){
    $mensaje_error['password'] = "Complete y confirme su contraseña";
    $mensaje_error['confirmar'] = "Complete y confirme su contraseña";
  }elseif ($_POST['password'] == "" && $_POST['confirmar'] != ""){
    $mensaje_error['password'] = "Complete la contraseña";
  }elseif ($_POST['password'] != "" && $_POST['confirmar'] == ""){
    $mensaje_error['password'] = "Confirme su contraseña";
    $mensaje_error['confirmar'] = "Confirme su contraseña";
  }elseif ($_POST['password'] != $_POST['confirmar']){
    $mensaje_error['password'] = "Las contraseñas no coinciden";
    $mensaje_error['confirmar'] = "Las contraseñas no coinciden";
  }
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">
      label{
        display:block;
      }
      .alerta{
        color:red;
      }
    </style>

  </head>
  <body>
    <form action="validacion.php" method="post">
      <label for="nombre">Nombre completo: </label>
      <input type="text" name="nombre" id="nombre" value="<?=$nombre;?>">

      <?php if ($mensaje_error['nombre'] != ""): ?>
         <span class="alerta">
           <?=$mensaje_error['nombre'];?>
         </span>
       <?php endif;  ?>

      <label for="username">Nombre de usuario:</label>
      <input type="text" name="username" id="username" value="<?=$username;?>">

      <?php if ($mensaje_error['username'] != ""): ?>
         <span class="alerta">
           <?=$mensaje_error['username'];?>
         </span>
       <?php endif;  ?>

      <label for="email">Email:</label>
      <input type="email" name="email" id="email" value="<?=$email;?>">

      <?php if ($mensaje_error['email'] != ""): ?>
         <span class="alerta">
           <?=$mensaje_error['email'];?>
         </span>
       <?php endif;  ?>

      <label for="password">Contraseña</label>
      <input type="password" name="password" id="password" value="">

      <?php if ($mensaje_error['password'] != ""): ?>
         <span class="alerta">
           <?=$mensaje_error['password'];?>
         </span>
       <?php endif;  ?>

      <label for="password">Confirme su contraseña</label>
      <input type="password" name="confirmar" id="password" value="">

      <?php if ($mensaje_error['confirmar'] != ""): ?>
         <span class="alerta">
           <?=$mensaje_error['confirmar'];?>
         </span>
       <?php endif;  ?>

      <button type="submit">Enviar</button>
    </form>

  </body>
</html>

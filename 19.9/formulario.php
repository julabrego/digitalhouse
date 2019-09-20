<!-- Crea el archivo formulario.html en la misma carpeta que el anterior, con el siguiente
código y accede al mismo: -->

<!DOCTYPE HTML>
<html>
<head>
<title>TEST</title>
</head>
<body>
<form action="imprimir.php" method="post">
<label for="nombre">Nombre:</label>
<input type="text" name="nombre">
<br>
<label for="email">E-mail:</label>
<input type="text" name="email">
<br>
<input type="submit">
</form>
</body>
</html>

<!-- a. ¿Qué sucede ahora en imprimir.php si enviá el formulario con datos?
b. Modifica imprimir.php para que imprima algún valor puntual (por ejemplo el
nombre que se envíe en el formulario) de $_GET.
c. Modifica imprimir.php para que imprima todos los valores utilizando un foreach. -->

<!-- Modifica el archivo formulario.php para que envíe los datos a través de POST. ¿Cómo
deberías modificar imprimir.php para que siga funcionando y puedas ver los datos que
envias? -->

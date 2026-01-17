<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1>Formulario de Contacto</h1>

<div class="contenido">

<form method="POST" action="contacto.php">
    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br><br>

    <label>Correo electrónico:</label><br>
    <input type="email" name="correo"><br><br>

    <input type="submit" value="Enviar">
</form>

<hr>

<?php
if (isset($_POST['nombre']) && isset($_POST['correo'])) {
    echo "<h2>Datos enviados</h2>";
    echo "<p><strong>Nombre:</strong> " . $_POST['nombre'] . "</p>";
    echo "<p><strong>Correo:</strong> " . $_POST['correo'] . "</p>";
}
?>

<p><a href="index.php">Volver al inicio</a></p>

</div>

</body>
</html>

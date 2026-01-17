<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Instituto de Programación</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1>Instituto Técnico de Programación</h1>

<nav>
    <a href="index.php?seccion=inicio">Inicio</a>
    <a href="index.php?seccion=unidades">Unidades</a>
    <a href="contacto.php">Contacto</a>
</nav>

<hr>

<div class="contenido">
<?php
if (isset($_GET['seccion'])) {

    if ($_GET['seccion'] == "inicio") {
        echo "<h2>Inicio</h2>";
        echo "<p>Bienvenidos al Instituto Técnico de Programación, una institución
        dedicada a la formación de futuros desarrolladores de software.</p>";
        echo "<p>Ofrecemos educación práctica en programación, desarrollo web
        y tecnologías modernas.</p>";
    }

    if ($_GET['seccion'] == "unidades") {
        echo "<h2>Unidades Académicas</h2>";
        echo "<ul>
                <li>Introducción a la Programación</li>
                <li>Desarrollo Web con HTML, CSS y PHP</li>
                <li>Bases de Datos</li>
                <li>Programación Orientada a Objetos</li>
              </ul>";
    }

} else {
    echo "<p>Seleccione una sección del menú para ver la información.</p>";
}
?>
</div>

</body>
</html>

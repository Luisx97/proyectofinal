<?php
include("../con_db.php");

$pregunta_titulo = $_POST['pregunta_titulo'];
$pregunta_texto = $_POST['pregunta_texto'];
$pregunta_variable = $_POST['pregunta_variable'];
$pregunta_fecha_final = $_POST['pregunta_fecha_final'];
$encuesta_fecha_inicio = date('Y-m-d H:i:s');

$insertar_pregunta = "INSERT INTO `preguntas`
    (`pregunta_titulo`, `pregunta_texto`, `pregunta_variable`, `pregunta_fecha_inicio`, `pregunta_fecha_final`) VALUES (
        '$pregunta_titulo',
        '$pregunta_texto',
        '$pregunta_variable',
        '$encuesta_fecha_inicio',
        '$pregunta_fecha_final')";

if (mysqli_query($con, $insertar_pregunta)) {
    header("Location: ../admin_catalogo_preg.php");
} else {
    echo "Error: " . $insertar_pregunta . "<br>" . mysqli_error($con);
}
mysqli_close($con);
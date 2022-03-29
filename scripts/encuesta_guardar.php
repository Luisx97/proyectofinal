<?php
    include ("../con_db.php");

    $encuesta_titulo = $_POST['encuesta_titulo'];
    $anio_nombre = $_POST['anio_nombre'];
    $encuesta_descripcion = $_POST['encuesta_descripcion'];
    $encuesta_fecha_final = $_POST['encuesta_fecha_final'];
    $encuesta_fecha_inicio = date('Y-m-d H:i:s');

    $insertar_encuesta = "INSERT INTO `encuestas`
    (`encuesta_titulo`, `anio_nombre`, `encuesta_descripcion`, `encuesta_fecha_inicio`, `encuesta_fecha_final`) VALUES (
        '$encuesta_titulo',
        '$anio_nombre',
        '$encuesta_descripcion',
        '$encuesta_fecha_inicio',
        '$encuesta_fecha_final')";

    if (mysqli_query($con, $insertar_encuesta)) {
        header("Location: ../admin_catalogo_encuesta.php");
    }else {
        echo "Error: " . $insertar_encuesta . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
?>
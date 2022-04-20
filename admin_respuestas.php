<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Encuesta</title>
    <?php
    include("include/head.php");
    ?>
    <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/estilos.css">
</head>

<body>
    <?php
    include("con_db.php");
    ?>



    <main class="flex-shrink-0">
        <!-- Navigation-->
        <?php
        include("include/navbar.php");
        ?>
        <div class="container-fluid ">
            <div class="row">
                <?php
                include("include/admin_menu.php");
                ?>
                <div class="col-lg-8 col-md-12">
                    <form name="form-work" action="scripts/respuesta_guardar.php" method="POST">

                        <h1 class="blog_bvn">Catálogo de Respuestas</h1>
                        <br></br>
                        <h4 class="blog_bvn">Encuesta</h4>
                        <select class="form-control form-control-sm" name="encuesta_titulo" id="encuesta_titulo">
                            <option value="">Seleccione el encuesta</option>
                            <?php
                            while ($dataSelect = mysqli_fetch_array($datacat_encuestaSelect)) { ?>
                                <option value="<?php echo $dataSelect["encuesta_titulo"]; ?>">
                                    <?php echo ($dataSelect["encuesta_titulo"]); ?>
                                </option>
                            <?php } ?>
                        </select>
                        <br>
                        <h4 class="blog_bvn">Pregunta/Afirmación</h4>
                        <select class="form-control form-control-sm" name="pregunta_texto" id="pregunta_texto">
                            <option value="">Seleccione el pregunta</option>
                            <?php
                            while ($dataSelect = mysqli_fetch_array($datacat_preguntaSelect)) { ?>
                                <option value="<?php echo $dataSelect["pregunta_texto"]; ?>">
                                    <?php echo ($dataSelect["pregunta_texto"]); ?>
                                </option>
                            <?php } ?>
                        </select>
                        <br>
                        <h4 class="blog_bvn">Tipo de pregunta</h4>
                        <select class="form-control form-control-sm" name="tipo_result" id="tipo_result">
                            <option value="">Seleccione el tipo de pregunta</option>
                            <?php
                            while ($dataSelect = mysqli_fetch_array($datacat_tipo_preguntaSelect)) { ?>
                                <option value="<?php echo $dataSelect["tipo_titulo"]; ?>">
                                    <?php echo ($dataSelect["tipo_titulo"]); ?>
                                </option>
                            <?php } ?>
                        </select>
                        <br>
                        <div class="d-grid gap-2 d-md-block">
                            <input class="btn btn-primary" type="submit" value="Enviar">
                        </div>
                        <br>
                    </form>
                    <div id="tabla_preguntas">
                        <table class="table table-bordered table-hover table-condensed">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Título</th>
                                    <th>Tipo</th>
                                    <th>Accciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#feature">Aquì traer tìtulo</a></td>
                                    <td>Selección múltiple</td>
                                    <td>
                                        <button //onclick="obtenerDetallesPregunta(2)" // class="btn btn-warning">Modificar</button>
                                        <button //onclick="eliminarPregunta(2)" // class="btn btn-danger">Eliminar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>



<?php
include("include/footer.php")
?>

</div>

</html>
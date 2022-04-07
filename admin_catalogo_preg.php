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
                    <form name="form-work" action="scripts/pregunta_guardar.php" method="POST">

                        <h1 class="blog_bvn">Catálogo de Preguntas</h1>
                        <br></br>
                        <h4 class="blog_bvn">Encuesta</h4>
                        <select class="form-control form-control-sm" name="pregunta_titulo" id="pregunta_titulo">
                            <option value="">Seleccione el periodo</option>
                            <?php
                            while ($dataSelect = mysqli_fetch_array($datacat_encuestaSelect)) { ?>
                                <option value="<?php echo $dataSelect["encuesta_titulo"]; ?>">
                                    <?php echo ($dataSelect["encuesta_titulo"]); ?>
                                </option>
                            <?php } ?>
                        </select>
                        <br>
                        <h4 class="blog_bvn">Pregunta/Afirmación</h4>
                        <input class="form-control" type="text" name="pregunta_texto" id="pregunta_texto" placeholder="Ingresa la pregunta que se quiere registrar" aria-label="default input example">
                        <br>
                        <h4 class="blog_bvn">Variable de Pregunta</h4>
                        <input class="form-control" type="text" name="pregunta_variable" id="pregunta_variable" placeholder="Ingresa una breve descripción de la encuesta" aria-label="default input example">
                        <br>
                        <h4 class="blog_bvn">Fecha de Cierre</h4>
                        <input class="form-control" name="pregunta_fecha_final" id="pregunta_fecha_final" type="date" placeholder="" aria-label="default input example">
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
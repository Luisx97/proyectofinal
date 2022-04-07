<?php

date_default_timezone_set("America/Lima");
$date = new DateTime();

$fecha_inicio = $date->format('Y-m-d H:i:s');

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Poder Judicial</title>
    <?php
    include("include/head.php");
    ?>
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
                    <form name="form-work" action="scripts/encuesta_guardar.php" method="POST">

                        <h1 class="blog_bvn">Catálogo de Encuestas</h1>
                        <br></br>
                        <h4 class="blog_bvn">Titulo de Encuesta</h4>
                        <input class="form-control" name="encuesta_titulo" id="encuesta_titulo" type="text" placeholder="Nombre de la encuesta" aria-label="default input example">
                        <br>
                        <h4 class="blog_bvn">Periodo</h4>
                        <select class="form-control form-control-sm" name="anio_nombre" id="anio_nombre">
                            <option value="">Seleccione el periodo</option>
                            <?php
                            while ($dataSelect = mysqli_fetch_array($datacat_status_aniosSelect)) { ?>
                                <option value="<?php echo $dataSelect["anio_nombre"]; ?>">
                                    <?php echo ($dataSelect["anio_nombre"]); ?>
                                </option>
                            <?php } ?>
                        </select>
                        <br>
                        <h4 class="blog_bvn">Descripción de la Encuesta</h4>
                        <input class="form-control" type="text" name="encuesta_descripcion" id="encuesta_descripcion" placeholder="Ingresa una breve descripción de la encuesta" aria-label="default input example">
                        <br>
                        <h4 class="blog_bvn">Fecha de Cierre</h4>
                        <input class="form-control" name="encuesta_fecha_final" id="encuesta_fecha_final" type="date" placeholder="" aria-label="default input example">
                        <br>
                        <div class="d-grid gap-2 d-md-block">
                            <input class="btn btn-primary" type="submit" value="Enviar">
                        </div>
                        <br>

                    </form>
                </div>
            </div>
        </div>
</body>
<footer class="bg-dark py-4 mt-auto">
    <?php
    include("include/footer.php")
    ?>
</footer>

</div>
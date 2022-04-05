<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Poder Judicial</title>
    <?php
        include ("include/head.php");
    ?>
</head>

<body>
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <?php
            include ("include/navbar.php");
        ?>
        <div class="container-fluid ">
            <div class="row">
            <?php
                include ("include/admin_menu.php");
            ?>
                <div class="col-lg-8 col-md-12">
                    <h1 class="blog_bvn">Respuestas</h1>
                    <br><br>
                        <h4 class="blog_bvn">Periodo</h4>
                        <input class="form-control" type="text" name="anio_nombre" id="anio_nombre"
                            placeholder="Seleccione el periodo"
                            aria-label="default input example">
                        <br>
                        <h4 class="blog_bvn">Encuesta</h4>
                        <input class="form-control" type="text" name="encuesta_titulo" id="encuesta_titulo"
                            placeholder="Seleccione encuesta"
                            aria-label="default input example">
                        <br>
                        <div id="tabla_preguntas">
                     <table class="table table-bordered table-hover table-condensed">
                        <thead class="thead-dark">
                           <tr>
                             <th>Respuesta</th>
                             <th>Opcion</th>
                             <th>Accciones</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>Aquì traer pregunta</td>
                              <td><a href="#feature">Opcion</a></td>
                              <td>
                                 <button //onclick="Agregaropcion(2)"// class="btn btn-success">Agregar</button>   
                                 <button //onclick="obtenerDetallesOpcion(2)"// class="btn btn-warning">Modificar</button>
                                  <button //onclick="eliminarOpcion(2)"// class="btn btn-danger">Eliminar</button>

                                </td>
                            </tr>
                         </tbody>
                     </table>
                </div>
            </div>
        </div>
        <?php
            include ("include/footer.php")
        ?>

        </div>

</html>
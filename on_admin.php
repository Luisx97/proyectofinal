<!DOCTYPE html>
<html lang="en">

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

<body class="d-flex flex-column ">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <?php
            include ("include/navbar.php");
        ?>
        <!-- Page Content-->
        <section class="py-5" style="background-color:#d0d0d0">
            <div class="container h-100">
                <div class="row justify-content-sm-center h-100">
                    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">

                        <div class="card shadow-lg">
                            <h1>Administrador</h1>
                            <table>
                                <div align="center">
                                    <td><center><a href="admin_inicio.php"><img src="imagenes/gear.png" width="100"
                                                height="100"></center>
                                    <text><center>Administrador</center></text></a>
                                    <text><justify>Alta de encuestas de satisfaccion de los clientes</justify></text>
                                </td>
                                </div>
                                <div align="center">
                                    <td><center><img src="imagenes/analisis-de-mercado.png" align=”middle” width="100"
                                            height="100"></center>
                                            <text><center>Reporte</center></text>
                                            <text><justify>Modulo de generacion y visualizacion de reportes de las encuestas</justify></text>
                                    </td>
                                </div>
                            </table>
                        </div>
                    </div>


        </section>

    </main>
    <!-- Footer-->
    <?php
        include ("include/footer.php")
    ?>
</body>

</html>
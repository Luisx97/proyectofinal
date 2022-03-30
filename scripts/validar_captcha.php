<?php
    if (isset($_POST)) {
        $captcha_cookie = $_COOKIE['captcha'];
        $captcha_user = $_POST['admin_captcha'];

        if ($captcha_cookie == sha1($captcha_user)) {
            include ('../conexion.php');

            $login_usuario = $_POST['admin_usuario'];
            $login_password = $_POST['admin_password'];

            $consulta = "SELECT * FROM administrador WHERE admin_usuario='".$login_usuario."' AND admin_password='".$login_password."'";
            $resultado = mysqli_query(conectar(), $consulta);
            echo $consulta;

            if ($filas = mysqli_fetch_row($resultado)) {
                session_start();

                header("location: ../on_admin.php");
            }else {
                header("location: ../index.php");
            }
        }else{
            header("location: ../admin.php");
        }
    }
?>
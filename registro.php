<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>

    <title>REGISTRO DE USUARIO</title>
    <!-- ace styles -->
    <link rel="stylesheet" href="vistas/estilo/css/bootstrap.min.css" />
    <link rel="stylesheet" href="vistas/estilo/font-awesome/4.2.0/css/font-awesome.min.css" />
    <!-- ace styles -->
    <link rel="stylesheet" href="vistas/estilo/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

</head>
<style type="text/css">
    body {
        /* Ubicacion de la imagen */
        background-image: url("vistas/estilo/avatars/fondo21.png");
        /* Nos aseguramos que la imagen de fondo este centrada vertical y
    horizontalmente en todo momento */
        background-position: center center;
        /* La imagen de fondo no se repite */
        background-repeat: no-repeat;
        /* La imagen de fondo está fija en el viewport, de modo que no se mueva cuando
     la altura del contenido supere la altura de la imagen. */
        background-attachment: fixed;
        /* La imagen de fondo se reescala cuando se cambia el ancho de ventana
     del navegador */
        background-size: cover;
        /* Fijamos un color de fondo para que se muestre mientras se está
    cargando la imagen de fondo o si hay problemas para cargarla  */
        background-color: #FFFFFF;
    }

</style>
<script src="vistas/estilo/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="vistas/estilo/dist/sweetalert.css">

<body>
    <div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class=" panel-default">
                        <center><img class="profile-img" width='250' height='250' src="vistas/estilo/avatars/user.png" alt="Conxole Admin"> </center>
                        <center>
                            <center>
                                <p class="login-box-msg">ACCESO AL SISTEMA</p>
                            </center>
                    </div>
                    <div class="panel-body">


                        <div class="register-box">


                            <div class="register-box-body">
                                <center>
                                    <p class="login-box-msg">DATOS DEL NUEVO USUARIO</p>
                                </center>

                                <form action="registro.php" method="post">
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control" name="nombresyapellidos" required placeholder="Nombres y Apellidos">
                                        <span class=""></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control" name="username" required placeholder="Username">
                                        <span class=""></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <input type="password" class="form-control" name="password" required placeholder="Password">
                                        <span class=""></span>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-8">
                                            <div class="checkbox icheck">
                                                <label>
                                                    <input type="checkbox" required> Yo acepto los <a href="#">Terminos y dondiciones!</a>
                                                </label>
                                            </div>
                                        </div>
                                        <input type="hidden" value="<?php echo date('Y-m-d'); ?>" name="fecha">
                                        <!-- /.col -->
                                        <div class="col-xs-4">
                                            <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>

                                <div class="social-auth-links text-center">

                                    <a class=" btn btn-primary" href="index.php">VOLVER AL INICIO</a>

                                </div>
                                <p> </p>

                            </div>
                            <!-- /.form-box -->
                        </div>


                        <?php
require_once 'conexiones/Connection.php';
$conn = dbConnect();
$sql = "INSERT INTO usuarios (nombresyapellidos,username,password,fecha) VALUES (:nombresyapellidos,:username,:password,:fecha)";
$q = $conn->prepare($sql);
$q->bindParam(':nombresyapellidos', $_POST['nombresyapellidos'], PDO::PARAM_STR);
$q->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
$q->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
$q->bindParam(':fecha', $_POST['fecha'], PDO::PARAM_STR);
$q->execute();

 

?>







                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>

<?php 
session_start();
?>

    <!DOCTYPE html>
    <html lang="es">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ace styles -->
    <title>ACCESO AL SISTEMA</title>
    <link rel="stylesheet" href="vistas/estilo/css/bootstrap.min.css" />
    <link rel="stylesheet" href="vistas/estilo/font-awesome/4.2.0/css/font-awesome.min.css" />
    <!-- ace styles -->
    <link rel="stylesheet" href="vistas/estilo/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
    <style type="text/css">
        body {
            /* Ubicación de la imagen */
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

                                <div class="panel-body">


                                    <div class="panel-heading">


                                        <div class="register-box-body">
                                            <center>
                                                <p class="login-box-msg">DATOS DEL USUARIO</p>
                                            </center>
<?php 
if(isset($_SESSION ["username"])) {
echo $_SESSION["username"];
  echo "  <td><a class='btn btn-success btn-xs'  href='panel.php'> IR AL PANEL <em class='menu-icon fa fa-caret-right''></em></a>
                    </td>";
}else{
?>
                                                <label class="block clearfix">
                                                    <form action="conexiones/login.php" method="POST">

                                                        <div class="form-group has-feedback">
                                                            <input type="text" class="form-control" name="username" required placeholder="Username" autofocus>
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

                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!-- /.col -->
                                                            <div class="col-xs-4">
                                                                <button type="submit" class="btn btn-primary btn-block btn-flat">Acceder</button>
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                    </form>
                                                    <?php 
}
?>
                                                        <div class="social-auth-links text-center">
                                                            <p> </p>
                                                            <a href="registro.php" class="btn btn-block btn-social btn-google btn-danger"><i class=""></i> Registrar nuevo usuario</a>
                                                        </div>
                                                        <p></p>
                                                        <p></p>
                                        </div>
                                        <!-- /.form-box -->
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>

    </html>

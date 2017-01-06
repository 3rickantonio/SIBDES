<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Consulta Hemoterapista</title>


<script src="vistas/estilo/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="vistas/estilo/dist/sweetalert.css">


<!-- ace styles -->
<link rel="stylesheet" href="../vistas/estilo/css/bootstrap.min.css" />
<link rel="stylesheet" href="../vistas/estilo/font-awesome/4.2.0/css/font-awesome.min.css" />
<!-- ace styles -->
<link rel="stylesheet" href="../vistas/estilo/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

<div id="navbar" class="navbar navbar-default">
    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="../panel.php" class="navbar-brand"><small><i class="fa fa-medkit red"></i> SIBDS: Sistema de Informacion Banco de Sangre.</small></a>
        </div>
    </div>
</div>


<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="../panel.php">Inicio</a>
        </li>
        <li class="active">Banco de Sangre</li>
    </ul>
    <!-- /.breadcrumb -->

    <div class="nav-search" id="nav-search">
        <form name="form" accept-charset="UTF-8" role="form" action="../agregar/verificacion.php" method="GET">
            <span class="input-icon">
									<input type="text" name="cedula" id="cedula"  placeholder="Buscar cedula..." class="nav-search-input"  autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
        </form>
    </div>
    <!-- /.nav-search -->
</div>

<div class="container" style="margin-top:20px;">
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">

            <form name="" method="POST" action="">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <center>
                            <h3 class="panel-title">INFORMACION DE HEMOTERAPISTA</h3></center>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../vistas/estilo/avatars/bioanalista.jpg" class="img-circle img-responsive"> </div>


                            <div class=" col-md-9 col-lg-9 ">

                                <table class="table table-user-information">

                                    <tbody>
                                        <tr>
                                            <td>Primer Nombre:</td>
                                            <td width="30">
                                                <input type="text" disabled value="<?php echo $row['nombre1']; ?>" name="nombre1" size="25" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Segundo Nombre:</td>
                                            <td width="30">
                                                <input type="text" disabled value="<?php echo $row['nombre2']; ?>" name="nombre2" size="25" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Primer Apellido:</td>
                                            <td width="30">
                                                <input type="text" disabled value="<?php echo $row['apellido1']; ?>" name="apellido1" size="25" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Segundo Apellido:</td>
                                            <td width="30">
                                                <input type="text" disabled value="<?php echo $row['apellido2']; ?>" name="apellido2" size="25" />
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Fecha de Nacimiento:</td>
                                            <td width="30">
                                                <input type="text" disabled value="<?php echo $row['fecha_nacimiento']; ?>" name="fecha_nacimiento" size="25" />
                                            </td>
                                        </tr>



                                        <tr>
                                            <td>Cedula de Identidad:</td>
                                            <td width="30">
                                                <input type="text" disabled value="<?php echo $row['cedula']; ?>" name="cedula" size="25" />
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Sexo:</td>
                                            <td>
                                                <select id="sexo" disabled name="sexo" class="form-control">
                                                    <option value="NO DEFINIDO">
                                                        <?php echo $row['sexo']; ?>
                                                    </option>
                                                    <option value="MASCULINO">MASCULINO</option>
                                                    <option value="FEMENINO">FEMENINO</option>
                                                </select>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Telefono:</td>
                                            <td width="30">
                                                <input type="text" value="<?php echo $row['telefono']; ?>" disabled name="telefono" size="25" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Direccion:</td>
                                            <td width="30">
                                                <textarea name="direccion" disabled rows="3" cols="27">
                                                    <?php echo $row['direccion']; ?>
                                                </textarea>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>Validacion:</td>
                                            <td>
                                                <select id="sexo" disabled name="sexo" class="form-control">
                                                    <option value="NO DEFINIDO">
                                                        <?php echo $row['valido']; ?>
                                                    </option>
                                                    <option value="ACTIVO">ACTIVO</option>
                                                    <option value="INACTIVO">INACTIVO</option>
                                                </select>
                                            </td>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Departamento:</td>
                                            <td>
                                                <select id="sexo" disabled name="sexo" class="form-control">
                                                    <option value="NO DEFINIDO">
                                                        <?php echo $row['area_nombre']; ?>
                                                    </option>
                                                    <option value="TELEMATICA">TELEMATICA</option>
                                                    <option value="BANCO DE SANGRE">BANCO DE SANGRE</option>
                                                </select>
                                            </td>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="panel-heading">
                        <center>


                            <a class=" btn btn-primary" href="../panel.php">VOLVER AL INICIO</a>
                            <a class=" btn btn-danger" href="../edicion/edithemoterapista.php?cedula=<?php echo $row[ 'cedula'];?>">ACTUALIZAR DATOS</a>










                        </center>
                    </div>

                </div>
        </div>
    </div>
</div>

<?php    include "../vistas/redes.php";    ?>
    <script type="text/javascript">
        window.jQuery || document.write("<script src='../vistas/estilo/js/jquery.min.js'>" + "<" + "/script>");

    </script>
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write("<script src='../vistas/estilo/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");

    </script>
    <script src="../vistas/estilo/js/bootstrap.min.js"></script>
    </body>

</html>

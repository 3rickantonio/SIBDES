<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- ace styles -->
<title>Consulta paciente</title>
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
                            <h3 class="panel-title">INFORMACION PERSONAL DEL PACIENTE</h3></center>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../vistas/estilo/avatars/paciente.png" class="img-circle img-responsive"> </div>

                            <div class=" col-md-9 col-lg-9 ">

                                <table class="table table-user-information">

                                    <tbody>
                                        <tr>
                                            <td>Primer Nombre:</td>
                                            <td width="30">
                                                <input id="nombre1" type="text" disabled value="<?php echo $row['nombre1']; ?>" name="nombres" size="25" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Segundo Nombre:</td>
                                            <td width="30">
                                                <input id="nombre1" type="text" disabled value="<?php echo $row['nombre2']; ?>" name="nombres" size="25" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Primer Apellido:</td>
                                            <td width="30">
                                                <input type="text" id="apellido1" disabled value="<?php echo $row['apellido1']; ?>" name="apellido1" size="25" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Segundo Apellido:</td>
                                            <td width="30">
                                                <input type="text" id="apellido2" disabled value="<?php echo $row['apellido2']; ?>" name="apellido2" size="25" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cedua de Identidad:</td>
                                            <td width="30">
                                                <input type="text" id="cedula" disabled value="<?php echo $row['cedula']; ?>" name="cedula" size="25" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sexo:</td>
                                            <td>
                                                <select id="sexo" name="sexo" disabled class="form-control">
                                                    <option value="">
                                                        <?php echo $row['sexo']; ?>
                                                    </option>
                                                </select>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Fecha de Nacimiento:</td>
                                            <td>
                                                <select id="fecha_nacimiento" name="fecha_nacimiento" disabled class="form-control">
                                                    <option value="">
                                                        <?php echo $row['fecha_nacimiento']; ?>
                                                    </option>
                                                </select>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Telefono:</td>
                                            <td width="30">
                                                <input type="text" id="telefono" disabled value="<?php echo $row['telefono']; ?>" name="telefono" size="25" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Telefono Hab:</td>
                                            <td width="30">
                                                <input type="text" id="telefono" disabled value="<?php echo $row['telefono_hab']; ?>" name="telefono_hab" size="25" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Direccion:</td>
                                            <td width="30">
                                                <input type="text" disabled name="direccion" value="<?php echo $row['direccion']; ?>" size="25" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Afiliacion:</td>
                                            <td>
                                                <select id="afiliacion_nombre" name="afiliacion_nombre" disabled class="form-control">
                                                    <option value="">
                                                        <?php echo $row['afiliacion_nombre']; ?>
                                                    </option>
                                                    <option value="MILITAR">MILITAR</option>
                                                    <option value="AFILIADO">AFILIADO</option>
                                                    <option value="NO AFILIADO">NO AFILIADO</option>

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
                            <h3 class="panel-title">PANTALLAS</h3></center>
                    </div>
                    <div class="panel-body">
                        <div class="row">


                            <div class=" col-md-15 col-lg-15 ">

                                <table class="table table-user-information">
                                    <?php
	require_once '../conexiones/Connection.php';
	$conn = dbConnect();
  $cedula=$_GET['cedula'];
	$sql = "SELECT * FROM pantallas_paciente WHERE paciente_cedula=".$cedula;
	$result = $conn->query($sql);
	$rows = $result->fetchAll();
	foreach ($rows as $row) {
		echo "<hr/>";
	}
 ?>
                                        <tbody>

                                            <tr>
                                                <td>Fecha de Examen:</td>
                                                <td>
                                                    <select id="fecha" disabled name="fecha" class="form-control">
                                                        <option value="NO DEFINIDO">
                                                            <?php echo $row['fecha']; ?>
                                                        </option>

                                                    </select>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pantallas I:</td>
                                                <td>
                                                    <select id="pantalla1" disabled name="pantalla1" class="form-control">
                                                        <option value="NO DEFINIDO">
                                                            <?php echo $row['pantalla1']; ?>
                                                        </option>
                                                        <option value="POSITIVO">POSITIVO</option>
                                                        <option value="NEGATIVO">POSITIVO</option>
                                                    </select>
                                                </td>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Pantallas II:</td>
                                                <td>
                                                    <select id="pantalla2" disabled name="pantalla2" class="form-control">
                                                        <option value="NO DEFINIDO">
                                                            <?php echo $row['pantalla2']; ?>
                                                        </option>
                                                        <option value="POSITIVO">POSITIVO</option>
                                                        <option value="NEGATIVO">POSITIVO</option>
                                                    </select>
                                                </td>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>PANTALLAS III:</td>
                                                <td>
                                                    <select id="pantalla3" disabled name="pantalla3" class="form-control">
                                                        <option value="NO DEFINIDO">
                                                            <?php echo $row['pantalla3']; ?>
                                                        </option>
                                                        <option value="POSITIVO">POSITIVO</option>
                                                        <option value="NEGATIVO">POSITIVO</option>
                                                    </select>
                                                </td>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Pantallas IV:</td>
                                                <td>
                                                    <select id="pantalla4" disabled name="pantalla4" class="form-control">
                                                        <option value="NO DEFINIDO">
                                                            <?php echo $row['pantalla4']; ?>
                                                        </option>
                                                        <option value="POSITIVO">POSITIVO</option>
                                                        <option value="NEGATIVO">POSITIVO</option>
                                                    </select>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cedula del Hemoterapista:</td>
                                                <td>
                                                    <select id="hemoterapista_cedula" disabled name="hemoterapista_cedula" class="form-control">
                                                        <option value="">
                                                            <?php echo $row['hemoterapista_cedula']; ?>
                                                        </option>

                                                    </select>
                                                </td>
                                                </td>
                                            </tr>



                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <center>
                                <h3 class="panel-title">PRUEBA CELULAR</h3></center>
                        </div>
                        <div class="panel-body">
                            <div class="row">

                                <div class=" col-md-15col-lg-15 ">

                                    <table class="table table-user-information">

                                        <tbody>


                                            <?php
	require_once '../conexiones/Connection.php';
	$conn = dbConnect();
    $cedula=$_GET['cedula'];
	$sql = "SELECT * FROM pc_paciente WHERE paciente_cedula=".$cedula;
	$result = $conn->query($sql);
	$rows = $result->fetchAll();
	foreach ($rows as $row) {
		echo "<hr/>";
	}
 ?>

                                                <tr>
                                                    <td>Fecha de Examen:</td>
                                                    <td>
                                                        <select id="fecha" disabled name="fecha" class="form-control">
                                                            <option value="NO DEFINIDO">
                                                                <?php echo $row['fecha']; ?>
                                                            </option>

                                                        </select>
                                                    </td>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Grupo Sanguineo:</td>
                                                    <td>
                                                        <select id="grupo_sanguineo" disabled name="grupo_sanguineo" class="form-control">
                                                            <option value="NO DEFINIDO">
                                                                <?php echo $row['grupo_sanguineo']; ?>
                                                            </option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="O">O</option>
                                                            <option value="AB">AB</option>
                                                        </select>
                                                    </td>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Factor Rh:</td>
                                                    <td>
                                                        <select id="factor_rh" disabled name="factor_rh" class="form-control">
                                                            <option value="NO DEFINIDO">
                                                                <?php echo $row['factor_rh']; ?>
                                                            </option>
                                                            <option value="RH+">RH+</option>
                                                            <option value="RH-">RH-</option>
                                                        </select>
                                                    </td>
                                                    </td>


                                                    <tr>
                                                        <td>DU:</td>
                                                        <td>
                                                            <select id="du" disabled name="du" class="form-control">
                                                                <option value="NO DEFINIDO">
                                                                    <?php echo $row['du']; ?>
                                                                </option>
                                                                <option value="POSITIVO">POSITIVO</option>
                                                                <option value="NEGATIVO">NEGATIVO</option>
                                                            </select>
                                                        </td>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>CD:</td>
                                                        <td>
                                                            <select id="cd" disabled name="cd" class="form-control">
                                                                <option value="NO DEFINIDO">
                                                                    <?php echo $row['cd']; ?>
                                                                </option>
                                                                <option value="POSITIVO">POSITIVO</option>
                                                                <option value="NEGATIVO">NEGATIVO</option>
                                                            </select>
                                                        </td>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Cedula del Hemoterapista:</td>
                                                        <td>
                                                            <select id="hemoterapista_cedula" disabled name="hemoterapista_cedula" class="form-control">
                                                                <option value="">
                                                                    <?php echo $row['hemoterapista_cedula']; ?>
                                                                </option>

                                                            </select>
                                                        </td>
                                                        </td>
                                                    </tr>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

            </form>
            <div class="panel-heading">
                <center>



                    <a class=" btn btn-primary" href="../panel.php">VOLVER AL INICIO</a>
                    <a class=" btn btn-danger" href="../edicion/editpaciente.php?cedula=<?php echo $row['paciente_cedula'];?>">ACTUALIZAR DATOS</a>
                    <a class=" btn btn-success" href="../reportes/transfuciones_x_paciente.php?cedula=<?php echo $row['paciente_cedula'];?>">HISTORIAL DE TRANSFUCIONES</a>

                </center>
            </div>
            </div>
            </div>
        </div>
    </div>



</html>

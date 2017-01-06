<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Consulta Donante</title>

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

<body onKeyDown="javascript:Verificar()">


    <div class="container" style="margin-top:10px;">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">

                <form class="form-horizontal" id="addtipeaje" method="POST" action="../agregar/addtipeaje.php" role="form">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <center>
                                <h3 class="panel-title"> RECEPTOR</h3></center>
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
                                                    <span class="input-icon input-icon-right">
<input type="text" name="nombre1" required size="25" disabled value="<?php echo $row['nombre1']; ?>" />
<i class="ace-icon fa fa-asterisk"></i>
</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Segundo Nombre:</td>
                                                <td width="30">
                                                    <input type="text" disabled value="<?php echo $row['nombre2']; ?>" size="28" />
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Primer Apellido:</td>
                                                <td width="30">
                                                    <span class="input-icon input-icon-right">
<input type="text" name="apellido1" disabled value="<?php echo $row['apellido1']; ?>" size="25" />
<i class="ace-icon fa fa-asterisk"></i>
</td>
</tr>

<tr>
<td>Segundo Apellido:</td>
<td width="30">
<input type="text"  disabled value="<?php echo $row['apellido2']; ?>" size="28" />
</tr>

<tr>
<td>Cedula de Identidad:</td>
<td width="30"> 
 <span class="input-icon input-icon-right">
 <input type="cedula" class="form-control" disabled value="<?php echo $row['cedula']; ?>" required placeholder="***OBLIGATORIO**" size="28" >
<i class="ace-icon fa fa-asterisk"></i>
</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Fecha De Nacimiento:</td>
                                                <td width="30">
                                                    <span class="input-icon input-icon-right">                 
<input class="date-picker" id="id-date-picker-1" name="fecha" type="text" data-date-format="yyyy-mm-dd" disabled value="<?php echo $row['fecha']; ?>" size="25" />
<i class="ace-icon fa fa-calendar"></i>
</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Telefono:</td>
                                                <td width="30">
                                                    <span class="input-icon input-icon-right">
<input type="text" required class="bfh-phone" class="date-picker" disabled value="<?php echo $row['telefono']; ?>" id="id-date-picker-1" data-format="(dddd) ddd-dddd"  placeholder="***OBLIGATORIO**" name="telefono" size="25" /> 
<i class="ace-icon fa fa-phone"></i>
</span>
                                                </td>
                                            </tr>




                                            <tr>
                                                <td>Afiliacion:</td>
                                                <td width="30">

                                                    <input type="text" disabled value="<?php echo $row['afiliacion_nombre']; ?>" />
                                                </td>
                                            </tr>



                                            <tr>
                                                <td>Departamento:</td>
                                                <td width="30">
                                                    <input type="text" disabled value="<?php echo $row['area_nombre']; ?>" />
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Quien Recibe Resultados ?:</td>
                                                <td width="30">
                                                    <input type="text" disabled value="<?php echo $row['recibe']; ?>" size="28" />
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
                                    <div class=" col-md-15 col-lg-15 ">
                                        <table class="table table-user-information">
                                            <tbody>

                                                <tr>
                                                    <td>Grupo Sanguineo:</td>
                                                    <td>
                                                        <input type="text" disabled value="<?php echo $row['grupo_sanguineo']; ?>" size="28" />
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>Factor RH:</td>
                                                    <td>
                                                        <input type="text" disabled value="<?php echo $row['factor_rh']; ?>" size="28" />
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>DU:</td>
                                                    <td>
                                                        <input type="text" disabled value="<?php echo $row['du']; ?>" size="28" />
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>CD:</td>
                                                    <td>
                                                        <input type="text" disabled value="<?php echo $row['cd']; ?>" size="28" />
                                                    </td>
                                                </tr>




                                                <tr>
                                                    <td>Datos Hemoterapista:</td>
                                                    <td>
                                                        <input type="text" disabled value="<?php echo $row['hemoterapista_cedula']; ?>" size="28" />

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
                                        <h3 class="panel-title">PRUEBA PANTALLAS</h3></center>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class=" col-md-15 col-lg-15 ">
                                            <table class="table table-user-information">
                                                <tbody>

                                                    <tr>
                                                        <td>Pantalla I:</td>
                                                        <td>
                                                            <input type="text" disabled value="<?php echo $row['pantalla1']; ?>" size="28" />
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Pantalla II:</td>
                                                        <td>
                                                            <input type="text" disabled value="<?php echo $row['pantalla2']; ?>" size="28" />
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Pantalla III:</td>
                                                        <td>
                                                            <input type="text" disabled value="<?php echo $row['pantalla3']; ?>" size="28" />
                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td>Pantalla IV:</td>
                                                        <td>
                                                            <input type="text" disabled value="<?php echo $row['pantalla4']; ?>" size="28" />
                                                        </td>
                                                    </tr>





                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-heading">
                                    <center>
                                        <button type="button " class="btn btn-lg btn-labeled btn-danger" onclick="history.back()">
                                            <span><i class="fa fa-chevron-left"></i></span> VOLVER
                                        </button>

                                    </center>
                                </div>

                </form>


                <?php
require_once '../conexiones/Connection.php';
$conn = dbConnect();
  if (isset($_POST['cedula'])) {
    $sql2 = 'SELECT * FROM control_tipeaje WHERE cedula = ?';
    $stmt = $conn->prepare($sql2);
    $results = $stmt->execute(array($_POST['cedula']));
    $row = $stmt->fetch();
    if (empty($row)) {
$sql = "INSERT INTO control_tipeaje (cedula,nombre1,nombre2,apellido1,apellido2,telefono,grupo_sanguineo,factor_rh,du,cd,pantalla1,pantalla2,pantalla3, pantalla4,fecha, recibe,area_nombre, afiliacion_nombre,hemoterapista_cedula) VALUES (:cedula,:nombre1,:nombre2,:apellido1,:apellido2,:telefono,:grupo_sanguineo,:factor_rh,:du,:cd,:pantalla1,:pantalla2,:pantalla3, :pantalla4,:fecha, :recibe, :area_nombre, :afiliacion_nombre,:hemoterapista_cedula)";
$q = $conn->prepare($sql);
$q->bindParam(':cedula', $_POST['cedula'], PDO::PARAM_STR);
$q->bindParam(':nombre1', $_POST['nombre1'], PDO::PARAM_STR);
$q->bindParam(':nombre2', $_POST['nombre2'], PDO::PARAM_STR);
$q->bindParam(':apellido1', $_POST['apellido1'], PDO::PARAM_STR);
$q->bindParam(':apellido2', $_POST['apellido2'], PDO::PARAM_STR);
$q->bindParam(':telefono', $_POST['telefono'], PDO::PARAM_STR);
$q->bindParam(':grupo_sanguineo', $_POST['grupo_sanguineo'], PDO::PARAM_STR);
$q->bindParam(':factor_rh', $_POST['factor_rh'], PDO::PARAM_STR);
$q->bindParam(':du', $_POST['du'], PDO::PARAM_STR);
$q->bindParam(':cd', $_POST['cd'], PDO::PARAM_STR);
$q->bindParam(':pantalla1', $_POST['pantalla1'], PDO::PARAM_STR);
$q->bindParam(':pantalla2', $_POST['pantalla2'], PDO::PARAM_STR);
$q->bindParam(':pantalla3', $_POST['pantalla3'], PDO::PARAM_STR);
$q->bindParam(':pantalla4', $_POST['pantalla4'], PDO::PARAM_STR);
$q->bindParam(':fecha', $_POST['fecha'], PDO::PARAM_STR);
$q->bindParam(':recibe', $_POST['recibe'], PDO::PARAM_STR);
$q->bindParam(':area_nombre', $_POST['area_nombre'], PDO::PARAM_STR);
$q->bindParam(':afiliacion_nombre', $_POST['afiliacion_nombre'], PDO::PARAM_STR);
$q->bindParam(':hemoterapista_cedula', $_POST['hemoterapista_cedula'], PDO::PARAM_STR);
$q->execute();
$result= $q->execute();
 echo '<script language="javascript">swal("Receptor Almacenado Correctamente!",
  "",
  "success");</script>';
    }
else{
echo '<script language="javascript"> swal("ERROR!", "El Receptor se encuentra registrado, o ha ocurrido un problema en la actualizacion.", "error");</script>';
  }
  }
?>
                    </div>
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
        <script src="../vistas/estilo/js/bootstrap-datepicker.min.js"></script>
        <script src="../vistas/estilo/js/bootstrap-formhelpers.min.js"></script>
        <script src="../vistas/estilo/js/select2.full.min.js"></script>
        <!-- ace scripts -->
        <script src="../vistas/estilo/js/ace-elements.min.js"></script>
        <script src="../vistas/estilo/js/ace.min.js"></script>
        <script src="../vistas/estilo/js/validaciones.js"></script>
        <script type="text/javascript">
            //datepicker plugin
            //link
            $('.date-picker').datepicker({
                    autoclose: true,
                    todayHighlight: true
                })
                //Mostrar el datepicker al hacer click en el icono
                .next().on(ace.click_event, function() {
                    $(this).prev().focus();
                });
            //to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
            $('input[name=date-range-picker]').daterangepicker({
                    'applyClass': 'btn-sm btn-success',
                    'cancelClass': 'btn-sm btn-default',
                    locale: {
                        applyLabel: 'Apply',
                        cancelLabel: 'Cancel',
                    }
                })
                .prev().on(ace.click_event, function() {
                    $(this).next().focus();
                });
            // otro
            $('#registrationForm').bootstrapValidator({
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    nombre: {
                        validators: {
                            notEmpty: {
                                message: 'El nombre es requerido'
                            }
                        }
                    },
                    apellido: {
                        validators: {
                            notEmpty: {
                                message: 'El apellido es requerido'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'El correo es requerido y no puede ser vacio'
                            },
                            emailAddress: {
                                message: 'El correo electronico no es valido'
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'El password es requerido y no puede ser vacio'
                            },
                            stringLength: {
                                min: 8,
                                message: 'El password debe contener al menos 8 caracteres'
                            }
                        }
                    },
                    datetimepicker: {
                        validators: {
                            notEmpty: {
                                message: 'La fecha de nacimiento es requerida y no puede ser vacia'
                            },
                            date: {
                                format: 'YYYY-MM-DD',
                                message: 'La fecha de nacimiento no es valida'
                            }
                        }
                    },
                    sexo: {
                        validators: {
                            notEmpty: {
                                message: 'El sexo es requerido'
                            }
                        }
                    },
                    telefono: {
                        message: 'El teléfono no es valido',
                        validators: {
                            notEmpty: {
                                message: 'El teléfono es requerido y no puede ser vacio'
                            },
                            regexp: {
                                regexp: /^[0-9]+$/,
                                message: 'El teléfono solo puede contener números'
                            }
                        }
                    },
                    telefono_cel: {
                        message: 'El teléfono no es valido',
                        validators: {
                            regexp: {
                                regexp: /^[0-9]+$/,
                                message: 'El teléfono solo puede contener números'
                            }
                        }
                    },

                }
            });

        </script>

        <script>
            $(function() {
                //Initialize Select2 Elements
                $(".select2").select2();
                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal-blue',
                    radioClass: 'iradio_minimal-blue'
                });


            });

        </script>

</html>

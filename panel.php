<!DOCTYPE html>

<html lang="es">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- ace styles -->
<link rel="stylesheet" href="vistas/estilo/css/bootstrap.min.css" />
<link rel="stylesheet" href="vistas/estilo/font-awesome/4.2.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="vistas/estilo/css/select2.min.css">
<!-- ace styles -->
<link rel="stylesheet" href="vistas/estilo/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
<?php session_start() ?>
    <?php if(isset($_SESSION['username']))
{
   
require_once 'conexiones/Connection.php';
$conn = dbConnect();
if (isset($_SESSION['username'])) {
		$sql = 'SELECT * FROM usuarios WHERE username = ?';
		$stmt = $conn->prepare($sql);
		$results = $stmt->execute(array($_SESSION['username']));
		$row = $stmt->fetch();
		if (empty($row)) {
		}
        else{
        }
	}// 
 
}else{ header("Location: index.php");}?>

        <title>Panel principal - Bienvenido:
            <?php echo $row['nombresyapellidos']; ?>
        </title>


        <div id="navbar" class="navbar navbar-default">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-container" id="navbar-container">
                    <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                        <span class="sr-only">Toggle sidebar</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>
                    </button>

                    <div class="navbar-header pull-left">
                        <a href="panel.php" class="navbar-brand">
                            <small>
							<i class="fa fa-leaf"></i>
						SIBDS: Sistema de Informacion Banco de Sangre.
						</small>
                        </a>
                    </div>
                    <!--menu-->
                    <div class="navbar-buttons navbar-header pull-right" role="navigation">
                        <ul class="nav ace-nav">
                            <li class="light-blue">
                                <a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="vistas/estilo/avatars/bioanalista.jpg" alt="Foto de <?php echo $_SESSION['username']; ?>" />
								<span class="user-info">
								Bienvenido, <?php echo $row['nombresyapellidos']; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

                                <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                    <li>
                                        <a href="reportes/usuarios.php">
                                            <i class="ace-icon fa fa-users"></i> Lista de Usuarios
                                        </a>
                                    </li>

                                    <li>
                                        <a href="edicion/configuracion.php?username=<?php echo $_SESSION['username']; ?>">
                                            <i class="ace-icon fa fa-user"></i> Perfil
                                        </a>
                                    </li>

                                    <li class="divider"></li>

                                    <li>
                                        <a href="logout.php">
                                            <i class="ace-icon fa fa-power-off"></i> Cerrar sesion
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.navbar-container -->
            </div>
        </div>


        <div class="breadcrumbs" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="panel.php">Inicio</a>
                </li>
                <li class="active">Banco de Sangre</li>
            </ul>
            <!-- /.verifica cedula ingresada -->
            <div class="nav-search" id="nav-search">
                <form name="form" accept-charset="UTF-8" role="form" action="agregar/verificacion.php" method="GET">
                    <span class="input-icon">
									<input type="text" name="cedula" id="cedula"  placeholder="Buscar cedula..." class="nav-search-input"  autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                </form>
            </div>
            <!-- /.nav-search -->
        </div>


        <body class="no-skin">




            <div id="sidebar" class="sidebar responsive">
                <ul class="nav nav-list">
                    <li class="active">
                        <a href="panel.php"><i class="menu-icon fa fa-tachometer "></i><span class="menu-text">Panel de control</span></a>
                        <b class="arrow"></b>
                    </li>

                    <!-- /.INICIO DEL PANEL (Menu) PRINCIPAL -->
                    <!-- /.Configuracion -->
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon blue fa fa-cog"></i><span class="menu-text">Configuracion</span>
                            <b class="arrow  blue fa fa-caret-down"></b>
                        </a><b class="arrow"></b>

                        <ul class="submenu">
                            <li class=""><a href="agregar/addarea.php"><i class="menu-icon fa fa-caret-right"></i>Departamentos</a></li>
                            <li class=""><a href="agregar/addafiliacion.php"><i class="menu-icon fa fa-caret-right"></i>Afiliaciones</a><b class="arrow"></b></li>
                        </ul>
                    </li>
                    <!-- FIN Configuracion -->


                    <!-- /.Bioanalista -->
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon blue fa fa-stethoscope"></i><span class="menu-text">Bioanalistas</span>
                            <b class="arrow  blue fa fa-caret-down"></b>
                        </a><b class="arrow"></b>

                        <ul class="submenu">
                            <li class=""><a href="agregar/addbioanalista.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Bioanalista</a></li>
                            <li class=""><a href="reportes/t_bioanalistas.php"><i class="menu-icon fa fa-caret-right"></i>Lista Bioanalistas</a></li>
                            <!-- aqui falta -->

                        </ul>
                    </li>
                    <!-- FIN Bioanalista -->



                    <!-- /.Hemoterapista -->
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon blue fa fa-stethoscope"></i><span class="menu-text">Hemoterapista</span>
                            <b class="arrow  blue fa fa-caret-down"></b>
                        </a><b class="arrow"></b>

                        <ul class="submenu">
                            <li class=""><a href="agregar/addhemoterapista.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Hemoterapista</a></li>
                            <li class=""><a href="reportes/t_hemoterapistas.php"><i class="menu-icon fa fa-caret-right"></i>Lista Hemoterapistas</a></li>
                            <!-- FIN Hemoterapista -->

                        </ul>
                    </li>
                    <!-- FIN Bioanalista -->

                    <!-- /. -->
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon blue fa fa-user"></i><span class="menu-text">Receptor</span>
                            <b class="arrow  blue fa fa-caret-down"></b>
                        </a><b class="arrow"></b>
                        <ul class="submenu">
                            <li class=""><a href="agregar/addtipeaje.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Receptor</a></li>

                        </ul>
                    </li>
                    <!-- FIN Tipeajes -->






                    <!-- /.Donantes -->
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon blue fa fa-user-plus"></i><span class="menu-text">Donantes</span>
                            <b class="arrow  blue fa fa-caret-down"></b>
                        </a><b class="arrow"></b>

                        <ul class="submenu">
                            <li class=""><a href="agregar/adddonante.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Donante</a></li>
                            <li class=""><a href="reportes/t_donantes.php"><i class="menu-icon fa fa-caret-right"></i>Lista de donantes</a></li>
                        </ul>
                    </li>
                    <!-- FIN Donantes -->

                    <!-- /.Pacientes -->
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon blue fa fa-wheelchair"></i><span class="menu-text">Pacientes</span>
                            <b class="arrow  blue fa fa-caret-down"></b>
                        </a><b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="agregar/addpaciente.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Pacientes</a>
                                <li class=""><a href="reportes/t_pacientes.php"><i class="menu-icon fa fa-caret-right"></i>Lista de pacientes</a>
                                </li>


                        </ul>
                        </li>
                        <!-- FIN Pacientes -->

                        <!-- /.Examenes -->
                        <li class="">
                            <a href="#" class="dropdown-toggle">
                                <i class="menu-icon red fa fa-list-ul"></i><span class="menu-text">Examenes</span>
                                <b class="arrow  blue fa fa-caret-down"></b>
                            </a><b class="arrow"></b>

                            <ul class="submenu">

                                <li class=""><a href="../agregar/pc_donante.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Pruebas Celulares Donante</a><b class="arrow"></b></li>
                                <li class=""><a href="../agregar/pc_paciente.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Pruebas Celulares Paciente</a><b class="arrow"></b></li>
                                <li class=""><a href="../agregar/pp_paciente.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Pruebas Pantallas Paciente</a><b class="arrow"></b></li>
                                <li class=""><a href="../agregar/ps_donante.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Pruebas Serologicas Donantes</a><b class="arrow"></b></li>
                                <li class=""><a href="../agregar/pp_donante.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Pruebas Pantallas Donantes</a><b class="arrow"></b></li>

                            </ul>
                        </li>
                        <!-- FIN Examenes -->



                        <!-- /.Transfuciones -->
                        <li class="">
                            <a href="#" class="dropdown-toggle">
                                <i class="menu-icon red fa fa-tint"></i><span class="menu-text">Transfusiones</span>
                                <b class="arrow  blue fa fa-caret-down"></b>
                            </a><b class="arrow"></b>

                            <ul class="submenu">
                                <li class=""><a href="agregar/addbolsa.php"><i class="menu-icon fa fa-caret-right"></i>Registrar seleccion</a></li>
                                <li class=""><a href="agregar/cont_tranf_prep.php"><i class="menu-icon fa fa-caret-right"></i>Control De Transfusiones Preparadas</a></li>
                            </ul>
                        </li>
                        <!-- FIN Transfuciones -->
                        <!-- /.Reportes -->
                        <li class="">
                            <a href="#" class="dropdown-toggle">
                                <i class="menu-icon blue fa fa-file-pdf-o"></i><span class="menu-text">Reportes</span>
                                <b class="arrow  blue fa fa-caret-down"></b>
                            </a><b class="arrow"></b>

                            <ul class="submenu">
                                <li class=""><a href="reportes/t_reportes.php"><i class="menu-icon fa fa-caret-right"></i>Lista Reportes!</a><b class="arrow"></b></li>
                            </ul>
                        </li>
                        <!-- FIN Reportes -->
                        <!-- /.Manueles -->
                        <li class="">
                            <a href="#" class="dropdown-toggle">
                                <i class="menu-icon red fa fa-file-pdf-o "></i><span class="menu-text">Manuales</span>
                                <b class="arrow  red fa fa-caret-down"></b>
                            </a>
                            </b>

                            <ul class="submenu">
                                <li class=""><a href="manual/"><i class="menu-icon fa fa-caret-right"></i>Manual</a></li>
                            </ul>
                        </li>
                        <!-- FIN Reportes -->
                        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                            <i class="ace-icon  fa fa-angle-double-left blue" data-icon1="ace-icon blue fa fa-angle-double-left" data-icon2="ace-icon blue fa fa-angle-double-right"></i>
                        </div>
                </ul>

            </div>




        </body>

        <?php   
       include "contenido.php";    
    ?>



            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                <span class=" bolder " >Leyenda: </span> <i><b>PC</b>:Pruebas celulares, <b>PS</b>:Pruebas serologicas, <b>B</b>:Bolsa, <b>PP</b>:Pruebas Pantallas</i></span>
                    </div>
                </div>
            </div>


            <script type="text/javascript">
                window.jQuery || document.write("<script src='vistas/estilo/js/jquery.min.js'>" + "<" + "/script>");

            </script>
            <script src="vistas/estilo/js/jquery-1.11.1.min"></script>
            <script src="vistas/estilo/js/bootstrap.min.js"></script>
            <!-- ace scripts -->
            <script src="vistas/estilo/js/ace-elements.min.js"></script>
            <script src="vistas/estilo/js/ace.min.js"></script>
            <!-- DataTables -->
            <script src="vistas/estilo/js/jquery.dataTables2.min.js"></script>
            <script src="vistas/estilo/js/dataTables.bootstrap2.min.js"></script>
            <!-- SlimScroll -->
            <script>
                $(function() {
                    $("#example1").DataTable();
                    $('#example2').DataTable({
                        "paging": false,
                        "lengthChange": false,
                        "searching": false,
                        "ordering": false,
                        "info": false,
                        "autoWidth": false,
                        "scrollX": true,
                    });
                });

            </script>
            <style type="text/css">
                body {
                    /* Ubicacion de la imagen */
                    background-image: url("vistas/estilo/avatars/fondoa.jpg");
                    /* Nos aseguramos que la imagen de fondo este centrada vertical y
    horizontalmente en todo momento */
                    background-position: center center;
                    font-family: "Cambria";
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

</html>

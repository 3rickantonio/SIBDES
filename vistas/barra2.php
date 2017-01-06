<?php session_start() ?>
    <?php if(isset($_SESSION['username']))
{
   
require_once '../conexiones/Connection.php';
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

        <html lang="es">
        <link rel="stylesheet" href="../vistas/estilo/css/select2.min.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
                        <a href="../panel.php" class="navbar-brand">
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
								<img class="nav-user-photo" src="../vistas/estilo/avatars/bioanalista.jpg" alt="Foto de <?php echo $_SESSION['username']; ?>" />
								<span class="user-info">
								Bienvenido, <?php echo $row['nombresyapellidos']; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

                                <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                    <li>
                                        <a href="../reportes/usuarios.php">
                                            <i class="ace-icon fa fa-users"></i> Lista de Usuarios
                                        </a>
                                    </li>

                                    <li>
                                        <a href="../edicion/configuracion.php?username=<?php echo $_SESSION['username']; ?>">
                                            <i class="ace-icon fa fa-user"></i> Perfil
                                        </a>
                                    </li>

                                    <li class="divider"></li>

                                    <li>
                                        <a href="../logout.php">
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

                </li>
                <li class="active">SIBDS: Sistema de Informacion Banco de Sangre > Reportes</li>
            </ul>
            <!-- /.verifica cedula ingresada -->

            <!-- /.nav-search -->
        </div>

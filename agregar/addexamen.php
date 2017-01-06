<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="../vistas/estilo/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../vistas/estilo/dist/sweetalert.css">
<link rel="stylesheet" href="../vistas/estilo/css/datepicker.min.css" />
<title>Buscar</title>

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


        <!-- ace styles -->
        <link rel="stylesheet" href="../vistas/estilo/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../vistas/estilo/font-awesome/4.2.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="../vistas/estilo/css/select2.min.css">
        <!-- ace styles -->
        <link rel="stylesheet" href="../vistas/estilo/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <div id="navbar" class="navbar navbar-default">
          <div id="navbar" class="navbar navbar-default">
			<div class="navbar-container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

				</button>

				<div class="navbar-header pull-left">
					<a href="../panel.php" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
						SIBDS: Sistema de Informacion Banco de Sangre.
						</small>
					</a>
                    <a href="../panel.php" class="navbar-brand">
						<small>
							<i class=""></i>
						Bienvenido, <?php echo $row['nombresyapellidos']; ?>
					</a>
                  
				</div>
				<!--menu-->
		 
			</div><!-- /.navbar-container -->
		</div>	</div>


    <div class="breadcrumbs" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="../panel.php">Inicio</a>
            </li>
            <li class="active">Banco de Sangre</li>
             <li class="active">Busqueda cedula</li>
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
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <center>
                            <center><img class="profile-img" width='250' height='250' src="../vistas/estilo/avatars/paciente.png"> </center>
                            <div class="panel-heading">
                                <h3 class="panel-title">BUSQUEDA</h3></center>
                        </div>
                        <div class="panel-body">
                            <form name="form" accept-charset="UTF-8" role="form" action="verificacion.php" method="GET">
                                <fieldset>
                                    <center>
                                        PACIENTE - DONANTE:
                                        <div class="panel-heading">

                                            <label class="block clearfix">
                                                <span class="block input-icon input-icon-left">
															<input type="int" name="cedula" id="cedula" class="form-control" placeholder=" Cedula" required />
															<i class="ace-icon fa fa-hashtag"></i>
														</span>
                                            </label>
                                </fieldset>
                                <div class="panel-heading">
                                    <div class="panel-heading">
                            </form>
                            <center>
                                <button type="button " class="btn btn-lg btn-labeled btn-danger">
                                    <span><i class="fa fa-chevron-left"></i></span> VOLVER
                                </button>

                                <button type="button " value="Buscar" class="btn btn-lg btn-labeled btn-success">
                                    BUSCAR <span><i class="fa fa-chevron-right"></i>
                      </center>
                        <p></p>  
                    </div>
                </div>     
            </div>
        </div>        
    </div>
     <script src="../vistas/estilo/dist/sweetalert.min.js"></script>
<script src="../vistas/estilo/js/validaciones.js"></script>
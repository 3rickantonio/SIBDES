<!DOCTYPE html>


<html lang="es">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Actualizar Datos del Usuario</title>

<script src="../vistas/estilo/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../vistas/estilo/dist/sweetalert.css">
<link rel="stylesheet" href="../vistas/estilo/css/datepicker.min.css" />
<?php  include "../vistas/barra.php";
                include "../vistas/menu.php";
    ?>

    <?php
require_once '../conexiones/Connection.php';
$conn = dbConnect();
if (isset($_GET['username'])) {
		$sql = 'SELECT * FROM usuarios WHERE username = ?';
		$stmt = $conn->prepare($sql);
		$results = $stmt->execute(array($_GET['username']));
		$row = $stmt->fetch();
		if (empty($row)) {
		}
        else{
        }
	}// 
?>

        <body onKeyDown="javascript:Verificar()">
            <div class="container" style="margin-top:10px;">
                <div class="col-md-3">
                    <td></td>
                </div>
                <div class="col-md-6">
                    <h2>Actualizar Datos del Usuario</h2>
                    <br>
                    <form class="form-horizontal" role="form" accion="configuracion.php?username=<?php echo $row['username']; ?>" method="post">

                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-4 control-label">Nombre y Apellido:</label>
                            <div class="col-lg-8">
                                <input type="nombresyapellidos" class="form-control" id="nombresyapellidos" value="<?php echo $row['nombresyapellidos']; ?>" name="nombresyapellidos" placeholder="Nombre de usuario Actual">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-4 control-label">Username:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" value="<?php echo $row['username']; ?>" id="username" name="username" placeholder="Nombre de usuario">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-4 control-label">Fecha:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" value="<?php echo $row['fecha']; ?>" id="fecha" name="fecha" placeholder="Fecha">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-4 control-label">Estado del Usuario:</label>
                            <div class="col-lg-8">
                                <select id="valido" name="valido" required>
                                    <option value="<?php echo $row['valido']; ?>">
                                        <?php echo $row['valido']; ?>
                                    </option>
                                    <option value="">->Seleccione:</option>
                                    <option value="ACTIVO">ACTIVO</option>
                                    <option value="INACTIVO">INACTIVO</option>
                                </select>
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-4 control-label">Sexo:</label>
                            <div class="col-lg-8">
                                <select id="sexo" name="sexo" required>
                                    <option value="<?php echo $row['sexo']; ?>">
                                        <?php echo $row['sexo']; ?>
                                    </option>
                                    <option value="">->Seleccione:</option>
                                    <option value="MASCULINO">MASCULINO</option>
                                    <option value="FEMENINO">FEMENINO</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-4 control-label">Telefono:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" value="<?php echo $row['telefono']; ?>" id="telefono" name="telefono" placeholder="Telefono">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="inputPassword1" class="col-lg-4 control-label">Contraseña:</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" value="<?php echo $row['password']; ?>" name="password" placeholder="Nueva Contraseña">
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-4 control-label">Cargo:</label>
                            <div class="col-lg-8">
                                <select id="valido" name="departamento" required>
                                    <option value="<?php if (isset($departamento)) echo $departamento; else echo $row['departamento']; ?>">
                                        <?php if (isset($departamento)) echo $departamento; else echo $row['departamento']; ?>
                                    </option>
                                    <option value="JEFE DEL AREA DE BANCO DE SANGRE">JEFE DEL AREA DE BANCO DE SANGRE</option>
                                    <option value="COORDINADORA DE BANCO DE SANGRE">COORDINADORA DE BANCO DE SANGRE</option>
                                    <option value="HEMOTERAPISTA">HEMOTERAPISTA</option>
                                    <option value="BIOANALISTA">BIOANALISTA</option>
                                    <option value="SOPORTE">SOPORTE</option>

                                </select>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-lg-offset-4 col-lg-8">
                                <button type="submit" class="btn btn-success ">Guardar Cambios</button>

                                <a class=" btn btn-primary" href="../panel.php">Volver al Inicio</a>
                            </div>
                        </div>
                    </form>
                    <?php

 require_once '../conexiones/Connection.php';
$conn = dbConnect();
if (isset($_GET['username'])) {
          $sql2 = 'SELECT * FROM usuarios WHERE username = ?';
          $stmt = $conn->prepare($sql2);
          $results = $stmt->execute(array($_GET['username']));
          $row = $stmt->fetch();
          if (empty($row)) {
          }
          else{            
                
    $nombresyapellidos = (isset($_POST['nombresyapellidos']) ? $_POST['nombresyapellidos'] : '');
    $username = (isset($_POST['username']) ? $_POST['username'] : '');
    $password = (isset($_POST['password']) ? $_POST['password'] : '');
    $fecha = (isset($_POST['fecha']) ? $_POST['fecha'] : '');
    $valido = (isset($_POST['valido']) ? $_POST['valido'] : '');
    $departamento = (isset($_POST['departamento']) ? $_POST['departamento'] : '');
    $sexo = (isset($_POST['sexo']) ? $_POST['sexo'] : '');
    $telefono = (isset($_POST['telefono']) ? $_POST['telefono'] : '');
    $id = (isset($_POST['id']) ? $_POST['id'] : '');       
    $sql = "UPDATE usuarios SET
    nombresyapellidos='".$nombresyapellidos."',
    username='".$username."',
    password='".$password."',
    fecha='".$fecha."',
    valido='".$valido."',
    departamento='".$departamento."',
    sexo='".$sexo."',  
    telefono='".$telefono."'
    WHERE id=".$id;
    $q = $conn->prepare($sql);
    $q->execute();
              
      }
          }
          ?>

                </div>

            </div>
            <script type="text/javascript">
                window.jQuery || document.write("<script src='../vistas/estilo/js/jquery.min.js'>" + "<" + "/script>");

            </script>

            <script src="../vistas/estilo/js/bootstrap.min.js"></script>
            <!-- ace scripts -->
            <script src="../vistas/estilo/js/ace-elements.min.js"></script>
            <script src="../vistas/estilo/js/ace.min.js"></script>

            <script src="../vistas/estilo/js/validaciones.js"></script>

            <script>
                $("#changepasswd").submit(function(e) {
                    if ($("#password").val() == "" || $("#newpassword").val() == "" || $("#confirmnewpassword").val() == "") {
                        e.preventDefault();

                        swal("ERROR!", "No debes dejar espacios vacios..", "error");


                    } else {
                        if ($("#newpassword").val() == $("#confirmnewpassword").val()) {
                            //			alert("Correcto");			
                        } else {
                            e.preventDefault();
                            swal("ERROR!", "Las nueva contraseña no coincide con la confirmacion.", "error");

                        }
                    }
                });

            </script>
            </div>
            <?php    include "../vistas/redes.php";    ?>


</html>

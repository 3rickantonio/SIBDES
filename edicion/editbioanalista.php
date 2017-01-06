<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Editar Bioanalista</title>


<script src="../vistas/estilo/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../vistas/estilo/dist/sweetalert.css">
<link rel="stylesheet" href="../vistas/estilo/css/datepicker.min.css" />

<?php   include "../vistas/barra.php";
                include "../vistas/menu.php";
               ?>

<body onKeyDown="javascript:Verificar()">
    <div class="container" style="margin-top:10px;">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">

                <form name="" method="POST" accion="editbioanalista.php?cedula=<?php echo $row['cedula']; ?>">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <center>
                                <h3 class="panel-title">INFORMACION DE BIOANALISTA</h3></center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../vistas/estilo/avatars/bioanalista.jpg" class="img-circle img-responsive"> </div>






                                <div class=" col-md-9 col-lg-9 ">

                                    <table class="table table-user-information">
                                        <?php
                      require_once '../conexiones/Connection.php';
                      $conn = dbConnect();
                      $cedula=$_GET['cedula'];
                      $sql = "SELECT * FROM bioanalista WHERE cedula=".$cedula;
                      $result = $conn->query($sql);
                      $rows = $result->fetchAll();
                      foreach ($rows as $row) {
                        echo "<hr/>";
                      }
                     ?>

                                            <tbody>
                                                <tr>
                                                    <td>Primer Nombre:</td>
                                                    <td width="30">
                                                        <input id="nombres" type="text" value="<?php echo $row['nombre1']; ?>" name="nombre1" required size="25" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Segundo Nombre:</td>
                                                    <td width="30">
                                                        <input id="nombres" type="text" value="<?php echo $row['nombre2']; ?>" name="nombre2" size="25" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Primer Apellido:</td>
                                                    <td width="30">
                                                        <input type="text" id="apellido1" value="<?php echo $row['apellido1']; ?>" name="apellido1" required size="25" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Segundo Nombre:</td>
                                                    <td width="30">
                                                        <input type="text" id="apellido2" value="<?php echo $row['apellido2']; ?>" name="apellido2" size="25" />
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Fecha De Naciemiento:</td>
                                                    <td width="30">
                                                        <span class="input-icon input-icon-right">
                                                            
                              <input class="date-picker" id="id-date-picker-1" name="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento']; ?>"  required type="text" data-date-format="yyyy-mm-dd" required="required"/>
                              <i class="ace-icon fa fa-calendar"></i>
                                                          
                            </span>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>Cedula de Identidad:</td>
                                                    <td width="30">
                                                        <input type="text" id="cedula" value="<?php echo $row['cedula']; ?>" disabled name="cedula" required size="25" />
                                                    </td>
                                                </tr>




                                                <tr>
                                                    <td>Sexo:</td>
                                                    <td>
                                                        <select id="sexo" name="sexo" required class="form-control">
                                                            <option value="<?php echo $row['sexo']; ?>">
                                                                <?php echo $row['sexo']; ?>
                                                            </option>
                                                            <option value="">->Seleccione:</option>
                                                            <option value="MASCULINO">MASCULINO</option>
                                                            <option value="FEMENINO">FEMENINO</option>
                                                        </select>
                                                    </td>
                                                    </td>
                                                </tr>




                                                <input type="hidden" value="<?php echo $row['cedula']; ?>" name="cedula">
                                                <tr>
                                                    <td>Telefono:</td>
                                                    <td width="30">
                                                        <input type="text" class="bfh-phone" value="<?php echo $row['telefono']; ?>" data-format="(dddd) ddd-dddd" required name="telefono" required size="25" />
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Direccion:</td>
                                                    <td width="30">
                                    <textarea name="direccion" rows="3" cols="27"><?php echo $row['direccion']; ?></textarea>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>Validacion:</td>
                                                    <td>
                                                        <select id="valido" name="valido" required class="form-control">
                                                            <option value="<?php echo $row['valido']; ?>">
                                                                <?php echo $row['valido']; ?>
                                                            </option>
                                                            <option value="ACTIVO">ACTIVO</option>
                                                            <option value="INACTIVO">INACTIVO</option>
                                                        </select>
                                                    </td>
                                                    </td>
                                                </tr>

                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <td>Departamento:</td>
                                                            <td width="30">
                                                                <select required id="area_nombre" name="area_nombre" class="form-control select2">
                                                                    <option value="<?php echo $row['area_nombre']; ?>">
                                                                        <?php echo $row['area_nombre']; ?>
                                                                    </option>
                                                                    <?php
$sql="SELECT * from area ORDER BY nombre ASC";
$result = $conn->query($sql);
if ($result-> rowCount() >0){
    $combobit2="->Seleccione:";
    while ($row = $result->fetch(MYSQLI_ASSOC)) {
        $combobit2 .=" <option value='".$row['nombre']."'>".$row['nombre']."</option>"; 
    }
}
?>
                                                                        <option value="<?php echo $combobit2; ?>">
                                                                            <?php echo $combobit2; ?>
                                                                        </option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="panel-heading">
                            <center>

                                <a class=" btn btn-primary" href="../panel.php">VOLVER AL INICIO</a>

                                <button type="button " class="btn btn-primary btn-success">
                                    <span></span>ACTUALIZAR DATOS
                                </button>

                            </center>
                        </div>










                </form>

                <?php

          $result = "";
          $row = null;


          if (isset($_GET['cedula'])) {
          $sql2 = 'SELECT * FROM bioanalista WHERE cedula = ?';
          $stmt = $conn->prepare($sql2);
          $results = $stmt->execute(array($_GET['cedula']));
          $row = $stmt->fetch();
          if (empty($row)) {


          /*echo '<script language="javascript">swal("Datos Almacenados Correctamente!",
          "",
          "success");</script>';*/


          }
          else{

              
              

            //ACTUALIZA DATOS PACIENTE
           
              
              
              $nombre1 = (isset($_POST['nombre1']) ? $_POST['nombre1'] : '');
              $nombre2 = (isset($_POST['nombre2']) ? $_POST['nombre2'] : '');
              $apellido1 = (isset($_POST['apellido1']) ? $_POST['apellido1'] : '');
              $apellido2 = (isset($_POST['apellido2']) ? $_POST['apellido2'] : '');
              $sexo= (isset($_POST['sexo']) ? $_POST['sexo'] : '');
              $fecha_nacimiento = (isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : '');
              $cedula = (isset($_POST['cedula']) ? $_POST['cedula'] : '');
              $telefono = (isset($_POST['telefono']) ? $_POST['telefono'] : '');
              $direccion = (isset($_POST['direccion']) ? $_POST['direccion'] : '');
              $valido = (isset($_POST['valido']) ? $_POST['valido'] : '');
              $area_nombre = (isset($_POST['area_nombre']) ? $_POST['area_nombre'] : '');         
              $sql = "UPDATE bioanalista SET
              nombre1='".$nombre1."',
              nombre2='".$nombre2."',
              apellido1='".$apellido1."',
              apellido2='".$apellido2."',
              sexo='".$sexo."',
              fecha_nacimiento='".$fecha_nacimiento."',
              cedula='".$cedula."',
              telefono='".$telefono."',
              direccion='".$direccion."',
              valido='".$valido."',
              area_nombre='".$area_nombre."'
              WHERE cedula=".$cedula;
              $q = $conn->prepare($sql);
              $q->execute();
          }
          }


          ?>

                    </div>
            </div>
        </div>
    </div>


   <!--ESTE CAMPO LLAMA LA LEYENDA Y UNOS SCIPTS-->
<?php    include "../vistas/redes.php";  ?>
  <!--AQUI SE LLAMAN LOS SCRIPTS NECESARIOS PARA ESTE FORMULARIO-->               
<script type="text/javascript">
window.jQuery || document.write("<script src='../vistas/estilo/js/jquery.min.js'>" + "<" + "/script>");
</script>
<script type="text/javascript">
if ('ontouchstart' in document.documentElement) document.write("<script src='../vistas/estilo/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
  <!--AQUI SE LLAMAN LOS SCRIPTS JS-->
<script src="../vistas/estilo/js/bootstrap.min.js"></script>
<script src="../vistas/estilo/js/bootstrap-datepicker.min.js"></script>
<script src="../vistas/estilo/js/bootstrap-formhelpers.min.js"></script>
<script src="../vistas/estilo/js/select2.full.min.js"></script>
<!-- ACE SCRYPTS -->
<script src="../vistas/estilo/js/ace-elements.min.js"></script>
<script src="../vistas/estilo/js/ace.min.js"></script>
 <!-- VALIDACIONES -->               
<script src="../vistas/estilo/js/validaciones.js"></script>
<script>
  $(function () {
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
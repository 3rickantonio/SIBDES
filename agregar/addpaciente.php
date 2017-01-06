<?php require_once '../conexiones/Connection.php';
$conn = dbConnect();
?>
    <!DOCTYPE html>
    <html lang="es">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Paciente</title>

    <script src="../vistas/estilo/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../vistas/estilo/dist/sweetalert.css">
    <link rel="stylesheet" href="../vistas/estilo/css/datepicker.min.css" />
    <?php include "../vistas/barra.php";              
                 include "../vistas/menu.php"; ?>



        <body onKeyDown="javascript:Verificar()">


            <div class="container" style="margin-top:10px;">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">

                        <form accept-charset="UTF-8" role="form" method="POST" action="addpaciente.php">
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
                                                            <span class="input-icon input-icon-right">
<input type="text" name="nombre1" required size="25" required placeholder="***OBLIGATORIO**" />
<i class="ace-icon fa fa-asterisk"></i>
</span>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Segundo Nombre:</td>
                                                        <td width="30">
                                                            <input type="text" name="nombre2" size="25" />
                                                        </td>
                                                    </tr>





                                                    <tr>
                                                        <td>Primer Apellido:</td>
                                                        <td width="30">
                                                            <span class="input-icon input-icon-right">
                                 <input type="text" name="apellido1" required placeholder="***OBLIGATORIO**" size="25" />
                                                                 <i class="ace-icon fa fa-asterisk"></i>
                                                             
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Segundo Apellido:</td>
                                                        <td width="30">
                                                            <input type="text" name="apellido2" size="25" />
                                                        </td>
                                                    </tr>






 <tr>
                                                        <td>Cedula de Identidad:</td>
                                                        <td width="30">
                                                             <span class="input-icon input-icon-right">
                                                            <input type="text" required placeholder="***OBLIGATORIO**" name="cedula" size="25" />
                                                                  <i class="ace-icon fa fa-asterisk"></i>
                                                            </span>
                                                        </td>
                                                    </tr>






                                                    <tr>
                                                        <td>Sexo:</td>
                                                        <td>
                                                            <select id="sexo" name="sexo" required class="form-control">
                                                                <option value="">->Seleccione:</option>
                                                                <option value="MASCULINO">MASCULINO</option>
                                                                <option value="FEMENINO">FEMENINO</option>
                                                            </select>
                                                        </td>
                                                    </tr>





                                                    <tr>
                                                        <td>Fecha De Nacimiento:</td>
                                                        <td width="30">
                                                            <span class="input-icon input-icon-right">
                              <input class="date-picker" id="id-date-picker-1" name="fecha_nacimiento" type="text" data-date-format="yyyy-mm-dd" required="required"/>
                              <i class="ace-icon fa fa-calendar"></i>
                            </span>
                                                        </td>
                                                    </tr>




                                                    <tr>
                                                        <td>Telefono:</td>
                                                        <td width="30">
                                                            <span class="input-icon input-icon-right">
                                                            <input type="text" class="bfh-phone" data-format="(dddd) ddd-dddd" required name="telefono" size="25" />
                                                            <i class="ace-icon fa fa-phone"></i>
                                                                </span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Telefono Hab:</td>
                                                        <td width="30">
                                                            <span class="input-icon input-icon-right">
                                                            <input type="text" required class="bfh-phone" data-format="(dddd) ddd-dddd"  name="telefono_hab" size="25" />
                                                            <i class="ace-icon fa fa-phone"></i>
                                                                </span>

                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Direccion:</td>
                                                        <td width="30">
                                                            <textarea name="direccion" required rows="3" cols="27"></textarea>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Comentarios:</td>
                                                        <td width="30">
                                                            <textarea name="comentario" required rows="3" cols="27"></textarea>
                                                        </td>
                                                    </tr>










                                                    <?php
                require_once '../conexiones/Connection.php';
$conn = dbConnect();
$sql="SELECT * from afiliacion ORDER BY nombre ASC";
$result = $conn->query($sql);
if ($result-> rowCount() >0){
    $combobit2="->Seleccione:";
    while ($row = $result->fetch(MYSQLI_ASSOC)) {
        $combobit2 .=" <option value='".$row['nombre']."'>".$row['nombre']."</option>"; 
    }
}
if ($result-> rowCount() ==0){
    $combobit2="SIN REGISTRO";
}                                                    
?>


                                                        <div class="box-body">
                                                            <div class="row">
                                                                <div class="form-group">
                                                                    <td>Afiliacion:</td>
                                                                    <td width="30">
                                                                        <select required id="afiliacion_nombre" name="afiliacion_nombre" class="form-control select2">
                                                                            <option value="">
                                                                                <?php echo $combobit2; ?>
                                                                            </option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>










                                                        <input type="hidden" value="2000-00-00" name="fecha">
                                                        <input type="hidden" value="SIN RESULTADO" name="pantalla1">
                                                        <input type="hidden" value="SIN RESULTADO" name="pantalla2">
                                                        <input type="hidden" value="SIN RESULTADO" name="pantalla3">
                                                        <input type="hidden" value="SIN RESULTADO" name="pantalla4">
                                                        <input type="hidden" value="SIN RESULTADO" name="grupo_sanguineo">
                                                        <input type="hidden" value="SIN RESULTADO" name="factor_rh">
                                                        <input type="hidden" value="SIN RESULTADO" name="du">
                                                        <input type="hidden" value="SIN RESULTADO" name="cd">
                                                        <input type="hidden" value="SIN RESULTADO" name="paciente_cedula">
                                                        <input type="hidden" value="SIN RESULTADO" name="bioanalista_cedula">



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                        </form>
                        <div class="panel-heading">
                            <center>
                                <center>
                                    <button type="button " class="btn btn-lg btn-labeled btn-danger" onclick="history.back()">
                                        <span><i class="fa fa-chevron-left"></i></span> VOLVER
                                    </button>
                                    <button type="button " value="Buscar" class="btn btn-lg btn-labeled btn-success">
                                        GUARDAR <span><i class="fa fa-chevron-right"></i>
</center>
</center>
</div>         








                    <?php
require_once '../conexiones/Connection.php';
$conn = dbConnect();

  if (isset($_POST['cedula'])) {
    $sql2 = 'SELECT * FROM paciente WHERE cedula = ?';
    $stmt = $conn->prepare($sql2);
    $results = $stmt->execute(array($_POST['cedula']));
    $row = $stmt->fetch();
    if (empty($row)) {
$sql = "INSERT INTO paciente (nombre1,nombre2,apellido1,apellido2,sexo,fecha_nacimiento,cedula,telefono,telefono_hab,direccion,afiliacion_nombre,comentarios) VALUES (:nombre1,:nombre2,:apellido1,:apellido2,:sexo,:fecha_nacimiento,:cedula,:telefono,:telefono_hab,:direccion,:afiliacion_nombre,:comentarios)";
$q = $conn->prepare($sql);
$q->bindParam(':nombre1', $_POST['nombre1'], PDO::PARAM_STR);
$q->bindParam(':nombre2', $_POST['nombre2'], PDO::PARAM_STR);
$q->bindParam(':apellido1', $_POST['apellido1'], PDO::PARAM_STR);
$q->bindParam(':apellido2', $_POST['apellido2'], PDO::PARAM_STR);
$q->bindParam(':sexo', $_POST['sexo'], PDO::PARAM_STR);
$q->bindParam(':fecha_nacimiento', $_POST['fecha_nacimiento'], PDO::PARAM_STR);
$q->bindParam(':cedula', $_POST['cedula'], PDO::PARAM_STR);
$q->bindParam(':telefono', $_POST['telefono'], PDO::PARAM_STR);
$q->bindParam(':telefono_hab', $_POST['telefono_hab'], PDO::PARAM_STR);
$q->bindParam(':direccion', $_POST['direccion'], PDO::PARAM_STR);
$q->bindParam(':afiliacion_nombre', $_POST['afiliacion_nombre'], PDO::PARAM_STR);
$q->bindParam(':comentarios', $_POST['comentarios'], PDO::PARAM_STR);
$q->execute();


$sql = "INSERT INTO pc_paciente (fecha,du,cd,factor_rh,grupo_sanguineo,paciente_cedula,bioanalista_cedula) VALUES (:fecha,:du,:cd,:factor_rh,:grupo_sanguineo,:paciente_cedula,:bioanalista_cedula)";
$q = $conn->prepare($sql);
$q->bindParam(':fecha', $_POST['fecha'], PDO::PARAM_STR);
$q->bindParam(':du', $_POST['du'], PDO::PARAM_STR);
$q->bindParam(':cd', $_POST['cd'], PDO::PARAM_STR);
$q->bindParam(':factor_rh', $_POST['factor_rh'], PDO::PARAM_STR);
$q->bindParam(':grupo_sanguineo', $_POST['grupo_sanguineo'], PDO::PARAM_STR);
$q->bindParam(':paciente_cedula', $_POST['cedula'], PDO::PARAM_STR);
$q->bindParam(':bioanalista_cedula', $_POST['bioanalista_cedula'], PDO::PARAM_STR);
$q->execute();


$sql = "INSERT INTO pc_paciente_historia (fecha,du,cd,factor_rh,grupo_sanguineo,paciente_cedula,bioanalista_cedula) VALUES (:fecha,:du,:cd,:factor_rh,:grupo_sanguineo,:paciente_cedula,:bioanalista_cedula)";
$q = $conn->prepare($sql);
$q->bindParam(':fecha', $_POST['fecha'], PDO::PARAM_STR);
$q->bindParam(':du', $_POST['du'], PDO::PARAM_STR);
$q->bindParam(':cd', $_POST['cd'], PDO::PARAM_STR);
$q->bindParam(':factor_rh', $_POST['factor_rh'], PDO::PARAM_STR);
$q->bindParam(':grupo_sanguineo', $_POST['grupo_sanguineo'], PDO::PARAM_STR);
$q->bindParam(':paciente_cedula', $_POST['cedula'], PDO::PARAM_STR);
$q->bindParam(':bioanalista_cedula', $_POST['bioanalista_cedula'], PDO::PARAM_STR);
$q->execute();


$sql = "INSERT INTO pantallas_paciente (fecha,pantalla1,pantalla2,pantalla3,pantalla4,paciente_cedula,bioanalista_cedula) VALUES (:fecha,:pantalla1,:pantalla2,:pantalla3,:pantalla4,:paciente_cedula,:bioanalista_cedula)";
$q = $conn->prepare($sql);
$q->bindParam(':fecha', $_POST['fecha'], PDO::PARAM_STR);
$q->bindParam(':pantalla1', $_POST['pantalla1'], PDO::PARAM_STR);
$q->bindParam(':pantalla2', $_POST['pantalla2'], PDO::PARAM_STR);
$q->bindParam(':pantalla3', $_POST['pantalla3'], PDO::PARAM_STR);
$q->bindParam(':pantalla4', $_POST['pantalla4'], PDO::PARAM_STR);
$q->bindParam(':paciente_cedula', $_POST['cedula'], PDO::PARAM_STR);
$q->bindParam(':bioanalista_cedula', $_POST['bioanalista_cedula'], PDO::PARAM_STR);
$q->execute();
        
$sql = "INSERT INTO pantallas_paciente_historia (fecha,pantalla1,pantalla2,pantalla3,pantalla4,paciente_cedula,bioanalista_cedula) VALUES (:fecha,:pantalla1,:pantalla2,:pantalla3,:pantalla4,:paciente_cedula,:bioanalista_cedula)";
$q = $conn->prepare($sql);
$q->bindParam(':fecha', $_POST['fecha'], PDO::PARAM_STR);
$q->bindParam(':pantalla1', $_POST['pantalla1'], PDO::PARAM_STR);
$q->bindParam(':pantalla2', $_POST['pantalla2'], PDO::PARAM_STR);
$q->bindParam(':pantalla3', $_POST['pantalla3'], PDO::PARAM_STR);
$q->bindParam(':pantalla4', $_POST['pantalla4'], PDO::PARAM_STR);
$q->bindParam(':paciente_cedula', $_POST['cedula'], PDO::PARAM_STR);
$q->bindParam(':bioanalista_cedula', $_POST['bioanalista_cedula'], PDO::PARAM_STR);
$q->execute();



        
 echo '<script language="javascript">swal("Paciente Almacenado Correctamente!",
  "",
  "success");</script>';


    }
        else{
           echo '<script language="javascript"> swal("ERROR!", "El paciente se encuentra registrado, o ha ocurrido un problema en la actualizacion.", "error");</script>';


}
}
?>

</div>
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

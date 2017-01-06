<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pantallas Paciente</title>

<script src="../vistas/estilo/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../vistas/estilo/dist/sweetalert.css">
<link rel="stylesheet" href="../vistas/estilo/css/datepicker.min.css" />

<?php   include "../vistas/barra.php";
                include "../vistas/menu.php";
               ?>

    <body onKeyDown="javascript:Verificar()">
        <div class="container" style="margin-top:50px;">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">

                    <form accept-charset="UTF-8" role="form" method="POST" action="pp_paciente.php">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <center>
                                    <h3 class="panel-title">PRUEBAS PANTALLAS DEL PACIENTE</h3></center>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../vistas/estilo/avatars/paciente.png" class="img-circle img-responsive"> </div>
                                    <div class=" col-md-9 col-lg-9 ">
                                        <table class="table table-user-information">

                                            <tbody>


                                                <?php
                                                require_once '../conexiones/Connection.php';
$conn = dbConnect();
$sql="SELECT * from paciente ORDER BY nombre1 ASC";
$result = $conn->query($sql);
if ($result-> rowCount() >0){
    $combobit2="->Seleccione:";
    while ($row = $result->fetch(MYSQLI_ASSOC)) {
        $combobit2 .=" <option value='".$row['cedula']."'>".$row['apellido1'].",".$row['nombre1']."-C.I:".$row['cedula']."</option>"; 
    }
}
if ($result-> rowCount() ==0){
    $combobit2="SIN REGISTRO";
}                                                   
?>
                                                    <div class="box-body">
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <td>Cedula:</td>
                                                                <td width="30">
                                                                    <select required id="paciente_cedula" name="paciente_cedula" class="form-control select2">
                                                                        <option value="">
                                                                            <?php echo $combobit2; ?>
                                                                        </option>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <tr>
                                                        <td>Fecha:</td>
                                                        <td width="30">
                                                            <span class="input-icon input-icon-right">
                              <input class="date-picker" id="id-date-picker-1" name="fecha" required type="text" data-date-format="yyyy-mm-dd" required="required"/>
                              <i class="ace-icon fa fa-calendar"></i>
                            </span>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Pantalla I:</td>
                                                        <td>
                                                            <select id="pantalla1" name="pantalla1" required class="form-control">
                                                                <option value="">->Seleccione:</option>
                                                                <option value="1/2+">1/2+</option>
                                                                <option value="1+">1+</option>
                                                                <option value="2+">2+</option>
                                                                <option value="3+">3+</option>
                                                                <option value="4+">4+</option>
                                                                <option value="Negativo">Negativo</option>
                                                            </select>
                                                        </td>
                                                    </tr>





                                                    <tr>
                                                        <td>Pantalla II:</td>
                                                        <td>
                                                            <select id="pantalla2" name="pantalla2" required class="form-control">
                                                                <option value="">->Seleccione:</option>
                                                                <option value="1/2+">1/2+</option>
                                                                <option value="1+">1+</option>
                                                                <option value="2+">2+</option>
                                                                <option value="3+">3+</option>
                                                                <option value="4+">4+</option>
                                                                <option value="Negativo">Negativo</option>

                                                            </select>
                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td>Pantalla III:</td>
                                                        <td>
                                                            <select id="pantalla3" name="pantalla3" required class="form-control">
                                                                <option value="">->Seleccione:</option>
                                                                <option value="1/2+">1/2+</option>
                                                                <option value="1+">1+</option>
                                                                <option value="2+">2+</option>
                                                                <option value="3+">3+</option>
                                                                <option value="4+">4+</option>
                                                                <option value="Negativo">Negativo</option>
                                                            </select>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Pantalla IV:</td>
                                                        <td>
                                                            <select id="pantalla4" name="pantalla4" required class="form-control">
                                                                <option value="">->Seleccione:</option>
                                                                <option value="1/2+">1/2+</option>
                                                                <option value="1+">1+</option>
                                                                <option value="2+">2+</option>
                                                                <option value="3+">3+</option>
                                                                <option value="4+">4+</option>
                                                                <option value="Negativo">Negativo</option>
                                                            </select>
                                                        </td>
                                                    </tr>


                                                    <?php
                                                require_once '../conexiones/Connection.php';
$conn = dbConnect();
$sql="SELECT * from hemoterapista ORDER BY nombre1 ASC";
$result = $conn->query($sql);
if ($result-> rowCount() >0){
    $combobit2="->Seleccione:";
    while ($row = $result->fetch(MYSQLI_ASSOC)) {
        $combobit2 .=" <option value='".$row['cedula']."'>".$row['apellido1'].",".$row['nombre1']."-C.I:".$row['cedula']."</option>"; 
    }
}
if ($result-> rowCount() ==0){
    $combobit2="SIN REGISTRO";
}                                           
?>
                                                        <div class="box-body">
                                                            <div class="row">
                                                                <div class="form-group">
                                                                    <td>Datos Hemoterapistas:</td>
                                                                    <td width="30">
                                                                        <select required id="hemoterapista_cedula" name="hemoterapista_cedula" class="form-control select2">
                                                                            <option value="">
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

                    </form>

                    <?php

require_once '../conexiones/Connection.php';
$conn = dbConnect();
 
  if (isset($_POST['paciente_cedula'])) {
    $sql2 = 'SELECT * FROM pantallas_paciente WHERE paciente_cedula = ?';
    $stmt = $conn->prepare($sql2);
    $results = $stmt->execute(array($_POST['paciente_cedula']));
    $row = $stmt->fetch();
    if (empty($row)) {



                 $sql = "INSERT INTO pantallas_paciente (fecha,pantalla1,pantalla2,pantalla3,pantalla4,paciente_cedula,hemoterapista_cedula) VALUES (:fecha,:pantalla1,:pantalla2,:pantalla3,:pantalla4,:paciente_cedula,:hemoterapista_cedula)";
$q = $conn->prepare($sql);
$q->bindParam(':fecha', $_POST['fecha'], PDO::PARAM_STR);
$q->bindParam(':pantalla1', $_POST['pantalla1'], PDO::PARAM_STR);
$q->bindParam(':pantalla2', $_POST['pantalla2'], PDO::PARAM_STR);
$q->bindParam(':pantalla3', $_POST['pantalla3'], PDO::PARAM_STR);
$q->bindParam(':pantalla4', $_POST['pantalla4'], PDO::PARAM_STR);
$q->bindParam(':paciente_cedula', $_POST['paciente_cedula'], PDO::PARAM_STR);
$q->bindParam(':hemoterapista_cedula', $_POST['hemoterapista_cedula'], PDO::PARAM_STR);
$q->execute();

 $result= $q->execute();
            
            
            
$sql = "INSERT INTO pantallas_paciente_historia (fecha,pantalla1,pantalla2,pantalla3,pantalla4,paciente_cedula,hemoterapista_cedula) VALUES (:fecha,:pantalla1,:pantalla2,:pantalla3,:pantalla4,:paciente_cedula,:hemoterapista_cedula)";
$q = $conn->prepare($sql);
$q->bindParam(':fecha', $_POST['fecha'], PDO::PARAM_STR);
$q->bindParam(':pantalla1', $_POST['pantalla1'], PDO::PARAM_STR);
$q->bindParam(':pantalla2', $_POST['pantalla2'], PDO::PARAM_STR);
$q->bindParam(':pantalla3', $_POST['pantalla3'], PDO::PARAM_STR);
$q->bindParam(':pantalla4', $_POST['pantalla4'], PDO::PARAM_STR);
$q->bindParam(':paciente_cedula', $_POST['paciente_cedula'], PDO::PARAM_STR);
$q->bindParam(':hemoterapista_cedula', $_POST['hemoterapista_cedula'], PDO::PARAM_STR);
$q->execute();

 $result= $q->execute();
            
            
 echo '<script language="javascript">swal("Pruebas de Pantallas Almacenadas Correctamente!",
  "",
  "success");</script>';
                 

    }
        else{  



$sql = "INSERT INTO pantallas_paciente_historia (fecha,pantalla1,pantalla2,pantalla3,pantalla4,paciente_cedula,hemoterapista_cedula) VALUES (:fecha,:pantalla1,:pantalla2,:pantalla3,:pantalla4,:paciente_cedula,:hemoterapista_cedula)";
$q = $conn->prepare($sql);
$q->bindParam(':fecha', $_POST['fecha'], PDO::PARAM_STR);
$q->bindParam(':pantalla1', $_POST['pantalla1'], PDO::PARAM_STR);
$q->bindParam(':pantalla2', $_POST['pantalla2'], PDO::PARAM_STR);
$q->bindParam(':pantalla3', $_POST['pantalla3'], PDO::PARAM_STR);
$q->bindParam(':pantalla4', $_POST['pantalla4'], PDO::PARAM_STR);
$q->bindParam(':paciente_cedula', $_POST['paciente_cedula'], PDO::PARAM_STR);
$q->bindParam(':hemoterapista_cedula', $_POST['hemoterapista_cedula'], PDO::PARAM_STR);
$q->execute();

 $result= $q->execute();

      
        
    $fecha     = $_POST['fecha'];
    $pantalla1       = $_POST['pantalla1'];
        $pantalla2       = $_POST['pantalla2'];
    $pantalla3         = $_POST['pantalla3'];
    $pantalla4       = $_POST['pantalla4'];
    $paciente_cedula= $_POST['paciente_cedula'];    
    $hemoterapista_cedula      = $_POST['hemoterapista_cedula'];
 
    




    $sql = "UPDATE pantallas_paciente SET        
        fecha='".$fecha."', 
        pantalla1='".$pantalla1."', 
        pantalla2='".$pantalla2."',
        pantalla3='".$pantalla3."', 
        pantalla4='".$pantalla4."', 
        paciente_cedula='".$paciente_cedula."', 
        hemoterapista_cedula='".$hemoterapista_cedula."' 
       
        WHERE paciente_cedula=".$paciente_cedula;
         
       $q = $conn->prepare($sql);
$q->execute();
            
 echo '<script language="javascript">swal("Pruebas de Pantallas Almacenadas Correctamente!",
  "",
  "success");</script>';
             }
        }
   
?>
                        <div class="panel-heading">
                            <center>
                                <button type="button " class="btn btn-lg btn-labeled btn-danger" onclick="history.back()">
                                    <span><i class="fa fa-chevron-left"></i></span> VOLVER
                                </button>

                                <button type="button " value="Buscar" class="btn btn-lg btn-labeled btn-success">
                                    AGREGAR <span><i class="fa fa-chevron-right"></i>
                      </center>
          </div>

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

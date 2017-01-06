<?php require_once '../conexiones/Connection.php';
$conn = dbConnect();
?>
    <!DOCTYPE html>
    <html lang="es">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prueba Celular Donante</title>



    <script src="../vistas/estilo/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../vistas/estilo/dist/sweetalert.css">
    <link rel="stylesheet" href="../vistas/estilo/css/datepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="../vistas/librerias.css">

    <?php   include "../vistas/barra.php";
                include "../vistas/menu.php";
               ?>





        <div class="container" style="margin-top:50px;">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">

                    <form accept-charset="UTF-8" role="form" method="POST" action="">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <center>
                                    <h3 class="panel-title">REGISTRO BLOSA</h3></center>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../vistas/estilo/avatars/paciente.png" class="img-circle img-responsive"> </div>
                                    <div class=" col-md-9 col-lg-9 ">
                                        <table class="table table-user-information">

                                            <tbody>


                                                <?php
$sql="SELECT * from donante ORDER BY nombre1 ASC";
$result = $conn->query($sql);
if ($result-> rowCount() >0){
    $combobit2="->Seleccione:";
    while ($row = $result->fetch(MYSQLI_ASSOC)) {
        $combobit2 .=" <option>".$row['cedula']."</option>"; 
    }
}
?>
<div class="box-body">
<div class="row">
<div class="form-group">
<td>Cedula del Donante:</td>
<td width="30">
<select required id="donante_cedula" name="donante_cedula" class="form-control select2">
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
<input placeholder="Fecha de extraccion" class="date-picker" id="id-date-picker-1" name="fecha" required type="text" data-date-format="yyyy-mm-dd" required="required"/>
<i class="ace-icon fa fa-calendar"></i>
</span>
</td>
</tr>







<tr>
<td>Cantidad:</td>
<td>
<select id="grupo_sanguineo" name="grupo_sanguineo" required class="form-control">
<option value="">->Seleccione:</option>
<option value="A">100ml</option>
<option value="B">200ml</option>
<option value="O">300ml</option>
<option value="AB">400ml</option>
<option value="AB">500ml</option>
</select>
</td>
</tr>


<tr>
<td>Hemocomponente:</td>
  <td>
<select id="grupo_sanguineo" name="grupo_sanguineo" required class="form-control">
<option value="">->Seleccione:</option>
<option value="A">Frasco Congelado </option>
<option value="B">Plaquetas</option>
</select>
</td>
</tr>


<tr>
<td>Serial:</td>
<td width="30">
<input placeholder="Serial Bolsa" type="text" name="serial" required size="25" />
</td>
</tr>






                                                <?php
$sql="SELECT * from paciente ORDER BY nombre1 ASC";
$result = $conn->query($sql);
if ($result-> rowCount() >0){
$combobit2="->Numero de CI Paciente:";
while ($row = $result->fetch(MYSQLI_ASSOC)) {
$combobit2 .=" <option >".$row['cedula']."</option>"; 
}
}
?>  

<tr>
<div class="box-body">
<div class="row">
<div class="form-group">
<td>A FAVOR DE:</td>
<td width="30">
<select  required id="donante_cedula" name="donante_cedula" class="form-control select2">
<option value="">
<?php echo $combobit2; ?>
</option>
</select>
</div>
</div>
</div>
</tr>








 


                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                    </form>

<?php
$sql = "INSERT INTO bolsa (donante_cedula,paciente_cedula, fecha_extraccion,cantidadb,tipo_hemocomponente,serial) VALUES (:donante_cedula,:paciente_cedula,:fecha_extraccion,:cantidadb,:tipo_hemocomponente,:serial)";
$q = $conn->prepare($sql);
$q->bindParam(':donante_cedula', $_POST['donante_cedula'], PDO::PARAM_STR);
$q->bindParam(':paciente_cedula', $_POST['paciente_cedula'], PDO::PARAM_STR);
$q->bindParam(':fecha_extraccion', $_POST['fecha_extraccion'], PDO::PARAM_STR);
$q->bindParam(':cantidadb', $_POST['cantidadb'], PDO::PARAM_STR);
$q->bindParam(':tipo_hemocomponente', $_POST['tipo_hemocomponente'], PDO::PARAM_STR);
$q->bindParam(':serial', $_POST['serial'], PDO::PARAM_STR);

$q->execute();


 echo '<script language="javascript">swal("Datos Almacenados Correctamente!",
  "",
  "success");</script>';


     
   
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
<?php require_once '../conexiones/Connection.php';
$conn = dbConnect();
?>
    <!DOCTYPE html>
    <html lang="es">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Hemoterapista</title>

    <script src="../vistas/estilo/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../vistas/estilo/dist/sweetalert.css">
    <link rel="stylesheet" href="../vistas/estilo/css/datepicker.min.css" />
    <?php include "../vistas/barra.php";              
                 include "../vistas/menu.php"; ?>



        <body onKeyDown="javascript:Verificar()">


            <div class="container" style="margin-top:10px;">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">

                        <form class="form-horizontal" id="addbioanalista" method="post" action="../agregar/addhemoterapista.php" role="form">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <center>
                                        <h3 class="panel-title">REGISTRAR HEMOTERAPISTA</h3></center>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../vistas/estilo/avatars/bioanalista.jpg" class="img-circle img-responsive"> </div>
                                        <div class=" col-md-9 col-lg-9 ">
                                            <table class="table table-user-information">

                                                <tbody>



                                                    <tr>
                                                        <td>Primer Nombre:</td>
                                                        <td width="30">
                                                            <span class="input-icon input-icon-right">
<input type="text" name="nombre1" required required placeholder="***OBLIGATORIO**" />
<i class="ace-icon fa fa-asterisk"></i>
</span>
                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td>Segundo Nombre:</td>
                                                        <td width="30">
                                                            <input type="text" name="nombre2" />
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Primer Apellido:</td>
                                                        <td width="30">
                                                            <span class="input-icon input-icon-right">
<input type="text" name="apellido1" required placeholder="***OBLIGATORIO**"  />
<i class="ace-icon fa fa-asterisk"></i>
</td>
</tr>

<tr>
<td>Segundo Apellido:</td>
<td width="30">
<input type="text" name="apellido2" />
</tr>


<tr>
<td>Sexo:</td>
<td width="30">
<select id="sexo" name="sexo" required>
<option value="">->Seleccione:</option>
<option value="MASCULINO">MASCULINO</option>
<option value="FEMENINO">FEMENINO</option>
</select>
</tr>


<tr>
<td>Fecha De Nacimiento:</td>
<td width="30">                
<span class="input-icon input-icon-right">                 
<input class="date-picker" id="id-date-picker-1" name="fecha_nacimiento" type="text" data-date-format="yyyy-mm-dd" required placeholder="***OBLIGATORIO**" />
<i class="ace-icon fa fa-calendar"></i>
</span>
                                                        </td>
                                                    </tr>






                                                    <tr>
                                                        <td>Cedula de Identidad:</td>
                                                        <td width="30">
                                                            <span class="input-icon input-icon-right">
 <input type="cedula" class="form-control" id="cedula" name="cedula" required placeholder="***OBLIGATORIO**">
<i class="ace-icon fa fa-asterisk"></i>
</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Telefono:</td>
                                                        <td width="30">
                                                            <span class="input-icon input-icon-right">
<input type="text" required class="bfh-phone" class="date-picker" required id="id-date-picker-1" data-format="(dddd) ddd-dddd"  placeholder="***OBLIGATORIO**" name="telefono" /> 
<i class="ace-icon fa fa-phone"></i>
</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Direccion:</td>
                                                        <td width="30">
                                                            <textarea name="direccion" placeholder="ESTADO+MUNICIPIO+PARROQUIA+CASA" required rows="3" cols="25"></textarea>
                                                        </td>
                                                    </tr>










                                                    <?php
                    require_once '../conexiones/Connection.php';
$conn = dbConnect();
$sql="SELECT * from area ORDER BY nombre ASC";
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



                                                        <tr>
                                                            <td>Departamento:</td>
                                                            <td width="30">
                                                                <select required id="area_nombre" name="area_nombre" class="form-control select2">
                                                                    <option value="">
                                                                        <?php echo $combobit2; ?>
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <input type="hidden" value="2016-00-00" name="fecha">
                                                        <input type="hidden" value="SIN RESULTADO" name="du">
                                                        <input type="hidden" value="SIN RESULTADO" name="cd">
                                                        <input type="hidden" value="SIN RESULTADO" name="factor_rh">
                                                        <input type="hidden" value="SIN RESULTADO" name="grupo_sanguineo">
                                                        <input type="hidden" value="SIN RESULTADO" name="donante_cedula">
                                                        <input type="hidden" value="SIN RESULTADO" name="bioanalista_cedula">
                                                        <input type="hidden" value="SIN RESULTADO" name="hcv">
                                                        <input type="hidden" value="SIN RESULTADO" name="hiv">
                                                        <input type="hidden" value="SIN RESULTADO" name="sifilis">
                                                        <input type="hidden" value="SIN RESULTADO" name="ahbc">
                                                        <input type="hidden" value="SIN RESULTADO" name="htlv">
                                                        <input type="hidden" value="SIN RESULTADO" name="chagas">
                                                        <input type="hidden" value="SIN RESULTADO" name="hbsag">
                                                        <input type="hidden" value="SIN RESULTADO" name="hemoterapista_cedula">
                                                        <input type="hidden" value="SIN RESULTADO" name="donante_cedula">
                                                        <input type="hidden" value="SIN RESULTADO" name="bioanalista_cedula">
                                                        <input type="hidden" value="SIN ASIGNAR" name="validacion">



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

$result = "";
$row = null;
require_once '../conexiones/Connection.php';
$conn = dbConnect();

if (isset($_POST['cedula'])) {
$sql2 = 'SELECT * FROM hemoterapista WHERE cedula = ?';
$stmt = $conn->prepare($sql2);
$results = $stmt->execute(array($_POST['cedula']));
$row = $stmt->fetch();
if (empty($row)) {
$sql = "INSERT INTO hemoterapista
(nombre1,nombre2,apellido1,apellido2,sexo,fecha_nacimiento,cedula,telefono,direccion,valido,area_nombre) VALUES
( (UPPER(:nombre1)), (UPPER(:nombre2)), (UPPER(:apellido1)), (UPPER(:apellido2)), (UPPER(:sexo)), (UPPER(:fecha_nacimiento)),(UPPER(:cedula)), (UPPER(:telefono)), (UPPER(:direccion)), (UPPER(:valido)), (UPPER(:area_nombre))

)";
$q = $conn->prepare($sql);
$q->bindParam(':nombre1', $_POST['nombre1'], PDO::PARAM_STR);
$q->bindParam(':nombre2', $_POST['nombre2'], PDO::PARAM_STR);
$q->bindParam(':apellido1', $_POST['apellido1'], PDO::PARAM_STR);
$q->bindParam(':apellido2', $_POST['apellido2'], PDO::PARAM_STR);
$q->bindParam(':sexo', $_POST['sexo'], PDO::PARAM_STR);
$q->bindParam(':fecha_nacimiento', $_POST['fecha_nacimiento'], PDO::PARAM_STR);
$q->bindParam(':cedula', $_POST['cedula'], PDO::PARAM_STR);
$q->bindParam(':telefono', $_POST['telefono'], PDO::PARAM_STR);
$q->bindParam(':direccion', $_POST['direccion'], PDO::PARAM_STR);
$q->bindParam(':valido', $_POST['valido'], PDO::PARAM_STR);
$q->bindParam(':area_nombre', $_POST['area_nombre'], PDO::PARAM_STR);
$q->execute();
$result= $q->execute();




echo '<script language="javascript">swal("Hemoterapista Almacenado Correctamente!",
"",
"success");</script>';

   

}
else{
  echo '<script language="javascript"> swal("ERROR!", "El Hemoterapista se encuentra registrado, o ha ocurrido un problema en la actualizacion.", "error");</script>';


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

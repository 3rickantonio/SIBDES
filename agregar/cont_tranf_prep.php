<?php require_once '../conexiones/Connection.php';
$conn = dbConnect();

?>
    <?php
if(isset($_GET['opcion'])){    
$sth1 = $conn->prepare('select *  from bolsa b inner join donante d '
 . 'on b.donante_cedula = d.cedula WHERE b.segmento = :segmento');
$sth1->bindParam(':segmento', $_GET['opcion']);
$sth1->execute();
$result1 = $sth1->fetchAll();
}
$sth = $conn->prepare('SELECT donante_cedula, cantidad, tipo_hemocomponente, segmento, grupo, factor_rh FROM bolsa where  aceptacion LIKE "ACEPTADO" AND status LIKE "SIN ENTREGAR"');
$sth->execute();
$result = $sth->fetchAll();

?>
        <!DOCTYPE html>
        <html lang="es">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Control</title>
        <script src="../vistas/estilo/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../vistas/estilo/dist/sweetalert.css">
        <link rel="stylesheet" href="../vistas/estilo/css/datepicker.min.css" />

        <?php include "../vistas/barra.php";              
include "../vistas/menu.php"; ?>

            <body onKeyDown="javascript:Verificar()">
                <div class="container" style="margin-top:10px;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">

                            <head>
                                <meta charset="utf-8" />
                            </head>

<script type="text/javascript">
function buscar() {
var opcion = document.getElementById('segmento').value;
window.location.href = '?opcion=' + opcion;
}
</script>
<form name="autoLlenar" action="cont_tranf_prep.php" method="POST">
<div class="panel panel-info">
<div class="panel-heading">
<center>
<h3 class="panel-title">CONTROL DE TRANSFUSIONES</h3></center>
</div>
<div class="panel-body">
<div class="row">
<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../vistas/estilo/avatars/download (1).jpg" class="img-circle img-responsive"> </div>
<div class=" col-md-9 col-lg-9 ">
<table class="table table-user-information">
<tbody>
<div class="box-body">
<div class="row">
<div class="form-group">
<td>Segmento:</td>
<td width="30">
<select name="segmento" id="segmento" onchange="return buscar();" class="form-control select2">
<?php
if($result1){?>
  <option value="<?php echo $result1[0]['segmento'];?>">
<?php echo $result1[0]['segmento'];?>
</option>
<?php
}?>
 <option value=""></option>
<?php
foreach ($result as $key => $value) {?>
<option value="<?php echo $value['segmento'];?>">
                                                                                            <?php echo $value['segmento'];?>
</option>
<?php
}
?>
</select>
</div>
</div>
</div>


<tr>
<td>Fecha Entrega:</td>
<td width="30">
<span class="input-icon input-icon-right">
<input class="date-picker" id="fecha_extraccion" name="fecha_extraccion" required type="text" data-date-format="yyyy-mm-dd" required="required"/>
<i class="ace-icon fa fa-calendar"></i>
</span>
</td>
</tr>


<tr>
<td>Tipo Hemocomponente:</td>
<td width="30">
<span class="input-icon input-icon-right">
<?php
if(isset($result1)){?>
<input type="text"  name="tipo_hemocomponente" disabled value="<?php echo $result1[0]['tipo_hemocomponente']?>" />
<input type="hidden"  name="tipo_hemocomponente"  value="<?php echo $result1[0]['tipo_hemocomponente']?>" />    
<input type="hidden"  name="donante_cedula"  value="<?php echo $result1[0]['donante_cedula']?>" />   
<?php
}else{?>
<input type="text"  name="tipo_hemocomponente" value="" />
<?php
}
?>
</span>
</td>
</tr>


<tr>
<td>Grupo Sanguineo:</td>
<td width="30">
<span class="input-icon input-icon-right">
<?php
if(isset($result1)){?>
<input type="text"  name="grupo_sanguineo" disabled value="<?php echo $result1[0]['grupo']?>" />
<input type="hidden"  name="grupo_sanguineo"  value="<?php echo $result1[0]['grupo']?>" />                                                                    
<?php
}else{?>
<input type="text"  name="grupo_sanguineo" value="" />
<?php
}
?>
</span>
</td>
</tr>

<tr>
<td>Factor RH:</td>
<td width="30">
<span class="input-icon input-icon-right">
<?php
if(isset($result1)){?>
<input type="text" disabled name="factor_rh"   value="<?php echo $result1[0]['factor_rh']?>" />
<input type="hidden"  name="factor_rh"   value="<?php echo $result1[0]['factor_rh']?>" />
<?php
}else{?>
<input type="text"  name="factor_rh" value="" />
<?php
}
?>
</span>
</td>
</tr>
                                                        




<tr>
<td>Cantidad:</td>
<td width="30">
<span class="input-icon input-icon-right">
<?php
if(isset($result1)){?>
<input type="text"  name="cantidad" disabled value="<?php echo $result1[0]['cantidad']?>" />
<input type="hidden"  name="cantidad"  value="<?php echo $result1[0]['cantidad']?>" />                                                                  
<?php
}else{?>
<input type="text"  name="cantidad" value="" />
<?php
}
?>
</span>
</td>
</tr>





<?php
require_once '../conexiones/Connection.php';
$conn = dbConnect();
$sql="SELECT * from paciente p, pc_paciente pcp WHERE p.cedula=pcp.paciente_cedula";
$result = $conn->query($sql);
if ($result-> rowCount() >0){
 $combobit2="->Seleccione:";

while ($row = $result->fetch(MYSQLI_ASSOC)) {
$combobit2 .=" <option value='".$row['cedula']."'>".$row['apellido1'].", ".$row['nombre1']. "-C.I: ".$row['cedula']. "-Grupo: ".$row['grupo_sanguineo']. "-Factor: ".$row['factor_rh']. "-CD: ".$row['cd']."</option>"; 
}
}
if ($result-> rowCount() ==0){
    $combobit2="SIN REGISTRO";
}                                                           
?>

<tr>
<div class="box-body">
<div class="row">

<div class="form-group">
<td>Datos Celulares Paciente:</td>

<td width="30">

<select required id="paciente_cedula" name="paciente_cedula" class="form-control select2">

<option value="">
<?php echo $combobit2; ?>
</option>
</select>
</div>
</div>
</div>
</tr>






<?php
require_once '../conexiones/Connection.php';
$conn = dbConnect();
$sql="SELECT * from paciente p, pantallas_paciente ppp WHERE p.cedula=ppp.paciente_cedula";
$result = $conn->query($sql);
if ($result-> rowCount() >0){
 $combobit2="->Seleccione:";

while ($row = $result->fetch(MYSQLI_ASSOC)) {
$combobit2 .=" <option value='".$row['cedula']."'>".$row['apellido1'].", ".$row['nombre1']. "-C.I: ".$row['cedula']. "--Pantalla I: ".$row['pantalla1']. ",Pantalla II: ".$row['pantalla2']. ",Pantalla III: ".$row['pantalla3'].",Pantalla IV:".$row['pantalla4']."</option>"; 
}
}
if ($result-> rowCount() ==0){
    $combobit2="SIN REGISTRO";
}                                                           
?>

<tr>
<div class="box-body">
<div class="row">

<div class="form-group">
<td>Datos Pantallas Paciente:</td>

<td width="30">

<select required id="paciente_cedula" name="paciente_cedula" class="form-control select2">

<option value="">
<?php echo $combobit2; ?>
</option>
</select>
</div>
</div>
</div>
</tr>





















<tr>
<td>Prueba Cruzada:</td>
<td width="30">
<select id="p_cruzada" name="p_cruzada" required class="form-control">
<option value="">->Seleccione:</option>
<option value="1/2+">1/2+</option>
<option value="1+">1+</option>
<option value="2+">2+</option>
<option value="3+">3+</option>
<option value="4+">4+</option>
<option value="NEGATIVO">NEGATIVO</option>
</select>
</td>
</tr>

<tr>
<td>Entregado:</td>
<td>
<input type="radio" id="entrega" name="entrega" value="SI">SI
<input type="radio" id="entrega" name="entrega" value="NO">NO
</td>
</tr>
<input type="hidden" value="ENTREGADO" name="status">
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
if (isset($_POST['segmento'])) {
$sql2 = 'SELECT * FROM bolsa WHERE segmento = ?';
$stmt = $conn->prepare($sql2);
$results = $stmt->execute(array($_POST['segmento']));
$row = $stmt->fetch();
if (empty($row)) {
            
echo '<script language="javascript"> swal("ERROR!", "La bolsa ya fue entregada, o ha ocurrido un problema en la base de datos.", "error");</script>';
}
else{
    $sql = "INSERT INTO cont_tranf_prep
(segmento,fecha_extraccion,tipo_hemocomponente,donante_cedula,grupo_sanguineo,factor_rh,cantidad,paciente_cedula,p_cruzada,entrega) VALUES
(:segmento,:fecha_extraccion,:tipo_hemocomponente,:donante_cedula,:grupo_sanguineo,:factor_rh,:cantidad,:paciente_cedula,:p_cruzada,:entrega)";
    $q = $conn->prepare($sql);
    $q->bindParam(':segmento', $_POST['segmento'], PDO::PARAM_STR);
    $q->bindParam(':fecha_extraccion', $_POST['fecha_extraccion'], PDO::PARAM_STR);
    $q->bindParam(':tipo_hemocomponente', $_POST['tipo_hemocomponente'], PDO::PARAM_STR);
    $q->bindParam(':donante_cedula', $_POST['donante_cedula'], PDO::PARAM_STR);
    $q->bindParam(':grupo_sanguineo', $_POST['grupo_sanguineo'], PDO::PARAM_STR);
    $q->bindParam(':factor_rh', $_POST['factor_rh'], PDO::PARAM_STR);
    $q->bindParam(':cantidad', $_POST['cantidad'], PDO::PARAM_STR);
    $q->bindParam(':paciente_cedula', $_POST['paciente_cedula'], PDO::PARAM_STR);
    $q->bindParam(':p_cruzada', $_POST['p_cruzada'], PDO::PARAM_STR);
    $q->bindParam(':entrega', $_POST['entrega'], PDO::PARAM_STR);
    $q->execute();
    
  
    $segmento= $_POST['segmento'];
    $status= $_POST['status'];      
    $sql = "UPDATE bolsa SET status='ENTREGADO' WHERE segmento=".$segmento;
    $q = $conn->prepare($sql);
    $q->execute();  
                 

                                    
echo '<script language="javascript">swal("Bolsa Entregada Correctamente!",
  "",
  "success");</script>';
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
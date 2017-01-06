<!--AQUI SE HACE LA CONEXION A BASE DE DATOS YA QUE SE USARA DE FORMA GENERAL-->
<?php require_once '../conexiones/Connection.php';
$conn = dbConnect();
?>
    <!--AQUI AQUI SE HACE LA CONSULTA POR MEDIO DEL SELECT CEDULA PARA ADQUIRIR LOS DATOS DEL DONANTE TIPO DE SANGRE Y FACTOR RH-->
    <?php
if(isset($_GET['opcion'])){    
    $sth1 = $conn->prepare('select * from pc_donante pc inner join donante d '
            . 'on pc.donante_cedula = d.cedula WHERE pc.donante_cedula = :donante_cedula');
    $sth1->bindParam(':donante_cedula', $_GET['opcion']);
    $sth1->execute();
    $result1 = $sth1->fetchAll();

    
    $sth2 = $conn->prepare('select * from ps_donante ps inner join donante d '
            . 'on ps.donante_cedula = d.cedula WHERE ps.donante_cedula = :donante_cedula');
    $sth2->bindParam(':donante_cedula', $_GET['opcion']);
    $sth2->execute();
    $result2 = $sth2->fetchAll();



     $sth3 = $conn->prepare('select * from pantallas_donante pp inner join donante d '
            . 'on pp.donante_cedula = d.cedula WHERE pp.donante_cedula = :donante_cedula');
    $sth3->bindParam(':donante_cedula', $_GET['opcion']);
    $sth3->execute();
    $result3 = $sth3->fetchAll();









    
}
$sth = $conn->prepare('SELECT donante_cedula, grupo_sanguineo, factor_rh FROM pc_donante');
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
var opcion = document.getElementById('donante_cedula').value;
window.location.href = '?opcion=' + opcion;
}
</script>
<form name="autoLlenar" action="addbolsa.php" method="post">
<div class="panel panel-info">
<div class="panel-heading">
<center>
<h3 class="panel-title">SELECCION DE DONANTE</h3></center>
</div>
<div class="panel-body">
<div class="row">
<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../vistas/estilo/avatars/bolsa.jpg" class="img-circle img-responsive"> </div>
<div class=" col-md-9 col-lg-9 ">
<table class="table table-user-information">

<tbody>
<div class="box-body">
<div class="row">
<div class="form-group">
<td>Cedula Donante:</td>
<td width="30">
<select name="donante_cedula" id="donante_cedula" onchange="return buscar();" class="form-control select2">
<?php
if($result1){?>
<option value="<?php echo $result1[0]['donante_cedula'];?>">
<?php echo $result1[0]['donante_cedula'];?>
</option>
<?php
}?>
<option value=""></option>
<?php
foreach ($result as $key => $value) {?>
<option value="<?php echo $value['donante_cedula'];?>">
                                                                                            <?php echo $value['donante_cedula'];?>
</option>
<?php
}
?>
</select>
</div>
</div>
</div>
<tr>
<td>Fecha Extraccion:</td>
<td width="30">
<span class="input-icon input-icon-right">
<input class="date-picker" id="id-date-picker-1" name="fecha_extraccion" required type="text" data-date-format="yyyy-mm-dd" required="required"/>
<i class="ace-icon fa fa-calendar"></i>
</span>
</td>
</tr>

<tr>
<td>Tipo Hemocomponente:</td>
<td>
<select name="tipo_hemocomponente" required class="form-control">
<option value="">->Seleccione:</option>
<option value="PLASMA FRESCO CONGELADO">PFC</option>
<option value="CRIO PRECIPITADO">CRIO</option>
<option value="CONCENTRADO PLAQUETARIO">CP</option>
<option value="CONCENTRADO GLOBULAR">CG</option>
</select>
</td>
</tr>

<tr>
<td>Cantidad:</td>
<td width="30">
<span class="input-icon input-icon-right">
 <input type="text"  name="cantidad" required/>
 </span>
</td>
</tr>


                                          
<tr>
<td>Grupo Sanguineo:</td>
<td width="30">
<span class="input-icon input-icon-right">
<?php
if(isset($result1)){?>
<input type="text"  name="grupo" disabled value="<?php echo $result1[0]['grupo_sanguineo']?>" />
<input type="hidden"  name="grupo"  value="<?php echo $result1[0]['grupo_sanguineo']?>" />                                                                    
<?php
}else{?>
<input type="text"  name="grupo" value="" />
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
<td>CD:</td>
<td width="30">
<span class="input-icon input-icon-right">
<?php
if(isset($result1)){?>
<input type="text"  name="cd" disabled value="<?php echo $result1[0]['cd']?>" />
<input type="hidden"  name="cd"  value="<?php echo $result1[0]['cd']?>" />                                                                    
<?php
}else{?>
<input type="text"  name="cd" value="" />
<?php
}
?>
</span>
</td>
</tr>








<tr>
<td>Hcv:</td>
<td width="30">
<span class="input-icon input-icon-right">
<?php
if(isset($result2)){?>
<input type="text"  name="hcv" disabled value="<?php echo $result2[0]['hcv']?>" />
<input type="hidden"  name="hcv"  value="<?php echo $result2[0]['hcv']?>" />                                                                    
<?php
}else{?>
<input type="text"  name="hcv" value="" />
<?php
}
?>
</span>
</td>
</tr>
                                                        
                                                        
                                                        
                                                        
<tr>
<td>Hiv:</td>
<td width="30">
<span class="input-icon input-icon-right">
<?php
if(isset($result2)){?>
<input type="text"  name="hiv" disabled value="<?php echo $result2[0]['hiv']?>" />
<input type="hidden"  name="hiv"  value="<?php echo $result2[0]['hiv']?>" />                                                                    
<?php
}else{?>
<input type="text"  name="hiv" value="" />
<?php
}
?>
</span>
</td>
</tr>
                                                        
                                                        
                                                        
<tr>
<td>Sifilis:</td>
<td width="30">
<span class="input-icon input-icon-right">
<?php
if(isset($result2)){?>
<input type="text"  name="sifilis" disabled value="<?php echo $result2[0]['sifilis']?>" />
<input type="hidden"  name="sifilis"  value="<?php echo $result2[0]['sifilis']?>" />                                                                    
<?php
}else{?>
<input type="text"  name="sifilis" value="" />
<?php
}
?>
</span>
</td>
</tr>
                                                        
                                                        
<tr>
<td>Ahbc:</td>
<td width="30">
<span class="input-icon input-icon-right">
<?php
if(isset($result2)){?>
<input type="text"  name="ahbc" disabled value="<?php echo $result2[0]['ahbc']?>" />
<input type="hidden"  name="ahbc"  value="<?php echo $result2[0]['ahbc']?>" />                                                                    
<?php
}else{?>
<input type="text"  name="ahbc" value="" />
<?php
}
?>
</span>
</td>
</tr>
                                                        
                                                        
                                                        
<tr>
<td>Htlv:</td>
<td width="30">
<span class="input-icon input-icon-right">
<?php
if(isset($result2)){?>
<input type="text"  name="htlv" disabled value="<?php echo $result2[0]['htlv']?>" />
<input type="hidden"  name="htlv"  value="<?php echo $result2[0]['htlv']?>" />                                                                    
<?php
}else{?>
<input type="text"  name="htlv" value="" />
<?php
}
?>
</span>
</td>
</tr>
                                                        
                                                        
<tr>
<td>Chagas:</td>
<td width="30">
<span class="input-icon input-icon-right">
<?php
if(isset($result2)){?>
<input type="text"  name="chagas" disabled value="<?php echo $result2[0]['chagas']?>" />
<input type="hidden"  name="chagas"  value="<?php echo $result2[0]['chagas']?>" />                                                                    
<?php
}else{?>
<input type="text"  name="chagas" value="" />
<?php
}
?>
</span>
</td>
</tr>
                                                        
                                                        
<tr>
<td>Hbsag:</td>
<td width="30">
<span class="input-icon input-icon-right">
<?php
if(isset($result2)){?>
<input type="text"  name="hbsag" disabled value="<?php echo $result2[0]['hbsag']?>" />
<input type="hidden"  name="hbsag"  value="<?php echo $result2[0]['hbsag']?>" />                                                                    
<?php
}else{?>
<input type="text"  name="hbsag" value="" />
<?php
}
?>
</span>
</td>
</tr>



<tr>
<td>Pantalla I:</td>
<td width="30">
<span class="input-icon input-icon-right">
<?php
if(isset($result3)){?>
<input type="text"  name="pantalla1" disabled value="<?php echo $result3[0]['pantalla1']?>" />
<input type="hidden"  name="pantalla1"  value="<?php echo $result3[0]['pantalla1']?>" />                                                                    
<?php
}else{?>
<input type="text"  name="pantalla1" value="" />
<?php
}
?>
</span>
</td>
</tr>



<tr>
<td>Pantalla II:</td>
<td width="30">
<span class="input-icon input-icon-right">
<?php
if(isset($result3)){?>
<input type="text"  name="pantalla2" disabled value="<?php echo $result3[0]['pantalla2']?>" />
<input type="hidden"  name="pantalla2"  value="<?php echo $result3[0]['pantalla2']?>" />                                                                    
<?php
}else{?>
<input type="text"  name="pantalla2" value="" />
<?php
}
?>
</span>
</td>
</tr>



<tr>
<td>Pantalla III:</td>
<td width="30">
<span class="input-icon input-icon-right">
<?php
if(isset($result3)){?>
<input type="text"  name="pantalla3" disabled value="<?php echo $result3[0]['pantalla3']?>" />
<input type="hidden"  name="pantalla3"  value="<?php echo $result3[0]['pantalla3']?>" />                                                                    
<?php
}else{?>
<input type="text"  name="pantalla3" value="" />
<?php
}
?>
</span>
</td>
</tr>


<tr>
<td>Pantalla IV:</td>
<td width="30">
<span class="input-icon input-icon-right">
<?php
if(isset($result3)){?>
<input type="text"  name="pantalla4" disabled value="<?php echo $result3[0]['pantalla4']?>" />
<input type="hidden"  name="pantalla4"  value="<?php echo $result3[0]['pantalla4']?>" />                                                                    
<?php
}else{?>
<input type="text"  name="pantalla4" value="" />
<?php
}
?>
</span>
</td>
</tr>
 

<tr>
<td>Segmento:</td>
<td width="30">
<span class="input-icon input-icon-right">
 <input type="text"  name="segmento" required/>
 </span>
</td>
</tr>


<input type="hidden" value="SIN ENTREGAR" name="status">

<tr>
<td>Aceptacion:</td>
<td width="30">
<select name="aceptacion" required class="form-control">
<option value="">->Seleccione:</option>
<option value="ACEPTADO">ACEPTADO</option>
<option value="DESCARTADO">DESCARTADO</option>
</select>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
                                    
                                    
<input type="hidden" value="<?php echo date('Y'); ?>" name="serial" required size="25" required/>
<input type="hidden" value="<?php echo date('Y'); ?>" name="anno" required size="25" required/>
<?php
//calculo fecha de hoy
 $dia=date("j");
 $mes=date("n");
 $anno=date("Y");                           
 $busca_max= $conn->prepare("select MAX(id) as valor from bolsa where anno ='".$anno."' ");
 $busca_max->execute();
 $id = $busca_max->fetchColumn();
 $id+=1;
?>
<input id="id" type="hidden" value="<?php echo $id; ?>" name="id" />
<input id="anno" type="hidden" value="<?php echo $anno; ?>" name="anno" />

                                    
                                    
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

                               
                            

<!--AQUI INSERTA LA BOLSA A BASE DE DATOS Y CREA AL SEGMENTO DE LA BOLSA-->
<?php 
//AQUI INSERTA
$sql = "INSERT INTO bolsa
(id,anno,donante_cedula,fecha_extraccion,tipo_hemocomponente,cantidad,serial,segmento,grupo,factor_rh,aceptacion,status) VALUES
(:id,:anno, (UPPER(:donante_cedula)), (UPPER(:fecha_extraccion)), (UPPER(:tipo_hemocomponente)), (UPPER(:cantidad)), (UPPER(:serial)),   (UPPER(:segmento)), (UPPER(:grupo)),(UPPER(:factor_rh)), (UPPER(:aceptacion)), (UPPER(:status))

)";
$q = $conn->prepare($sql);
$q->bindParam(':id', $_POST['id'], PDO::PARAM_STR);
$q->bindParam(':anno', $_POST['anno'], PDO::PARAM_STR);
$q->bindParam(':donante_cedula', $_POST['donante_cedula'], PDO::PARAM_STR);
$q->bindParam(':fecha_extraccion', $_POST['fecha_extraccion'], PDO::PARAM_STR);
$q->bindParam(':tipo_hemocomponente', $_POST['tipo_hemocomponente'], PDO::PARAM_STR);
$q->bindParam(':cantidad', $_POST['cantidad'], PDO::PARAM_STR);
$q->bindParam(':serial', $_POST['serial'], PDO::PARAM_STR);
$q->bindParam(':segmento', $_POST['segmento'], PDO::PARAM_STR);
$q->bindParam(':grupo', $_POST['grupo'], PDO::PARAM_STR);
$q->bindParam(':factor_rh', $_POST['factor_rh'], PDO::PARAM_STR);
$q->bindParam(':aceptacion', $_POST['aceptacion'], PDO::PARAM_STR);
$q->bindParam(':status', $_POST['status'], PDO::PARAM_STR);
$q->execute();
     //AQUI CREA EL SEGMENTO                               
  if (isset($_POST['serial'])) {
		$sql2 = 'SELECT serial,id FROM bolsa WHERE serial = ?';
		$stmt = $conn->prepare($sql2);
		$results = $stmt->execute(array($_POST['serial']));
		$row = $stmt->fetch();
		if (empty($row)) {
       echo '<script language="javascript">swal("Error inesperado!","","error");</script>';      
      }
       else{
           
              $serial= (isset($_POST['serial']) ? $_POST['serial'] : '');             
              $id = (isset($_POST['id']) ? $_POST['id'] : '');
              $cedula = (isset($_POST['donante_cedula']) ? $_POST['donante_cedula'] : '');         
              $sql = "UPDATE bolsa SET serial = CONCAT(id,'-',anno)
              WHERE serial=".$serial;
              $q = $conn->prepare($sql);
              $q->execute();     
  
  echo '<script language="javascript">swal("Datos de la Bolsa Almacenados Correctamente!","","success");</script>';    
  }}      
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
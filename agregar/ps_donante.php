
    <!DOCTYPE html>
    <html lang="es">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prueba Serologica Donante</title>


    <script src="../vistas/estilo/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../vistas/estilo/dist/sweetalert.css">
    <link rel="stylesheet" href="../vistas/estilo/css/datepicker.min.css" />

    <?php   include "../vistas/barra.php";
                include "../vistas/menu.php";
               ?>
 <body onKeyDown="javascript:Verificar()">
        <div class="container" style="margin-top:15px;">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">

                    <form accept-charset="UTF-8" role="form" method="POST" action="ps_donante.php">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <center>
                                    <h3 class="panel-title">PRUEBAS SEROLOGICAS DEL DONANTE</h3></center>
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
$sql="SELECT * from donante ORDER BY nombre1 ASC";
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
                              <input class="date-picker" id="id-date-picker-1" name="fecha" required type="text" data-date-format="yyyy-mm-dd" required="required"/>
                              <i class="ace-icon fa fa-calendar"></i>
                            </span>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Hcv:</td>
                                                        <td>
                                                            <select id="hcv" name="hcv" required class="form-control">
                                                                <option value="">->Seleccione:</option>

                                                                <option value="POSITIVO">POSITIVO</option>
                                                                <option value="NEGATIVO">NEGATIVO</option>
                                                            </select>
                                                        </td>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Hiv:</td>
                                                        <td>
                                                            <select id="hiv" name="hiv" required class="form-control">
                                                                <option value="">->Seleccione:</option>
                                                                <option value="POSITIVO">POSITIVO</option>
                                                                <option value="NEGATIVO">NEGATIVO</option>
                                                            </select>
                                                        </td>
                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td>Sifilis:</td>
                                                        <td>
                                                            <select id="sifilis" name="sifilis" required class="form-control">
                                                                <option value="">->Seleccione:</option>
                                                                <option value="POSITIVO">POSITIVO</option>
                                                                <option value="NEGATIVO">NEGATIVO</option>
                                                            </select>
                                                        </td>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Ahbc:</td>
                                                        <td>
                                                            <select id="ahbc" name="ahbc" required class="form-control">
                                                                <option value="">->Seleccione:</option>
                                                                <option value="POSITIVO">POSITIVO</option>
                                                                <option value="NEGATIVO">NEGATIVO</option>
                                                            </select>
                                                        </td>
                                                        </td>
                                                    </tr>





                                                    <tr>
                                                        <td>Htlv:</td>
                                                        <td>
                                                            <select id="htlv" name="htlv" required class="form-control">
                                                                <option value="">->Seleccione:</option>
                                                                <option value="POSITIVO">POSITIVO</option>
                                                                <option value="NEGATIVO">NEGATIVO</option>
                                                            </select>
                                                        </td>
                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td>Chagas:</td>
                                                        <td>
                                                            <select id="chagas" name="chagas" required class="form-control">
                                                                <option value="">->Seleccione:</option>
                                                                <option value="POSITIVO">POSITIVO</option>
                                                                <option value="NEGATIVO">NEGATIVO</option>
                                                            </select>
                                                        </td>
                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td>Hbsag:</td>
                                                        <td>
                                                            <select id="hbsag" name="hbsag" required class="form-control">
                                                                <option value="">->Seleccione:</option>
                                                                <option value="POSITIVO">POSITIVO</option>
                                                                <option value="NEGATIVO">NEGATIVO</option>
                                                            </select>
                                                        </td>
                                                        </td>
                                                    </tr>




                                                    <input type="hidden" value="INMUNOHEMATOLOGICOS" name="t_prueba">









                                                    <?php
require_once '../conexiones/Connection.php';
$conn = dbConnect();
$sql="SELECT * from bioanalista ORDER BY nombre1 ASC";
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
                                                                    <td>Datos Bioanalista:</td>
                                                                    <td width="30">
                                                                        <select required id="bioanalista_cedula" name="bioanalista_cedula" class="form-control select2">
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

 
  if (isset($_POST['donante_cedula'])) {
    $sql2 = 'SELECT * FROM ps_donante WHERE donante_cedula = ?';
    $stmt = $conn->prepare($sql2);
    $results = $stmt->execute(array($_POST['donante_cedula']));
    $row = $stmt->fetch();
    if (empty($row)) {
                 $sql = "INSERT INTO ps_donante (fecha,hcv,hiv,sifilis,ahbc,htlv,chagas,hbsag,t_prueba,donante_cedula,bioanalista_cedula) VALUES (:fecha,:hcv,:hiv,:sifilis,:ahbc,:htlv,:chagas,:hbsag,:t_prueba,:donante_cedula,:bioanalista_cedula)";
$q = $conn->prepare($sql);
$q->bindParam(':fecha', $_POST['fecha'], PDO::PARAM_STR);
$q->bindParam(':hcv', $_POST['hcv'], PDO::PARAM_STR);
$q->bindParam(':hiv', $_POST['hiv'], PDO::PARAM_STR);

$q->bindParam(':sifilis', $_POST['sifilis'], PDO::PARAM_STR);
$q->bindParam(':ahbc', $_POST['ahbc'], PDO::PARAM_STR);
$q->bindParam(':htlv', $_POST['htlv'], PDO::PARAM_STR);
$q->bindParam(':chagas', $_POST['chagas'], PDO::PARAM_STR);
$q->bindParam(':hbsag', $_POST['hbsag'], PDO::PARAM_STR);
$q->bindParam(':t_prueba', $_POST['t_prueba'], PDO::PARAM_STR);
$q->bindParam(':donante_cedula', $_POST['donante_cedula'], PDO::PARAM_STR);
$q->bindParam(':bioanalista_cedula', $_POST['bioanalista_cedula'], PDO::PARAM_STR);
$q->execute();

 $result= $q->execute();
            
            
            
$sql = "INSERT INTO ps_donante_historia (fecha,hcv,hiv,sifilis,ahbc,htlv,chagas,hbsag,t_prueba,donante_cedula,bioanalista_cedula)  VALUES (:fecha,:hcv,:hiv,:sifilis,:ahbc,:htlv,:chagas,:hbsag,:t_prueba,:donante_cedula,:bioanalista_cedula)";
$q = $conn->prepare($sql);
$q->bindParam(':fecha', $_POST['fecha'], PDO::PARAM_STR);
$q->bindParam(':hcv', $_POST['hcv'], PDO::PARAM_STR);
$q->bindParam(':hiv', $_POST['hiv'], PDO::PARAM_STR);
$q->bindParam(':sifilis', $_POST['sifilis'], PDO::PARAM_STR);
$q->bindParam(':ahbc', $_POST['ahbc'], PDO::PARAM_STR);
$q->bindParam(':htlv', $_POST['htlv'], PDO::PARAM_STR);
$q->bindParam(':chagas', $_POST['chagas'], PDO::PARAM_STR);
$q->bindParam(':hbsag', $_POST['hbsag'], PDO::PARAM_STR);


$q->bindParam(':t_prueba', $_POST['t_prueba'], PDO::PARAM_STR);
$q->bindParam(':donante_cedula', $_POST['donante_cedula'], PDO::PARAM_STR);
$q->bindParam(':bioanalista_cedula', $_POST['bioanalista_cedula'], PDO::PARAM_STR);

$q->execute();

 $result= $q->execute();
            
            
 echo '<script language="javascript">swal("Pruebas Serologicas Almacenadas Correctamente!",
  "",
  "success");</script>';
                 

    }
        else{  

            
 $sql = "INSERT INTO ps_donante_historia (fecha,hcv,hiv,sifilis,ahbc,htlv,chagas,hbsag,t_prueba,donante_cedula,bioanalista_cedula)  VALUES (:fecha,:hcv,:hiv,:sifilis,:ahbc,:htlv,:chagas,:hbsag,:t_prueba,:donante_cedula,:bioanalista_cedula)";
$q = $conn->prepare($sql);
$q->bindParam(':fecha', $_POST['fecha'], PDO::PARAM_STR);
$q->bindParam(':hcv', $_POST['hcv'], PDO::PARAM_STR);
$q->bindParam(':hiv', $_POST['hiv'], PDO::PARAM_STR);
$q->bindParam(':sifilis', $_POST['sifilis'], PDO::PARAM_STR);
$q->bindParam(':ahbc', $_POST['ahbc'], PDO::PARAM_STR);
$q->bindParam(':htlv', $_POST['htlv'], PDO::PARAM_STR);
$q->bindParam(':chagas', $_POST['chagas'], PDO::PARAM_STR);
$q->bindParam(':hbsag', $_POST['hbsag'], PDO::PARAM_STR);
$q->bindParam(':t_prueba', $_POST['t_prueba'], PDO::PARAM_STR);
$q->bindParam(':donante_cedula', $_POST['donante_cedula'], PDO::PARAM_STR);
$q->bindParam(':bioanalista_cedula', $_POST['bioanalista_cedula'], PDO::PARAM_STR);

$q->execute();
 $result= $q->execute();




      
        
    $fecha     = $_POST['fecha'];
    $hcv       = $_POST['hcv'];
        $hiv       = $_POST['hiv'];
    $sifilis         = $_POST['sifilis'];
    $ahbc       = $_POST['ahbc'];
    $htlv= $_POST['htlv'];
    $chagas  = $_POST['chagas'];    
    $hbsag      = $_POST['hbsag'];


    $t_prueba= $_POST['t_prueba'];
    $donante_cedula  = $_POST['donante_cedula'];    
    $bioanalista_cedula      = $_POST['bioanalista_cedula'];



    $sql = "UPDATE ps_donante SET        
        fecha='".$fecha."', 
        hcv='".$hcv."', 
        hiv='".$hiv."',
        sifilis='".$sifilis."', 
        ahbc='".$ahbc."', 
        htlv='".$htlv."', 
        chagas='".$chagas."', 
        hbsag='".$hbsag."' ,
        t_prueba='".$t_prueba."', 
        donante_cedula='".$donante_cedula."', 
        bioanalista_cedula='".$bioanalista_cedula."' 
        WHERE donante_cedula=".$donante_cedula;
         
       $q = $conn->prepare($sql);
$q->execute();
            
 echo '<script language="javascript">swal("Pruebas Serologicas Almacenadas Correctamente!",
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
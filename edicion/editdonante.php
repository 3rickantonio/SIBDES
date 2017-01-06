<?php require_once '../conexiones/Connection.php';

$conn = dbConnect();
?>
    <!DOCTYPE html>
    <html lang="es">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Editar Donante</title>

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

                    <form method="POST" accion="editdonante.php?cedula=<?php echo $row['cedula']; ?>">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <center>
                                    <h3 class="panel-title">INFORMACION PERSONAL DEL DONANTE</h3></center>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../vistas/estilo/avatars/paciente.png" class="img-circle img-responsive"> </div>

                                    <div class=" col-md-9 col-lg-9 ">

                                        <table class="table table-user-information">
                                            <?php
                    	require_once '../conexiones/Connection.php';
                    	$conn = dbConnect();
                      $cedula=$_GET['cedula'];
                    	$sql = "SELECT * FROM donante WHERE cedula=".$cedula;
                    	$result = $conn->query($sql);
                    	$rows = $result->fetchAll();
                    	foreach ($rows as $row) {
                    		
                    	}
                     ?>

                                                <tbody>
                                                    <tr>
                                                        <td>Primer Nombre:</td>
                                                        <td width="30">
                                                            <input id="nombre1" type="text" value="<?php echo $row['nombre1']; ?>" name="nombre1" size="25" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Segundo Nombre:</td>
                                                        <td width="30">
                                                            <input id="nombre2" type="text" value="<?php echo $row['nombre2']; ?>" name="nombre2" size="25" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Primer Nombre:</td>
                                                        <td width="30">
                                                            <input type="text" id="apellido1" name="apellido1" value="<?php echo $row['apellido1']; ?>" size="25" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Segundo Apellido:</td>
                                                        <td width="30">
                                                            <input type="text" id="apellido2" value="<?php echo $row['apellido2']; ?>" name="apellido2" size="25" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sexo:</td>
                                                        <td>
                                                            <select id="sexo" name="sexo" class="form-control">
                                                                <option value="<?php echo $row['sexo']; ?>">
                                                                    <?php echo $row['sexo']; ?>
                                                                </option>
                                                                <option value="">->Seleccione:</option>
                                                                <option value="MASCULINO">MASCULINO</option>
                                                                <option value="FEMENINO">FEMENINO</option>
                                                            </select>
                                                        </td>

                                                    </tr>





                                                    <tr>
                                                        <td>Fecha de Nacimiento:</td>
                                                        <td width="30">
                                                            <span class="input-icon input-icon-right">
                                                            
                              <input class="date-picker" id="id-date-picker-1" name="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento']; ?>"  required type="text" data-date-format="yyyy-mm-dd" required="required"/>
                              <i class="ace-icon fa fa-calendar"></i>
                                                          
                            </span>
                                                        </td>
                                                    </tr>



                                                    <input type="hidden" value="<?php echo $row['cedula']; ?>" name="cedula">
                                                    <tr>
                                                        <td>Cedula de Identidad:</td>
                                                        <td width="30">
<input type="text" id="cedula" value="<?php echo $row['cedula']; ?>" disabled name="cedula" size="25" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Telefono:</td>
                                                        <td width="30">
                                                            <input type="text" class="bfh-phone" value="<?php echo $row['telefono']; ?>" data-format="(dddd) ddd-dddd" required name="telefono" size="25" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Telefono Hab:</td>
                                                        <td width="30">
                                                            <input type="text" class="bfh-phone" value="<?php echo $row['telefono_hab']; ?>" data-format="(dddd) ddd-dddd" required name="telefono_hab" size="25" />
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
                                                            <select id="validacion" required name="validacion" class="form-control">
                                                                <option value="<?php echo $row['validacion']; ?>">
                                                                    <?php echo $row['validacion']; ?>
                                                                </option>
                                                                <option value="">->Seleccione:</option>
                                                                <option value="Aceptado">Aceptado</option>
                                                                <option value="Diferido">Diferido</option>
                                                                <option value="Rechazado">Rechazado</option>
                                                            </select>
                                                        </td>
                                                    </tr>





                                                    <div class="box-body">
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <td>Afiliacion:</td>
                                                                <td width="30">
                                                                    <select required id="afiliacion_nombre" name="afiliacion_nombre" class="form-control select2">
                                                                        <option value="<?php echo $row['afiliacion_nombre']; ?>">
                                                                            <?php echo $row['afiliacion_nombre']; ?>
                                                                        </option>
                                                                        <?php
$sql="SELECT * from afiliacion ORDER BY nombre ASC";
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
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <center>
                                        <h3 class="panel-title">PRUEBA CELULAR</h3></center>
                                </div>
                                <div class="panel-body">
                                    <div class="row">

                                        <div class=" col-md-15 col-lg-15 ">

                                            <table class="table table-user-information">

                                                <tbody>


                                                    <?php
	require_once '../conexiones/Connection.php';
	$conn = dbConnect();
  $cedula=$_GET['cedula'];
	$sql = "SELECT * FROM pc_donante WHERE donante_cedula=".$cedula;
	$result = $conn->query($sql);
	$rows = $result->fetchAll();
	foreach ($rows as $row) {
	
	}
 ?>








                                                        <tr>
                                                            <td>Fecha de Registro:</td>
                                                            <td width="30">
                                                                <span class="input-icon input-icon-right">
                                                            
                              <input class="date-picker" id="id-date-picker-1" name="fecha_pc" value="<?php echo $row['fecha']; ?>"  required type="text" data-date-format="yyyy-mm-dd" required="required"/>
                              <i class="ace-icon fa fa-calendar"></i>
                                                          
                            </span>
                                                            </td>
                                                        </tr>




                                                        <tr>
                                                            <td>Grupo Sanguineo:</td>
                                                            <td>
                                                                <select id="grupo_sanguineo" name="grupo_sanguineo" class="form-control">
                                                                    <option value="<?php echo $row['grupo_sanguineo']; ?>">
                                                                        <?php echo $row['grupo_sanguineo']; ?>
                                                                    </option>
                                                                    <option value="">->Seleccione:</option>
                                                                    <option value="A">A</option>
                                                                    <option value="B">B</option>
                                                                    <option value="O">O</option>
                                                                    <option value="AB">AB</option>
                                                                </select>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td>Factor Rh:</td>
                                                            <td>
                                                                <select id="factor_rh" name="factor_rh" class="form-control">
                                                                    <option value="<?php echo $row['factor_rh']; ?>">
                                                                        <?php echo $row['factor_rh']; ?>
                                                                    </option>
                                                                    <option value="">->Seleccione:</option>
                                                                    <option value="RH+">RH+</option>
                                                                    <option value="RH-">RH-</option>
                                                                </select>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td>DU:</td>
                                                            <td>
                                                                <select id="du" name="du" class="form-control">
                                                                    <option value="<?php echo $row['du']; ?>">
                                                                        <?php echo $row['du']; ?>
                                                                    </option>
                                                                    <option value="">->Seleccione:</option>
                                                                    <option value="POSITIVO">POSITIVO</option>
                                                                    <option value="NEGATIVO">NEGATIVO</option>
                                                                </select>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>CD:</td>
                                                            <td>
                                                                <select id="cd" name="cd" class="form-control">
                                                                    <option value="<?php echo $row['cd']; ?>">
                                                                        <?php echo $row['cd']; ?>
                                                                    </option>
                                                                    <option value="">->Seleccione:</option>
                                                                    <option value="POSITIVO">POSITIVO</option>
                                                                    <option value="NEGATIVO">NEGATIVO</option>
                                                                </select>
                                                            </td>

                                                        </tr>


 <div class="box-body">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <td>DATOS Hemoterapista:</td>
                                                                        <td width="30">
                                                                            <select required id="hemoterapista_cedula" name="hemoterapista_cedula" class="form-control select2">
                                                                                <option value="<?php echo $row['hemoterapista_cedula']; ?>">C.I HEMOTERAPISTA:
                                                                                    <?php echo $row['hemoterapista_cedula']; ?>
                                                                                </option>
                                                                                <?php
$sql="SELECT * from hemoterapista ORDER BY nombre1 ASC";
$result = $conn->query($sql);
if ($result-> rowCount() >0){
    $combobit2="->Seleccione:";
    while ($row = $result->fetch(MYSQLI_ASSOC)) {
        $combobit2 .=" <option value='".$row['cedula']."'>".$row['apellido1'].",".$row['nombre1']."-C.I:".$row['cedula']."</option>"; 
    }
}
?>
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





                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <center>
                                            <h3 class="panel-title">PRUEBA SEROLOGICA</h3></center>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">

                                            <div class=" col-md-15 col-lg-15 ">

                                                <table class="table table-user-information">

                                                    <tbody>





                                                        <?php
	require_once '../conexiones/Connection.php';
	$conn = dbConnect();
    $cedula=$_GET['cedula'];
	$sql = "SELECT * FROM ps_donante WHERE donante_cedula=".$cedula;
	$result = $conn->query($sql);
	$rows = $result->fetchAll();
	foreach ($rows as $row) {
		
	}
 ?>






                                                            <tr>
                                                                <td>FECHA DE REGISTRO:</td>
                                                                <td width="30">
                                                                    <span class="input-icon input-icon-right">
                                                            
                              <input class="date-picker" id="id-date-picker-1" name="fecha_ps" value="<?php echo $row['fecha']; ?>"  required type="text" data-date-format="yyyy-mm-dd" required="required"/>
                              <i class="ace-icon fa fa-calendar"></i>
                                                          
                            </span>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td>HCV:</td>
                                                                <td>
                                                                    <select id="hcv" name="hcv" class="form-control">
                                                                        <option value="<?php echo $row['hcv']; ?>">
                                                                            <?php echo $row['hcv']; ?>
                                                                        </option>
                                                                        <option value="">->Seleccione:</option>
                                                                        <option value="POSITIVO">POSITIVO</option>
                                                                        <option value="NEGATIVO">NEGATIVO</option>
                                                                    </select>
                                                                </td>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>HIV:</td>
                                                                <td>
                                                                    <select id="hiv" name="hiv" class="form-control">
                                                                        <option value="<?php echo $row['hiv']; ?>">
                                                                            <?php echo $row['hiv']; ?>
                                                                        </option>
                                                                        <option value="">->Seleccione:</option>
                                                                        <option value="POSITIVO">POSITIVO</option>
                                                                        <option value="NEGATIVO">NEGATIVO</option>
                                                                    </select>

                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>SIFILIS:</td>
                                                                <td>
                                                                    <select id="sifilis" name="sifilis" class="form-control">
                                                                        <option value="<?php echo $row['sifilis']; ?>">
                                                                            <?php echo $row['sifilis']; ?>
                                                                        </option>
                                                                        <option value="">->Seleccione:</option>
                                                                        <option value="POSITIVO">POSITIVO</option>
                                                                        <option value="NEGATIVO">NEGATIVO</option>
                                                                    </select>

                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>AHBC:</td>
                                                                <td>
                                                                    <select id="ahbc" name="ahbc" class="form-control">
                                                                        <option value="<?php echo $row['ahbc']; ?>">
                                                                            <?php echo $row['ahbc']; ?>
                                                                        </option>
                                                                        <option value="">->Seleccione:</option>
                                                                        <option value="POSITIVO">POSITIVO</option>
                                                                        <option value="NEGATIVO">NEGATIVO</option>
                                                                    </select>

                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>HTLV:</td>
                                                                <td>
                                                                    <select id="htlv" name="htlv" class="form-control">
                                                                        <option value="<?php echo $row['htlv']; ?>">
                                                                            <?php echo $row['htlv']; ?>
                                                                        </option>
                                                                        <option value="">->Seleccione:</option>
                                                                        <option value="POSITIVO">POSITIVO</option>
                                                                        <option value="NEGATIVO">NEGATIVO</option>
                                                                    </select>

                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>CHAGAS:</td>
                                                                <td>
                                                                    <select id="chagas" name="chagas" class="form-control">
                                                                        <option value="<?php echo $row['chagas']; ?>">
                                                                            <?php echo $row['chagas']; ?>
                                                                        </option>
                                                                        <option value="">->Seleccione:</option>
                                                                        <option value="POSITIVO">POSITIVO</option>
                                                                        <option value="NEGATIVO">NEGATIVO</option>
                                                                    </select>

                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>HBSAG:</td>
                                                                <td>
                                                                    <select id="hbsag" name="hbsag" class="form-control">
                                                                        <option value="<?php echo $row['hbsag']; ?>">
                                                                            <?php echo $row['hbsag']; ?>
                                                                        </option>
                                                                        <option value="">->Seleccione:</option>
                                                                        <option value="POSITIVO">POSITIVO</option>
                                                                        <option value="NEGATIVO">NEGATIVO</option>
                                                                    </select>
                                                                </td>
                                                                </td>
                                                            </tr>

                                                            <tr> </tr>

                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <td>DATOS Bioanalista:</td>
                                                                        <td width="30">
                                                                            <select required id="bioanalista_cedula" name="bioanalista_cedula" class="form-control select2">
                                                                                <option value="<?php echo $row['bioanalista_cedula']; ?>">C.I BIOANALISTA:
                                                                                    <?php echo $row['bioanalista_cedula']; ?>
                                                                                </option>
                                                                                <?php
$sql="SELECT * from bioanalista ORDER BY nombre1 ASC";
$result = $conn->query($sql);
if ($result-> rowCount() >0){
    $combobit2="->Seleccione:";
    while ($row = $result->fetch(MYSQLI_ASSOC)) {
        $combobit2 .=" <option value='".$row['cedula']."'>".$row['apellido1'].",".$row['nombre1']."-C.I:".$row['cedula']."</option>"; 
    }
}
?>
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
          $sql2 = 'SELECT * FROM donante WHERE cedula = ?';
          $stmt = $conn->prepare($sql2);
          $results = $stmt->execute(array($_GET['cedula']));
          $row = $stmt->fetch();
          if (empty($row)) {
          /*echo '<script language="javascript">swal("Datos Almacenados Correctamente!",
          "",
          "success");</script>';*/
          }
          else{
            //ACTUALIZA DATOS
              $nombre1 = (isset($_POST['nombre1']) ? $_POST['nombre1'] : '');
              $nombre2 = (isset($_POST['nombre2']) ? $_POST['nombre2'] : '');
              $apellido1 = (isset($_POST['apellido1']) ? $_POST['apellido1'] : '');
              $apellido2 = (isset($_POST['apellido2']) ? $_POST['apellido2'] : '');
              $sexo= (isset($_POST['sexo']) ? $_POST['sexo'] : '');
              $fecha_nacimiento = (isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : '');
              $cedula = (isset($_POST['cedula']) ? $_POST['cedula'] : '');
              $telefono = (isset($_POST['telefono']) ? $_POST['telefono'] : '');
              $telefono_hab = (isset($_POST['telefono_hab']) ? $_POST['telefono_hab'] : '');
              $direccion = (isset($_POST['direccion']) ? $_POST['direccion'] : '');
              $afiliacion_nombre = (isset($_POST['afiliacion_nombre']) ? $_POST['afiliacion_nombre'] : '');
              $validacion = (isset($_POST['validacion']) ? $_POST['validacion'] : '');           
              $sql = "UPDATE donante SET
              nombre1='".$nombre1."',
              nombre2='".$nombre2."',
              apellido1='".$apellido1."',
              apellido2='".$apellido2."',
              sexo='".$sexo."',
              fecha_nacimiento='".$fecha_nacimiento."',
              cedula='".$cedula."',
              telefono='".$telefono."',
              telefono_hab='".$telefono_hab."',
              direccion='".$direccion."',
              afiliacion_nombre='".$afiliacion_nombre."',
              validacion='".$validacion."'
              WHERE cedula=".$cedula;
              $q = $conn->prepare($sql);
              $q->execute();
                

              
              //ACTUALIZA PRUEBAS CELULARES DONANTE

              
              $fecha_pc = (isset($_POST['fecha_pc']) ? $_POST['fecha_pc'] : '');
              $du = (isset($_POST['du']) ? $_POST['du'] : '');
              $cd = (isset($_POST['cd']) ? $_POST['cd'] : '');
              $factor_rh = (isset($_POST['factor_rh']) ? $_POST['factor_rh'] : '');
              $grupo_sanguineo = (isset($_POST['grupo_sanguineo']) ? $_POST['grupo_sanguineo'] : '');
              $cedula = (isset($_POST['cedula']) ? $_POST['cedula'] : '');
              $hemoterapista_cedula = (isset($_POST['hemoterapista_cedula']) ? $_POST['hemoterapista_cedula'] : '');
              $sql = "UPDATE pc_donante SET
              fecha='".$fecha_pc."',
              du='".$du."',
              cd='".$cd."',
              factor_rh='".$factor_rh."',
              grupo_sanguineo='".$grupo_sanguineo."',
              hemoterapista_cedula='".$hemoterapista_cedula."'
              WHERE donante_cedula=".$cedula;
              $q = $conn->prepare($sql);
              $q->execute();
         
              
              

             //ACTUALIZA PRUEBAS SEROLOGICAS DONANTE
           
              $fecha_ps = (isset($_POST['fecha_ps']) ? $_POST['fecha_ps'] : '');
              $hcv = (isset($_POST['hcv']) ? $_POST['hcv'] : '');
              $hiv = (isset($_POST['hiv']) ? $_POST['hiv'] : '');
              $sifilis = (isset($_POST['sifilis']) ? $_POST['sifilis'] : '');
              $ahbc = (isset($_POST['ahbc']) ? $_POST['ahbc'] : '');
              $htlv = (isset($_POST['ahbc']) ? $_POST['htlv'] : '');
              $chagas = (isset($_POST['chagas']) ? $_POST['chagas'] : '');
              $hbsag = (isset($_POST['hbsag']) ? $_POST['hbsag'] : '');
              $cedula = (isset($_POST['cedula']) ? $_POST['cedula'] : '');
              $bioanalista_cedula = (isset($_POST['bioanalista_cedula']) ? $_POST['bioanalista_cedula'] : '');
              $sql = "UPDATE ps_donante SET
              fecha='".$fecha_ps."',
              hcv='".$hcv."',
              hiv='".$hiv."',
              sifilis='".$sifilis."',
              ahbc='".$ahbc."',
              htlv='".$htlv."',
              chagas='".$chagas."',
              hbsag='".$hbsag."',
              bioanalista_cedula='".$bioanalista_cedula."'
              WHERE donante_cedula=".$cedula;
              $q = $conn->prepare($sql);
              $q->execute();
           
              
//AGREGA PRUEBA CELULAR EN LA HISTORIA DEL  DONANTE      
              
$sql = "INSERT INTO pc_donante_historia (fecha,du,cd,factor_rh,grupo_sanguineo,donante_cedula,hemoterapista_cedula) VALUES (:fecha,:du,:cd,:factor_rh,:grupo_sanguineo,:donante_cedula,:hemoterapista_cedula)";
$q = $conn->prepare($sql);
$q->bindParam(':fecha', $_POST['fecha_pc'], PDO::PARAM_STR);
$q->bindParam(':du', $_POST['du'], PDO::PARAM_STR);
$q->bindParam(':cd', $_POST['cd'], PDO::PARAM_STR);
$q->bindParam(':factor_rh', $_POST['factor_rh'], PDO::PARAM_STR);
$q->bindParam(':grupo_sanguineo', $_POST['grupo_sanguineo'], PDO::PARAM_STR);
$q->bindParam(':donante_cedula', $_POST['cedula'], PDO::PARAM_STR);
$q->bindParam(':hemoterapista_cedula', $_POST['hemoterapista_cedula'], PDO::PARAM_STR);
$q->execute();
              
 //AGREGA PRUEBA SEROLOGICA EN LA HISTORIA DEL  DONANTE

$sql = "INSERT INTO ps_donante_historia (fecha,hcv,hiv,sifilis,ahbc,htlv,chagas,hbsag,donante_cedula,bioanalista_cedula)  VALUES (:fecha,:hcv,:hiv,:sifilis,:ahbc,:htlv,:chagas,:hbsag,:donante_cedula,:bioanalista_cedula)";
$q = $conn->prepare($sql);
$q->bindParam(':fecha', $_POST['fecha_ps'], PDO::PARAM_STR);
$q->bindParam(':hcv', $_POST['hcv'], PDO::PARAM_STR);
$q->bindParam(':hiv', $_POST['hiv'], PDO::PARAM_STR);
$q->bindParam(':sifilis', $_POST['sifilis'], PDO::PARAM_STR);
$q->bindParam(':ahbc', $_POST['ahbc'], PDO::PARAM_STR);
$q->bindParam(':htlv', $_POST['htlv'], PDO::PARAM_STR);
$q->bindParam(':chagas', $_POST['chagas'], PDO::PARAM_STR);
$q->bindParam(':hbsag', $_POST['hbsag'], PDO::PARAM_STR);
$q->bindParam(':donante_cedula', $_POST['cedula'], PDO::PARAM_STR);
$q->bindParam(':bioanalista_cedula', $_POST['bioanalista_cedula'], PDO::PARAM_STR);
$q->execute();
             

          }
          }


          ?>







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
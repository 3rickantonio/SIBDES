
    <!DOCTYPE html>
    <html lang="es">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Usuario</title>

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
                    <form name="" method="POST" action="">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <center>
                                    <h3 class="panel-title">INFORMACION PERSONAL USUARIO DE SISTEMA</h3></center>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../vistas/estilo/avatars/user.png" class="img-circle img-responsive"> </div>

                                    <div class=" col-md-9 col-lg-9 ">

                                        <table class="table table-user-information">

                                            <tbody>
                                                <tr>
                                                    <td>PRI.NOMBRE:</td>
                                                    <td width="30">
                                                    <input type="text" required name="nombre1" size="25" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>SEG.NOMBRE:</td>
                                                    <td width="30">
                                                        <input type="text" required name="nombre2" size="25" />
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>SEXO:</td>
                                                    <td>
                                                        <select id="sexo" name="sexo" required class="form-control">
                                                            <option value="">->Seleccione:</option>
                                                            <option value="MASCULINO">MASCULINO</option>
                                                            <option value="FEMENINO">FEMENINO</option>
                                                        </select>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>FECHA DE NACIMIENTO:</td>
                                                    <td width="30">
                                                        <span class="input-icon input-icon-right">
                              <input class="date-picker" id="id-date-picker-1" name="fecha" required type="text" data-date-format="yyyy-mm-dd" required="required"/>
                              <i class="ace-icon fa fa-calendar"></i>
                            </span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>EMAIL:</td>
                                                    <td width="30">
                                                        <input type="text" name="email" required size="25" />
                                                    </td>
                                                </tr>
<tr>
<td>TELEFONO:</td>
<td width="30">
<input type="text" class="bfh-phone" data-format="(dddd) ddd-dddd" required name="telefono" size="25" />
</td>
                                                </tr>

                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <div class="panel-heading">
                                <center>
                                    <h3 class="panel-title">DOCUMENTACION</h3></center>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../vistas/estilo/avatars/user.png" class="img-circle img-responsive"> </div>
                                    <div class=" col-md-9 col-lg-9 ">
                                        <table class="table table-user-information">
                                            <tbody>

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
                                                    <div class="box-body">
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <td>DEPARTAMENTO:</td>
                                                                <td width="30">
                                                                    <select required id="departamento" name="departamento" class="form-control select2">
                                                                        <option value="">
                                                                            <?php echo $combobit2; ?>
                                                                        </option>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <tr>
                                                        <td>VALIDACION DE ACCESO:</td>
                                                        <td>
                                                            <select id="valido" name="valido" required class="form-control">
                                                                <option value="INACTIVO">->Seleccione:</option>
                                                                <option value="INACTIVO">INACTIVO</option>
                                                                <option value="ACTIVO">ACTIVO</option>
                                                            </select>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>PASSWORD:</td>
                                                        <td width="30">
                                                            <input type="password" required name="password" size="25" />
                                                        </td>
                                                    </tr>
                                            </tbody>
                                        </table>





                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-heading">
                                <center>

                                    <button type="button " class="btn btn-lg btn-labeled btn-danger" onclick="history.back()">
                                        <span><i class="fa fa-chevron-left"></i></span> VOLVER
                                    </button>

                                    <button type="button " value="Buscar" class="btn btn-lg btn-labeled btn-success">
                                        </span>GUARDAR <span><i class="fa fa-chevron-right"></i>
                      </button>


                        </center>
          </div>
            </form>
              <?php

require_once '../conexiones/Connection.php';
$conn = dbConnect();

	if (isset($_POST['email'])) {
		$sql2 = 'SELECT * FROM usuarios WHERE email = ?';
		$stmt = $conn->prepare($sql2);
		$results = $stmt->execute(array($_POST['email']));
		$row = $stmt->fetch();
		if (empty($row)) {
                 $sql = "INSERT INTO usuarios (nombre1,nombre2,password,email,fecha,valido,departamento,sexo,telefono) VALUES (:nombre1,:nombre2,:password,:email,:fecha,:valido,:departamento,:sexo,:telefono)";
$q = $conn->prepare($sql);
$q->bindParam(':nombre1', $_POST['nombre1'], PDO::PARAM_STR);
$q->bindParam(':nombre2', $_POST['nombre2'], PDO::PARAM_STR);
$q->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
$q->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
$q->bindParam(':fecha', $_POST['fecha'], PDO::PARAM_STR);
$q->bindParam(':valido', $_POST['valido'], PDO::PARAM_STR);
$q->bindParam(':departamento', $_POST['departamento'], PDO::PARAM_STR);
$q->bindParam(':sexo', $_POST['sexo'], PDO::PARAM_STR);
$q->bindParam(':telefono', $_POST['telefono'], PDO::PARAM_STR);


 $result= $q->execute();

 echo '<script language="javascript">swal("Datos Almacenados Correctamente!",
  "",
  "success");</script>';


		}
        else{
           echo '<script language="javascript"> swal("ERROR!", "El donante se encuentra registrado, o ha ocurrido un problema en la actualizacion.", "error");</script>';


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
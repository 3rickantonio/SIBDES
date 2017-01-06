<html lang="es">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="../vistas/estilo/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../vistas/estilo/dist/sweetalert.css">
<!-- ace styles -->
<link rel="stylesheet" href="../vistas/estilo/css/bootstrap.min.css" />
<link rel="stylesheet" href="../vistas/estilo/font-awesome/4.2.0/css/font-awesome.min.css" />
<!-- ace styles -->
<link rel="stylesheet" href="../vistas/estilo/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

<title>Verificacion</title>
</body>

</html>
<?php
//VERIFICACION DONANTE
	require_once '../conexiones/Connection.php';
	$result = "";
	$row = null;
	$conn = dbConnect();
	if (isset($_GET['cedula'])) {
		$sql = 'SELECT * FROM donante WHERE cedula = ?';
		$stmt = $conn->prepare($sql);
		$results = $stmt->execute(array($_GET['cedula']));
		$row = $stmt->fetch();
//INICIO DE BUSQUEDA DE PACIENTE
		if (empty($row)) {
	if (isset($_GET['cedula'])) {
		$sql = 'SELECT * FROM paciente WHERE cedula = ?';
		$stmt = $conn->prepare($sql);
		$results = $stmt->execute(array($_GET['cedula']));
		$row = $stmt->fetch();
		if (empty($row)) {
//BUSQUEDA DEL BIONALISTA
	if (isset($_GET['cedula'])) {
		$sql = 'SELECT * FROM bioanalista WHERE cedula = ?';
		$stmt = $conn->prepare($sql);
		$results = $stmt->execute(array($_GET['cedula']));
		$row = $stmt->fetch();
		if (empty($row)) {
//BUSQUEDA DEL HEMOTERAPISTA
if (isset($_GET['cedula'])) {
		$sql = 'SELECT * FROM hemoterapista WHERE cedula = ?';
		$stmt = $conn->prepare($sql);
		$results = $stmt->execute(array($_GET['cedula']));
		$row = $stmt->fetch();
		if (empty($row)) {
     
//BUSQUEDA DEL RECEPTOR
if (isset($_GET['cedula'])) {
		$sql = 'SELECT * FROM control_tipeaje WHERE cedula = ?';
		$stmt = $conn->prepare($sql);
		$results = $stmt->execute(array($_GET['cedula']));
		$row = $stmt->fetch();
		if (empty($row)) {
                  echo '<script language="javascript"> swal("ERROR!...", "NO SE HA ENCONTRADO CEDULA EN EL SISTEMA!.", "error");</script>';
          include "../agregar/addexamen.php";
		}
        else{
             echo '<script language="javascript">swal(" RECEPTOR ENCONTRADO!",
  "OK, Para ver sus datos.",
  "success");</script>';
                  include "../consultas/consultartipeaje.php";
        }
	}//FIN DE BUSQUEDA DE HEMOTERAPISTA
            
            
            
		}
        else{
             echo '<script language="javascript">swal(" HEMOTERAPISTA ENCONTRADO!",
  "OK, Para ver sus datos.",
  "success");</script>';
                  include "../consultas/consultarhemoterapista.php";
        }
	}//FIN DE BUSQUEDA DE HEMOTERAPISTA
		}
        else{
             echo '<script language="javascript">swal(" BIOANALISTA ENCONTRADO!",
  "OK, Para ver sus datos.",
  "success");</script>';
                  include "../consultas/consultarbioanalista.php";

        }
	}//FIN DE BUSQUEDA DE BIOANALISTA
		}
        else{
             echo '<script language="javascript">swal(" PACIENTE ENCONTRADO!",
  "OK, Para ver sus datos.",
  "success");</script>';
                  include "../consultas/consultarpaciente.php";

        }
	}//FIN DE BUSQUEDA DE PACIENTE
		}
        else{
                 echo '<script language="javascript">swal(" DONANTE ENCONTRADO!",
  "OK, Para ver sus datos.",
  "success");</script>';
                  include "../consultas/consultardonante.php";
          $row = null;
        }
	}//FIN DE BUSQUEDA DE DONANTE
 ?>
    <style type="text/css">
        body {
            /* Ubicacion de la imagen */
            background-image: url("../vistas/estilo/avatars/fondoa.jpg");
            /* Nos aseguramos que la imagen de fondo este centrada vertical y
    horizontalmente en todo momento */
            background-position: center center;
            /* La imagen de fondo no se repite */
            background-repeat: no-repeat;
            /* La imagen de fondo está fija en el viewport, de modo que no se mueva cuando
     la altura del contenido supere la altura de la imagen. */
            background-attachment: fixed;
            /* La imagen de fondo se reescala cuando se cambia el ancho de ventana
     del navegador */
            background-size: cover;
            /* Fijamos un color de fondo para que se muestre mientras se está
    cargando la imagen de fondo o si hay problemas para cargarla  */
            background-color: #FFFFFF;
        }

    </style>

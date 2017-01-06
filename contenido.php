<?php require_once 'conexiones/Connection.php';
$conn = dbConnect();
?>



    <div class="col-lg-2 col-md-2" style="margin-top:8px;">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user-plus fa-5x  "></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">Total :
                            <?php
  $sql="SELECT count(*) AS cuenta FROM donante";
  $result = $conn->query($sql);
$row = $result->fetch(MYSQLI_ASSOC);
  if ($result-> rowCount() !==""){
       echo "$row[cuenta]"; 

  }
  ?>
                        </div>
                        <div>Donantes!</div>
                    </div>
                </div>
            </div>
            <a href="reportes/donantes.php">
                <div class="panel-footer">
                    <span class="pull-left">Ver Lista</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>


    <div class="col-lg-2 col-md-2" style="margin-top:8px;">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3 ">
                        <i class="fa fa-wheelchair fa-5x "></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">Total :
                            <?php
  $sql="SELECT count(*) AS cuenta FROM paciente";
  $result = $conn->query($sql);
$row = $result->fetch(MYSQLI_ASSOC);
  if ($result-> rowCount() !==""){
       echo "$row[cuenta]"; 
    
  }
  ?>
                        </div>
                        <div>Pacientes!</div>
                    </div>
                </div>
            </div>
            <a href="reportes/pacientes.php">
                <div class="panel-footer">
                    <span class="pull-left">Ver Lista</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>




    <div class="col-lg-2 col-md-2" style="margin-top:8px;">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class=" fa fa-tint fa-5x "></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">Total :
                            <?php
  $sql="SELECT count(*) AS cuenta FROM cont_tranf_prep";
  $result = $conn->query($sql);
$row = $result->fetch(MYSQLI_ASSOC);
  if ($result-> rowCount() !==""){
       echo "$row[cuenta]"; 
    
  }
  ?>
                        </div>
                        <div>Transfusiones!</div>
                    </div>
                </div>
            </div>
            <a href="reportes/transfuciones.php">
                <div class="panel-footer">
                    <span class="pull-left">Ver Lista</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>



    <div class="col-lg-2 col-md-2" style="margin-top:8px;">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class=" fa fa-user fa-5x "></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">Total :
                            <?php
  $sql="SELECT count(*) AS cuenta FROM control_tipeaje";
  $result = $conn->query($sql);
$row = $result->fetch(MYSQLI_ASSOC);
  if ($result-> rowCount() !==""){
       echo "$row[cuenta]"; 
    
  }
  ?>


                        </div>
                        <div>Receptor!</div>
                    </div>
                </div>
            </div>
            <a href="reportes/tipeajes.php">
                <div class="panel-footer">
                    <span class="pull-left">Ver Lista</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>




    <div class="col-lg-2 col-md-2" style="margin-top:8px;">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class=" fa fa-stethoscope fa-5x "></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">Bioanalistas :
                            <?php
  $sql="SELECT count(*) AS cuenta FROM bioanalista";
  $result = $conn->query($sql);
$row = $result->fetch(MYSQLI_ASSOC);
  if ($result-> rowCount() !==""){
       echo "$row[cuenta]"; 
    
  }
  ?>


                        </div>
                        <div class="huge">Hemoterapistas :
                            <?php
  $sql="SELECT count(*) AS cuenta FROM hemoterapista";
  $result = $conn->query($sql);
$row = $result->fetch(MYSQLI_ASSOC);
  if ($result-> rowCount() !==""){
       echo "$row[cuenta]"; 
    
  }
  ?>


                        </div>

                    </div>
                </div>
            </div>
            <a href="reportes/biohemo.php">
                <div class="panel-footer">
                    <span class="pull-left">Ver Lista</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>








    <style type="text/css">
        .ao .ao-date {
            min-height: 40px;
            position: relative;
            font-size: 20px;
            line-height: 20px;
            text-align: center;
            font-weight: bold;
            background: #78bde7;
            padding: 10px 5px 10px;
            color: rgba(255, 255, 255, 0.9);
            text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.1);
        }
        
        .ao .ao-date:after {
            content: " ";
            border-right: 10px solid transparent;
            border-left: 10px solid transparent;
            position: absolute;
            bottom: -10px;
            left: 10%;
            border-top: 20px solid #78bde7;
        }
        
        .ao .ao-volume {
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            background: #accfe5;
            color: #666;
        }

    </style>










    <section id="labels">
        <div class="col-sm-2 col-md-2" style="margin-top:8px;">
            <div class="ao">
                <div class="ao-date">
                    <span class="changeby"><span class="fa fa-tint fa-1x red"></span> PC:</span>
                    Donantes!
                </div>
                <div class="ao-volume">
                    TOTAL:
                    <?php
  $sql="SELECT count(*) AS cuenta FROM pc_donante_historia where fecha<>'2000-00-00'";
  $result = $conn->query($sql);
$row = $result->fetch(MYSQLI_ASSOC);
  if ($result-> rowCount() !==""){
       echo "$row[cuenta]"; 
  }
  ?>
                </div>
            </div>
        </div>
    </section>





    <section id="labels">
        <div class="col-sm-2 col-md-2" style="margin-top:8px;">
            <div class="ao">
                <div class="ao-date">
                    <span class="changeby"><span class="fa fa-tint fa-1x red"></span> PS:</span>
                    Donantes!
                </div>
                <div class="ao-volume">
                    TOTAL:
                    <?php
 $sql="SELECT count(*) AS cuenta FROM ps_donante_historia where fecha<>'2000-00-00'";
  $result = $conn->query($sql);
$row = $result->fetch(MYSQLI_ASSOC);
  if ($result-> rowCount() !==""){
       echo "$row[cuenta]"; 
  }
  ?>
                </div>
            </div>
        </div>
    </section>



    <section id="labels">
        <div class="col-sm-2 col-md-2" style="margin-top:8px;">
            <div class="ao">
                <div class="ao-date">
                    <span class="changeby"><span class="fa fa-tint fa-1x red"></span> PP:Donantes!</span>
                </div>
                <div class="ao-volume">
                    TOTAL:
                    <?php
    $sql="SELECT count(*) AS cuenta FROM pantallas_donante_historia where fecha<>'2000-00-00'";
  $result = $conn->query($sql);
$row = $result->fetch(MYSQLI_ASSOC);
  if ($result-> rowCount() !==""){
       echo "$row[cuenta]"; 
  }
  ?>
                </div>
            </div>
        </div>
    </section>



    <section id="labels">
        <div class="col-sm-2 col-md-2" style="margin-top:8px;">
            <div class="ao">
                <div class="ao-date">
                    <span class="changeby"><span class="fa fa-tint fa-1x red"></span> PC:</span>Pacientes!
                </div>
                <div class="ao-volume">
                    TOTAL:
                    <?php
 $sql="SELECT count(*) AS cuenta FROM pc_paciente_historia where fecha<>'2000-00-00'";
  $result = $conn->query($sql);
$row = $result->fetch(MYSQLI_ASSOC);
  if ($result-> rowCount() !==""){
       echo "$row[cuenta]"; 
  }
  ?>
                </div>
            </div>
        </div>
    </section>





    <section id="labels">
        <div class="col-sm-2 col-md-2" style="margin-top:8px;">
            <div class="ao">
                <div class="ao-date">
                    <span class="changeby"><span class="fa fa-tint fa-1x red"></span> PP:</span> Pacientes!
                </div>
                <div class="ao-volume">
                    TOTAL:
                    <?php
 $sql="SELECT count(*) AS cuenta FROM pantallas_paciente_historia where fecha<>'2000-00-00'";
  $result = $conn->query($sql);
$row = $result->fetch(MYSQLI_ASSOC);
  if ($result-> rowCount() !==""){
       echo "$row[cuenta]"; 
  }
  ?>
                </div>
            </div>
        </div>
    </section>






    <div class="col-lg-10 col-md-9" style="margin-top:20px;">


        <table id="example1" class="panel table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Nombre(S)</th>
                    <th>Apellido(S)</th>
                    <th>Cedula</th>
                    <th>Telefono</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Afiliacion</th>
                    <th>Opciones</th>
                </tr>
            </thead>



            <?php
  $sql="SELECT * from donante";
  $result = $conn->query($sql);
    while ($row = $result->fetch(MYSQLI_ASSOC)) {
    echo "<td>$row[nombre1], $row[nombre2]</td>"; 
    echo "<td>$row[apellido1], $row[apellido2]</td>"; 
    echo "<td>$row[cedula]</td>"; 
    echo "<td>$row[telefono]</td>";
    echo "<td>$row[fecha_nacimiento]</td>"; 
    echo "<td>$row[afiliacion_nombre]</td>"; 
    echo "  <td><a class='btn btn-primary btn-xs' href='agregar/verificacion.php?cedula=$row[cedula]'>VER DATOS <em class='fa fa-search'></em></a>
                    <a class='btn btn-danger btn-xs'> NO ELIMINABLE <em class='ace-icon fa fa-times''></em></a>
                    </td></tr>";
   
    }
  ?>



        </table>

    </div>

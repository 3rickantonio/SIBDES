<!-- ace styles -->
<link rel="stylesheet" href="../vistas/estilo/css/bootstrap.min.css" />
<link rel="stylesheet" href="../vistas/estilo/font-awesome/4.2.0/css/font-awesome.min.css" />
<!-- ace styles -->
<link rel="stylesheet" href="../vistas/estilo/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />



<body class="no-skin">




    <div id="sidebar" class="sidebar responsive">
        <ul class="nav nav-list">
            <li class="active">
                <a href="../panel.php"><i class="menu-icon fa fa-tachometer "></i><span class="menu-text">Panel de control</span></a>
                <b class="arrow"></b>
            </li>

            <!-- /.INICIO DEL PANEL (Menu) PRINCIPAL -->
            <!-- /.Configuracion -->
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon blue fa fa-cog"></i><span class="menu-text">Configuracion</span>
                    <b class="arrow  blue fa fa-caret-down"></b>
                </a><b class="arrow"></b>

                <ul class="submenu">
                    <li class=""><a href="../agregar/addarea.php"><i class="menu-icon fa fa-caret-right"></i>Departamentos</a></li>
                    <li class=""><a href="../agregar/addafiliacion.php"><i class="menu-icon fa fa-caret-right"></i>Afiliaciones</a><b class="arrow"></b></li>
                </ul>
            </li>
            <!-- FIN Configuracion -->


            <!-- /.Bioanalista -->
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon blue fa fa-stethoscope"></i><span class="menu-text">Bioanalistas</span>
                    <b class="arrow  blue fa fa-caret-down"></b>
                </a><b class="arrow"></b>

                <ul class="submenu">
                    <li class=""><a href="../agregar/addbioanalista.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Bioanalista</a></li>
                    <li class=""><a href="../reportes/t_bioanalistas.php"><i class="menu-icon fa fa-caret-right"></i>Lista Bioanalistas</a></li>
                    <!-- aqui falta -->

                </ul>
            </li>
            <!-- FIN Bioanalista -->



            <!-- /.Hemoterapista -->
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon blue fa fa-stethoscope"></i><span class="menu-text">Hemoterapista</span>
                    <b class="arrow  blue fa fa-caret-down"></b>
                </a><b class="arrow"></b>

                <ul class="submenu">
                    <li class=""><a href="../agregar/addhemoterapista.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Hemoterapista</a></li>
                    <li class=""><a href="../reportes/t_hemoterapistas.php"><i class="menu-icon fa fa-caret-right"></i>Lista Hemoterapistas</a></li>
                    <!-- FIN Hemoterapista -->

                </ul>
            </li>
            <!-- FIN Bioanalista -->

            <!-- /. -->
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon blue fa fa-user"></i><span class="menu-text">Receptor</span>
                    <b class="arrow  blue fa fa-caret-down"></b>
                </a><b class="arrow"></b>
                <ul class="submenu">
                    <li class=""><a href="../agregar/addtipeaje.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Receptor</a></li>

                </ul>
            </li>
            <!-- FIN Tipeajes -->






            <!-- /.Donantes -->
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon blue fa fa-user-plus"></i><span class="menu-text">Donantes</span>
                    <b class="arrow  blue fa fa-caret-down"></b>
                </a><b class="arrow"></b>

                <ul class="submenu">
                    <li class=""><a href="../agregar/adddonante.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Donante</a></li>
                    <li class=""><a href="../reportes/t_donantes.php"><i class="menu-icon fa fa-caret-right"></i>Lista de donantes</a></li>
                </ul>
            </li>
            <!-- FIN Donantes -->

            <!-- /.Pacientes -->
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon blue fa fa-wheelchair"></i><span class="menu-text">Pacientes</span>
                    <b class="arrow  blue fa fa-caret-down"></b>
                </a><b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="../agregar/addpaciente.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Pacientes</a>
                        <li class=""><a href="../reportes/t_pacientes.php"><i class="menu-icon fa fa-caret-right"></i>Lista de pacientes</a>
                        </li>


                </ul>
                </li>
                <!-- FIN Pacientes -->

                <!-- /.Examenes -->
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon red fa fa-list-ul"></i><span class="menu-text">Examenes</span>
                        <b class="arrow  blue fa fa-caret-down"></b>
                    </a><b class="arrow"></b>

                    <ul class="submenu">
                        <li class=""><a href="../agregar/pc_donante.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Pruebas Celulares Donante</a><b class="arrow"></b></li>
                        <li class=""><a href="../agregar/pc_paciente.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Pruebas Celulares Paciente</a><b class="arrow"></b></li>
                        <li class=""><a href="../agregar/pp_paciente.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Pruebas Pantallas Paciente</a><b class="arrow"></b></li>
                        <li class=""><a href="../agregar/ps_donante.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Pruebas Serologicas Donantes</a><b class="arrow"></b></li>
                        <li class=""><a href="../agregar/pp_donante.php"><i class="menu-icon fa fa-caret-right"></i>Agregar Pruebas Pantallas Donantes</a><b class="arrow"></b></li>

                    </ul>
                </li>
                <!-- FIN Examenes -->



                <!-- /.Transfuciones -->
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon red fa fa-tint"></i><span class="menu-text">Transfusiones</span>
                        <b class="arrow  blue fa fa-caret-down"></b>
                    </a><b class="arrow"></b>

                    <ul class="submenu">
                        <li class=""><a href="../agregar/addbolsa.php"><i class="menu-icon fa fa-caret-right"></i>Registrar Seleccion</a></li>
                        <li class=""><a href="../agregar/cont_tranf_prep.php"><i class="menu-icon fa fa-caret-right"></i>Control De Transfusiones Preparadas</a></li>
                    </ul>
                </li>
                <!-- FIN Transfuciones -->
                <!-- /.Reportes -->
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon blue fa fa-file-pdf-o"></i><span class="menu-text">Reportes</span>
                        <b class="arrow  blue fa fa-caret-down"></b>
                    </a><b class="arrow"></b>

                    <ul class="submenu">
                        <li class=""><a href="../reportes/t_reportes.php"><i class="menu-icon fa fa-caret-right"></i>Lista Reportes!</a><b class="arrow"></b></li>
                    </ul>
                </li>
                <!-- FIN Reportes -->
                <!-- /.Manueles -->
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon red fa fa-file-pdf-o "></i><span class="menu-text">Manuales</span>
                        <b class="arrow  red fa fa-caret-down"></b>
                    </a>
                    </b>

                    <ul class="submenu">
                        <li class=""><a href="../manual/"><i class="menu-icon fa fa-caret-right"></i>Manual</a></li>
                    </ul>
                </li>
                <!-- FIN Reportes -->
                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i class="ace-icon  fa fa-angle-double-left blue" data-icon1="ace-icon blue fa fa-angle-double-left" data-icon2="ace-icon blue fa fa-angle-double-right"></i>
                </div>
        </ul>

    </div>

    <script type="text/javascript">
        window.jQuery || document.write("<script src='../vistas/estilo/js/jquery.min.js'>" + "<" + "/script>");

    </script>
    <script src="../vistas/estilo/js/bootstrap.min.js"></script>
    <!-- ace scripts -->
    <script src="../vistas/estilo/js/ace-elements.min.js"></script>
    <script src="../vistas/estilo/js/ace.min.js"></script>



</body>

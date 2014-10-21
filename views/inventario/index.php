<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIC | Inventario</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="css/plugins/timeline.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="font-a/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style type="text/css" media="screen">

      .navbar-default{
        background-color: #02588D;
        border-color: transparent;
      }
      .imglogo{
        height: 43px;
        width: 173px;
        margin-top: -11px;
      }

    </style>

</head>

<body>
    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="javascript:void(0)"><img class="imglogo" src="img/logosemicorg.png" alt=""></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" >
                        <i class="fa fa-user fa-fw"></i> Admin <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Perfil</a> </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

           <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                           <a class="active" href="javascript:void(0)"><i class="fa fa-home fa-fw"></i> Principal</a>
                        </li>
                        <li>
                           <a href="views/inventario/index.php"><i class="fa fa-cube fa-fw"></i> Inventario</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-location-arrow fa-fw"></i> Entradas-salidas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="views/entradaSalidas/index.php ">Bitacora</a>
                                </li>
                                <li>
                                    <a href="views/entradaSalidas/generaOrden.php ">Generar orden</a>
                                </li>
                                <li>
                                    <a href="views/entradaSalidas/cambioArticulo.php ">Editar entrada-salida</a>
                                </li>                                

                            </ul>
                        </li>
                        <li>
                            <a href="views/colaboradores/index.php"><i class="fa fa-users fa-fw"></i> Colaboradores</a>
                        </li>
                        <li>
                            <a href="views/marcas-tipoArt/index.php"><i class="fa fa-bookmark fa-fw"></i> Marcas y/o Tipo Articulos</a>
                        </li>

                        <li>
                            <a href="views/config/index.php"><i class="fa fa-cog fa-fw"></i> Configuración del sistema</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/sb-admin-2.js"></script>

</body>
</html>

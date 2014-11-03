<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIC | Inventario</title>
    <link href="../../../src/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../src/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../../../src/css/sb-admin-2.css" rel="stylesheet">
    <link href="../../../src/fonts/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                <a class="navbar-brand" href="javascript:void(0)"><img class="imglogo" src="../../../src/img/logosemicorg.png" alt=""></a>
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
                           <a href="../dashboard/"><i class="fa fa-home fa-fw"></i> Principal</a>
                        </li>
                        <li>
                           <a class="active" href="javascript:void(0)"><i class="fa fa-cube fa-fw"></i> Inventario</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-exchange fa-fw"></i> Entradas-salidas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../entradaSalidas/ ">Bitacora</a>
                                </li>
                                <li>
                                    <a href="../entradaSalidas/generaOrden.php ">Generar orden</a>
                                </li>
                                <li>
                                    <a href="../entradaSalidas/cambioArticulo.php ">Editar entrada-salida</a>
                                </li>                                

                            </ul>
                        </li>
                        <li>
                            <a href="../colaboradores/"><i class="fa fa-users fa-fw"></i> Colaboradores</a>
                        </li>
                        <li>
                            <a href="../marcas-tipoArt/"><i class="fa fa-bookmark fa-fw"></i> Marcas y/o Tipo Articulos</a>
                        </li>

                        <li>
                            <a href="../config/"><i class="fa fa-cog fa-fw"></i> Configuración del sistema</a>
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
                    <h1 class="page-header">Inventario</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <i class="fa fa-info-circle"></i> Indique criterio de busqueda en cuadro de texto ó agregue más articulos dando clic en <i class="fa fa-plus-circle"></i>  
                        </div>
                        <div class="panel-body">
                        <p align="right"><a href="#"> <i class="fa fa-plus-circle fa-4x"></i> </a></p>
                            <div class="row">
                                <form id="formInventario" class=" form-horizontal">
                                     <div class="form-group col-md-5 ">
                                        <label class="col-lg-4 control-label">Codigo</label>
                                        <div class="col-lg-8">
                                          <input type="text" class="form-control" id="codigo" name="">
                                        </div>
                                      </div>                                  
                                                                              
                                     <div class="form-group col-md-5">
                                        <label class="col-lg-4 control-label">Número de serie</label>
                                        <div class="col-lg-8">
                                          <input type="text" class="form-control" id="" name="">
                                        </div>
                                      </div>

                                     <div class="form-group col-md-5 ">
                                        <label class="col-lg-4 control-label">Tipo de articulo</label>
                                        <div class="col-lg-8">
                                          <input type="text" class="form-control" id="codigo" name="">
                                        </div>
                                      </div>                                  
                                                                              
                                     <div class="form-group col-md-5">
                                        <label class="col-lg-4 control-label">Marca</label>
                                        <div class="col-lg-8">
                                          <input type="text" class="form-control" id="" name="">
                                        </div>
                                      </div>
                                </form>

                                    <!--     <div class="form-group">
                                            <label class="col-lg-2 control-label">Email</label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" id="" name="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="col-lg-2 control-label">Email</label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" id="" name="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="col-lg-2 control-label">Email</label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" id="" name="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="col-lg-2 control-label">Email</label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" id="" name="">
                                            </div>
                                          </div>                                                                                                                                                                                                  
                                         
                                         <div>
                                           <button class="btn btn-primary span5" type="submit" id="submitform">Guardar</button>
                                           <button class="btn span5 btn-default" type="button" id="cancelAgregar">Cancelar</button>
                                        </div>       -->                                                                                                                                                                                                                                          
  
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src="../../../src/js/jquery.js"></script>
    <script src="../../../src/js/bootstrap.min.js"></script>
    <script src="../../../src/js/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="../../../src/js/sb-admin-2.js"></script>

</body>

</html>

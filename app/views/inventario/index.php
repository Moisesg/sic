<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIC | Inventario</title>
    <link href="../../../src/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../src/css/plugins/dataTables.bootstrap.css" rel="stylesheet">
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

        .success {
            color: #5cb85c;
        }

        .primary{
            color: #428bca;
        }

      .dataTables_filter {
      display: none; 
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
                           <i class="fa fa-info-circle primary"></i> Indique criterio de busqueda en cualquier de sus opciones, ó agregue más articulos dando clic en <i class="fa fa-plus-circle"></i>  
                        </div>
                        <div class="panel-body">
                            <div class=" jumbotron col-lg-11 " id="agregarEnInventario"> 
                                <form id="formInventario" class=" form-horizontal" rule="from">
                                     <div class="form-group col-lg-6 ">
                                        <label for="codigo" class="col-lg-4 control-label">Codigo</label>
                                        <div class="col-lg-8">
                                          <input type="text" class="form-control" id="codigo" name="codigo" required>
                                        </div>
                                      </div>                                  
                                                                              
                                     <div class="form-group col-lg-6">
                                        <label for="codigo" class="col-lg-4 control-label">Número de serie</label>
                                          <div class="col-lg-8">
                                            <div class="input-group">
                                              <span class="input-group-addon">
                                                N/A <input type="checkbox" id="noAplica">
                                              </span>
                                              <input type="text" class="form-control" id="numSerie" name="numSerie">
                                            </div>
                                          </div>
                                      </div>

                                     <div class="form-group col-lg-6 ">
                                        <label for="tipoArticulo" class="col-lg-4 control-label">Tipo de articulo</label>
                                        <div class="col-lg-8">
                                        <select class="form-control" id="tipoArticulo" name="tipoArticulo" required>
                                            <option value>- SELECCIONE -</option>
                                            <option value="1">- 1 -</option>

                                        </select>
                                        </div>
                                      </div>                                  
                                                                              
                                     <div class="form-group col-lg-6">
                                        <label for="marca" class="col-lg-4 control-label">Marca</label>
                                        <div class="col-lg-8">
                                        <select class="form-control" id="marca" name="marca" required>
                                            <option value=>- SELECCIONE -</option>
                                            <option value="1">- 1 -</option>

                                        </select>
                                        </div>
                                      </div>

                                     <div class="form-group col-lg-6">
                                        <label for="modelo" class="col-lg-4 control-label">Modelo</label>
                                        <div class="col-lg-8">
                                          <input type="text" class="form-control" id="modelo" name="modelo" required>
                                        </div>
                                      </div>

                                     <div class="form-group col-lg-6">
                                        <label for="especificaciones" class="col-lg-4 control-label">Especificaciones técnicas</label>
                                        <div class="col-lg-8">
                                          <textarea  class="form-control" id="especificaciones" name="especificaciones" required rows="4"></textarea> 
                                        </div>
                                      </div>                                      

                                     <div class="form-group col-lg-12 ">
                                        <div class="col-lg-offset-9">
                                              <input type="button" class="btn btn-default btn-lg" value="Cancelar" id="cancel">
                                              <input type="submit" class="btn btn-primary btn-lg " value="Guardar">
                                        </div>
                                      </div>
                                </form>                                                                                                                                                                                                                                     
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                      <li role="presentation" class="active"><a href="#porCriterio" role="tab" data-toggle="tab">Criterio</a></li>
                                      <li role="presentation"><a href="#porTipoMarca" role="tab" data-toggle="tab">Tipo Articulo</a></li>
                                      <li role="presentation"><a href="#porMarca" role="tab" data-toggle="tab">Marca</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                      <div role="tabpanel" class="tab-pane active" id="porCriterio">
                                         <div class="form-group ">
                                            <div class="col-lg-12">
                                              <input type="text" class="form-control" id="criterioGral" name="criterioGral" placeholder="Buscar..." >
                                            </div>
                                         </div>                                            
                                      </div>
                                      <div role="tabpanel" class="tab-pane" id="porTipoMarca">
                                         <div class="form-group ">
                                            <div class="col-lg-12">
                                              <select id="criterioTipoArticulo" class="form-control" name="criterioTipoArticulo">
                                              <option >- SELECCIONE -</option>
                                              
                                              </select>
                                            </div>
                                         </div>    
                                      </div>
                                      <div role="tabpanel" class="tab-pane" id="porMarca">
                                         <div class="form-group ">
                                            <div class="col-lg-12">
                                              <select id="criterioTipoArticulo" class="form-control" name="criterioMarca">
                                              <option >- SELECCIONE -</option>
                                              
                                              </select>
                                            </div>
                                         </div>   
                                      </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                  <p align="right"><a href="javascript:void(0)" id="btnAgregarEnInventario"> 
                                  <i class="fa fa-plus-circle fa-4x success" ></i> </a></p>
                                </div>
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Núm.Serie</th>
                                            <th>Tipo Articulo</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Espc.Tecnicas</th>
                                            <th>-</th>
                                            <th>-</th>

                                        </tr>
                                    </thead>
                                </table>
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
    <script src="../../../src/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../../../src/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="../../../src/js/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="../../../src/js/sb-admin-2.js"></script>
    <script>
    $('#dataTables-example').dataTable({
         stateSave: true,
        /*
        "dom": 'T<"clear">lfrtip',

        "tableTools": {
            "sSwfPath": "img/swf/copy_csv_xls.swf",
           "aButtons": [ 
                {
                    "sExtends": "print",
                    "sButtonText": "Imprimir",
                    "sInfo": "<p> <h2> Vista de impresión </h2></p> <p>Por favor, utilice la función de impresión de su navegador para imprimir esta tabla. Pulse ESC cuando haya terminado.</p>"
                },
                {
                    "sExtends": "copy",
                    "sButtonText": "Copiar"
                },
                {
                    "sExtends": "csv",
                    "sButtonText": "Excel"
                }
            ]
        },
        */
            "language": {
                "url": "../../../src/js/spanish.json"
            }
        });

     $('#noAplica').click(function(){
       $('#numSerie').attr('disabled',this.checked)
    });    

     $('#agregarEnInventario').hide(); 
        $("#btnAgregarEnInventario" ).click(function() {
            $( "#agregarEnInventario" ).fadeToggle( "fast", "linear" );
    });

        $("#cancel" ).click(function() {
            $( "#agregarEnInventario" ).fadeToggle( "fast", "linear" );
    });


    </script>
</body>

</html>

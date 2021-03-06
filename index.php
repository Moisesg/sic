<!DOCTYPE html>
<html lang="es">
<head>
    <title>SIC | Iniciar sesion</title>    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">    
    <link href="src/img/icono_SEMICv2.ico" rel="shortcut icon">    
    <link href="src/css/bootstrap.min.css" rel="stylesheet">
    <link href="src/css/sb-admin-2.css" rel="stylesheet">
    <link href="src/fonts/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">
          html,
          body {
            height: 100%;
          }

          .container{
            min-height: 100%;
            height: auto !important;
            height: 100%;
            margin: 0 auto -60px;
          }

          .fa-envelope{
            font-size: 24px;
          }
    </style>    
</head>

<body>
<div class="container">
 <div class="row">
    <h3 align="center">Sistema inventario de Computo </h3>
    <p align="center" >Iniciar sesión para  acceder al sistema</p>
    <div class="col-lg-6 col-md-offset-3">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Iniciar sesión</h3>
            </div>
            <div class="panel-body">
            <div class="col-lg-6">
                <img src="src/img/access.jpg" class="img-responsive" height="25" alt="">                
            </div>
                <form role="form">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Usuario" name="usuario" type="text" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <input type="button" class="btn btn-md btn-success" name="login" value="Login" >                    
                    </fieldset>
                </form>
            </div>
        </div>
     </div>
  </div>
</div>

 <footer>
     <div class="container">    
        <p class="pull-right"><a id="mail"  href="mailto:eduardo.neri@semicmex.com.mx" data-toggle="tooltip" title="Para poder entrar al sistema, pongase en contacto con el Administrador, mandando un e-mail aqui"> <i class="fa fa-envelope"></i> </a></p>
        <p>© Copyright <a href="http://semicmex.com.mx" target="_blank"> SEMICMEX 2014</a> </p>
    </div>
 </footer>

 <script src="src/js/jquery-1.11.0.js"></script>
 <script src="src/js/bootstrap.min.js"></script>


 <script type="text/javascript">
    $('#mail').tooltip();
 </script>

</body>

</html>

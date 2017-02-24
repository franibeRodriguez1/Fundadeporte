<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Registro - Fundadeporte</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/material-kit.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />

</head>

<body class="signup-page">
    <!-- Navbar -->
    <nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo-container">
                    <div class="brand">
                        Fundadeporte
                        <br>Carabobo
                    </div>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="navigation-index">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html" target="">
                            <i class="material-icons">dashboard</i> Index
                        </a>
                    </li>
                    <li>
                        <a href="registro.html" target="">
                            <i class="material-icons">account_box</i> Registro
                        </a>
                    </li>
                    <li>
                        <a href="http://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-freebie" target="_blank">
                            <i class="material-icons">search</i> Busqueda
                        </a>
                    </li>
                    <li>
                        <a href="login.html" target="">
                            <i class="material-icons">https</i> Log in
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div method="post" action="registro.php">
    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('img/bordes.jpg'); background-size: cover; background-position: top center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card card-signup">

                            <?php
                            extract($_GET);
                            $usuario2=@$usuario;
                            echo'<form class="form" method="post" onsubmit="return validar(this)" action="update.php?usuario='.$usuario2.'" >';
                            ?>
                                <div class="header header-primary text-center">
                        
                                    <h4>Registrate en <br><b>Fundadeporte</b></h4>
                                </div>
                                <div class="content">
                                    <i class="material-icons icon-top">account_circle</i>

                    <!--registro-->                
                                    <h1 class="dataText">Registro</h1>


                                    <div class="input-group">
                                        <span class="input-group-addon">
           <i class="material-icons">account_box</i>
          </span>
                                        <input type="text" class="form-control" placeholder="Nombre"id="nombre" name="nombre">
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
           <i class="material-icons">contact_mail</i>
          </span>
                                        <input type="text" placeholder="Correo" class="form-control" id="correo" name="correo" />
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
           <i class="material-icons">call</i>
          </span>
                                        <input type="text" placeholder="Telefono" class="form-control" id="telefono" name="telefono"  />
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
           <i class="material-icons">account_box</i>
          </span>
                                        <input type="text" placeholder="Usuario" class="form-control" id="usuario" name="usuario" disabled />
                                    </div>


                                    <div class="input-group">
                                        <span class="input-group-addon">
           <i class="material-icons">lock_outline</i>
          </span>
                                        <input type="password" placeholder="Contraseña" class="form-control" id="contrasena" name="contrasena" />
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
           <i class="material-icons">pool</i>
          </span>
                                        <input type="text" placeholder="Deporte" class="form-control" id="deporte" name="deporte"  />
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
           <i class="material-icons">supervisor_account</i>
          </span>
                                        <input type="text" placeholder="Entrenador" class="form-control" id="entrenador" name="entrenador"/>
                                    </div>




                                    <!-- If you want to add a checkbox to this form, uncomment this code

         <div class="checkbox">
          <label>
           <input type="checkbox" name="optionsCheckboxes" checked>
           Subscribe to newsletter
          </label>
         </div> -->
                                </div>
                                <div class="footer text-center">
                                <div method="post" action="registro.php">
                                <input href="#pablo" class="btn btn-simple btn-primary btn-lg" type="submit" value="REGISTRARME" />
                                   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="http://presentation.creative-tim.com">
						  Inicio
						</a>
                            </li>
                            <li>
                                <a href="registro.html">
						   Registro
						</a>
                            </li>
                            <li>
                                <a href="http://www.creative-tim.com/license">
							Busqueda
						</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        Creado por: Franibe Rodriguez
                    </div>
                </div>
            </footer>

        </div>

    </div>


</body>
<!--   Core JS Files   -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="js/material-kit.js" type="text/javascript"></script>

</html>
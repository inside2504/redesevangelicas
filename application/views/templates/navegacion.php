<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Redes evang&eacute;licas</title>
	
	<!-- core CSS -->
    <link href="<?=base_url('')."assets/css/bootstrap.min.css"?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="<?=base_url('')."assets/css/font-awesome.min.css"?>" rel="stylesheet">
    <link href="<?=base_url('')."assets/css/animate.min.css"?>" rel="stylesheet">
    <link href="<?=base_url('')."assets/css/prettyPhoto.css"?>" rel="stylesheet">
    <link href="<?=base_url('')."assets/css/main.css"?>" rel="stylesheet">
    <link href="<?=base_url('')."assets/css/responsive.css"?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="https://www.facebook.com/RedesEvangelicas1"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="<?php echo site_url('auth/login')?>"><span class="glyphicon glyphicon-log-in"></span></a></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('#')?>"><img src="<?=base_url('')."assets/img/logo.png"?>" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo site_url('#')?>">Inicio</a></li>
                        <li><a href="<?php echo site_url('nosotrosview')?>">Nosotros</a></li>
                        <li><a href="<?php echo site_url('iglesiasview')?>">Iglesias</a></li>
                        <li><a href="<?php echo site_url('empresasview')?>">Empresas</a></li>
                        <li><a href="<?php echo site_url('serviciosview')?>">Servicios</a></li>
                        <li><a href="<?php echo site_url('taxiview')?>">Taxi</a></li>
                        <li><a href="<?php echo site_url('regionesview')?>">Regiones</a></li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo site_url('kidsview')?>">Kids</a></li>
                        <li><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('radioview')?>">Radio</a></li>
                        <li><a href="<?php echo site_url('materialesview')?>">Materiales</a></li>
                        <li><a href="<?php echo site_url('libreriaview')?>">Librer&iacute;a</a></li>
                        <li><a href="<?php echo site_url('tianguisview')?>">Tianguis</a></li>
                        <li><a href="<?php echo site_url('bolsaview')?>">Bolsa de trabajo</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Eventos <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo site_url('eventosview')?>">Por calendario</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('eventosview/anuncio')?>">Por lista</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!--/.container-->

            <hr>
                <div class="container">
                    <div id="local">
                        <div class="row">
                            <div class="col-md-5">
                                <h4>La regi&oacute;n seleccionada es: <?php echo $_COOKIE['localidad'] ?></h4>
                                <h4>La opci&oacute;n por defecto es Xalapa</h4>
                            </div>
                            <form action="<?php echo base_url('/index/setLocalidad');?>" method="POST" >
                                <fieldset>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">Localidad</span>
                                            <select type="text" id="localidad" name="localidad" class="form-control">
                                                <option value="Xalapa" selected="">Xalapa</option>
                                                <option calue="Misantla">Misantla</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="">
                                            <button type="submit" class=" btn btn-success">Buscar</button>
                                        </div>
                                    </div>
                                </fieldset>
                        </form>
                    </div>
                </div>
            <hr>
        </nav><!--/nav-->
    </header><!--/header-->
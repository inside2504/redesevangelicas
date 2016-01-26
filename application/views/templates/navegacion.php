<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Redes evang&eacute;licas</title>
		<meta http-equiv="Content-Type" content="text/html; charset = utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="icon" href="<?=base_url('')."assets/img/16x10.png"?>" type="image/x-icon"/>
		<link rel="stylesheet" href="<?=base_url('')."assets/css/bootstrap.css"?>">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="<?=base_url('')."assets/js/header.js"?>"></script>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,700italic' rel='stylesheet' type='text/css'>
		</head>
	<body class="page">
		<header>
			<div class="banner">
				<section>
					<img class="logo" src="<?=base_url('')."assets/img/200x125.png"?>" alt="redes">
				</section>
			</div>
			<div>
				<nav class=" navbar-inverse navbar-fixed-top" role="navigation">
				<!--Configuracion para dispositivos moviles--> 
				<section class="navbar-collapse">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Desplegar Men&uacute;</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</section>
				<!--Agrupacion de elementos para ocultarlos al minimizar la barra-->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li >
							<a href="<?php echo site_url('#')?>">Inicio</a>
						</li>		
						<li>
							<a href="<?php echo site_url('nosotros')?>" >Nosotros<b></b></a>
						</li>
						<li>
							<a href="<?php echo site_url('iglesias')?>" >Iglesias<b></b></a>
						</li>
						<li>
							<a href="<?php echo site_url('servicios')?>" >Servicios<b></b></a>
						</li>
						<li>
							<a href="<?php echo site_url('empresas')?>">Empresas</a>
						</li>
						<li>
							<a href="<?php echo site_url('materiales')?>">Materiales</a>
						</li>
						<li>
							<a href="<?php echo site_url('eventos')?>">Eventos</a>
						</li>
						<li>
							<a href="<?php echo site_url('tianguis')?>">Tianguis</a>
						</li>
						<li>
							<a href="<?php echo site_url('/auth/login')?>" > Ingresar</a>
						</li>
					</ul>
					<!--Barra de busqueda-->			
				</div>
				</nav>
			</div>
		</header>

<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Redes evang&eacute;licas</title>
		<meta http-equiv="Content-Type" content="text/html; charset = utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?=base_url('')."assets/css/bootstrap.css"?>">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,700italic' rel='stylesheet' type='text/css'>
		</head>
	<body class="page">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!--Configuracion para dispositivos moviles--> 
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Desplegar Men&uacute;</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo site_url('home')?>"><p class="cent">Redes evang&eacute;licas</p></a>
			</div>
			<!--Agrupacion de elementos para ocultarlos al minimizar la barra-->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="<?php echo site_url('home')?>">Inicio</a>
					</li>		
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
						<ul class="dropdown-menu multi-level">
							<li class="dropdown-submenu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
								<ul class="dropdown-menu">
									<li>
										<a href="<?php echo site_url('revistas')?>">Ver revistas</a>
									</li>
									<li>
										<a href="<?php echo site_url('crearevista')?>">Crear revista</a>
									</li>
									<li>
										<a href="<?php echo site_url('consultarevista')?>">Modificar revistas</a>
									</li>
								</ul>
							</li>
							<li class="dropdown-submenu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Libros</a>
								<ul class="dropdown-menu">
									<li>
										<a href="<?php echo site_url('libros')?>">Ver libros</a>
									</li>
									<li>
										<a href="<?php echo site_url('crearlibro')?>">Crear libro</a>
									</li>
									<li>
										<a href="<?php echo site_url('consultalibros/consulta')?>">Modificar libros</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="http://revistas.uv.mx/index.php/letrasjuridicas/" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" title="Cat&aacute;logos">Cat&aacute;logos UV</a>
							</li>					
						</ul>
					</li>
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Lineamientos<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url('lineamientos')?>">Editoriales</a></li>
							<li><a href="<?php echo site_url('reglamentacion')?>">Para autores</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Contacto<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url('contacto')?>">Letras Jur&iacute;dicas</a></li>
							<li><a href="http://www.uv.mx/cedegs/" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" title="CEDEGS">CEDEGS</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo site_url('auth/index')?>">Panel de Administracion</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="<?php echo site_url('/auth/logout')?>" > Salir</a>
					</li>
				</ul>
			</div>
		</nav>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css""> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css""> 
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button> <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/main/index">Crud CodeIgniter</a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url(); ?>index.php/main/index">Usuarios</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/main/registro">Registro</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/main/actualizar">Actualizar</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/main/login">Ingresar</a></li>
    </ul>
    
  </div>
</nav>

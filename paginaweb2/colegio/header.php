<!--
Author: W3layouts 
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Tupac Amaru</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   <!-- Bootstrap Core CSS -->
  <link href="<?php echo RUTA ?>public/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
  <!-- Custom CSS -->
  <link href="<?php echo RUTA ?>public/css/style.css" rel='stylesheet' type='text/css' />

  <!-- Graph CSS -->
  <link href="<?php echo RUTA ?>public/css/lines.css" rel='stylesheet' type='text/css' />
  <link href="<?php echo RUTA ?>public/css/font-awesome.css" rel="stylesheet">

  <!-- jQuery -->
  <script src="<?php echo RUTA ?>public/js/jquery.min.js"></script>

   <!--  <script src="<?php  ?>public/js/main.js"></script> -->

  <link href="<?php echo RUTA ?>public/css/custom.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?php echo RUTA ?>public/css/jquery.dataTables.min.css">
  <!-- Metis Menu Plugin JavaScript -->

  <script src="<?php echo RUTA ?>public/js/bootstrap.min.js"></script>
  <!--script src="<?php echo RUTA ?>public/js/metisMenu.min.js"></script-->
  <script src="<?php echo RUTA ?>public/js/acordeon.js"></script>

  <style>
    .nav li.open .link{
      color: #000;
    }

    .search {     
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      background-color: white;
      background-image: url('http://localhost/colegio/searchicon.png') !important;
      background-position: 9px 7px !important; 
      background-repeat: no-repeat !important;
      padding: 12px 20px 12px 40px;
      -webkit-transition: width 0.4s ease-in-out;
      transition: width 0.4s ease-in-out;
    }

    .btnpag {
      display: inline-block;
      padding: 6px 12px;
      margin-bottom: 0;
      font-size: 14px;
      font-weight: 400;
      line-height: 1.42857143;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-color: white;
      background-image: none;
      border: 1px solid;
      border-color: silver;
      border-radius: 4px;
      text-decoration: none;
    }


  </style>

  <script type="text/javascript">
   
  </script>
</head>

<body>
<div id="wrapper" >
     <!-- Navigation -->
      <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;border-bottom: 0;position:fixed;width: 100%;">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <div style="margin-left: 50%">
                <img src="<?php echo RUTA ?>/public/images/logo.png" alt="" style="height: 50px">
              </div>

              <a class="navbar-brand" href="index.html" style="padding: 0">I.E Nº 0004 Tupac Amaru</a>
              
          </div>
            <!-- /.navbar-header -->
          <ul class="nav navbar-nav navbar-right" >
				
	        	<li><a href="<?php echo RUTA  ?>admin/mensaje" aria-expanded="false"><i class="fa fa-envelope" style="color: #EEC21E ;font-size: 24px;"></i><span class="badge" style="left: 27px;width: 20px;" ><?php echo $cantidad_mensajes[0] ?></span></a></li>
              
            <li class="dropdown">

              <a  class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i  class="fa fa-bell" style="color: #EEC21E;font-size: 24px;"></i><span class="badge" style="width: 20px">10</span></a>

  	        	  <ul class="dropdown-menu">
      						<li class="dropdown-menu-header" style="line-height: 20px;">
      							<strong>10 Notificaciones</strong>
      						</li>
      						<li class="m_2">
      							<a href="#">      						
      								<div>°Se venció contrato del docente 
                      Alfonso Tobar Gomez</div>  
      							</a>
      						</li>
      						<li class="m_2">
      							<a href="#">
      								<div>°Actualizar contrato del docente Juan Perez Garcia</div>
      							</a>
  						    </li>
  					
  	        		</ul>
	      		</li>

  			    <li class="dropdown">
  	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown" ><img src="<?php echo RUTA ?>public/images/DIRECTOR.png"><span class="user-info"><small>Segundo Isaias Tananta Tenazoa</small></span></a>

  	        		<ul class="dropdown-menu">					
        						<li class="m_2"><a href="#"><i class="fa fa-cog" style="color: #000"></i>Configuracion</a></li>
        						<li class="m_2"><a href="<?php echo RUTA ?>salir.php"><i class="fa fa-sign-out" style="color:#000"></i>Salir</a></li>	
  	        		</ul>
  	      	</li>
			    </ul>

          <div class="navbar-default sidebar" role="navigation" style="position: fixed;min-height: 1024px">
                <div class="sidebar-nav navbar-collapse" style="margin-top: 0">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo RUTA ?>admin"><i class="fa fa-home nav_icon"></i>Inicio</a>
                        </li>

                        <li class="submenu" id="administracion" >
                            <a href="#" class="link" onclick="click_submenu(this)"><i class="fa fa-cog nav_icon"></i>Administración<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level submenu">
                                <li id="usuarios">
                                    <a href="<?php echo RUTA  ?>admin/usuarios">Usuarios</a>
                                </li>
                                <li id="perfiles">
                                     <a href="<?php echo RUTA  ?>admin/perfiles"">Perfiles</a>
                                </li>
                                <li id="restricciones">
                                    <a href="<?php echo RUTA  ?>admin/restricciones"">Restricciones</a>
                                </li>
                                <li id="categorias">
                                    <a href="<?php echo RUTA  ?>admin/categorias">Categorías</a>
                                </li>
                                <li id="tipos_personal">
                                    <a href="<?php echo RUTA  ?>admin/tipos_personal"">Tipos Personal</a>
                                </li>
                                <li id="especialidades">
                                    <a href="<?php echo RUTA  ?>admin/especialidades">Especialidades</a>
                                </li>                                  
                                <li id="niveles_de_estudio">
                                    <a href="<?php echo RUTA  ?>admin/niveles_de_estudio">Niveles de Estudio</a>
                                </li>
                                  <li id="grados">
                                     <a href="<?php echo RUTA  ?>admin/grados">Grados</a>
                                </li>
                                  <li id="secciones">
                                     <a href="<?php echo RUTA  ?>admin/secciones">Secciones</a>
                                </li>
                                  <li id="turnos">
                                    <a href="<?php echo RUTA  ?>admin/turnos">Turnos</a>
                                </li>
                                  <li id="tipos_aula">
                                    <a href="<?php echo RUTA  ?>admin/tipos_aula"">Tipos Aula</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li class="submenu" id="anios_academico" >
                            <a href="#" class="link" onclick="click_submenu(this)"><i class="fa fa-desktop nav_icon"></i>Aperturar Año Académico<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level submenu">
                                <li id="anio_academico">
                                    <a href="<?php echo RUTA  ?>admin/anios_academico">Año Académico</a>
                                </li> 
                                <li id="personales">
                                   <a href="<?php echo RUTA  ?>admin/personales">Personal</a>
                                </li>
                                <li id="vigencias">
                                    <a href="<?php echo RUTA  ?>admin/vigencias">Vigencias</a>
                                </li>
                                <li id="aulas">
                                    <a href="<?php echo RUTA  ?>admin/aulas">Aulas</a>
                                </li>
                                <li id="cursos">
                                    <a href="<?php echo RUTA  ?>admin/cursos">Cursos</a>
                                </li>
                               
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li class="submenu"  id="Gestionar_horarios">
                            <a href="#" class="link" onclick="click_submenu(this)"><i class="fa fa-calendar nav_icon"></i>Gestionar Horarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level submenu">
                                <li id="cursos_grado">
                                    <a href="<?php echo RUTA  ?>admin/cursos_grado">Cursos Segun Grado</a>
                                </li>
                                <li id="carga_academica">
                                    <a href="<?php echo RUTA  ?>admin/carga_academica">Cargas Académica</a>
                                </li>
                                <li>
                                    <a href="">Horarios</a>
                                </li>
                                                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li class="submenu" id="Reportes" >
                            <a href="#" class="link" onclick="click_submenu(this)"><i class="fa fa-file nav_icon" aria-hidden="true"></i>Reportes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level submenu">
                                <li id="porpersonales">
                                    <a href="<?php echo RUTA  ?>admin/porpersonales">Por personales</a>
                                </li>
                                <li>
                                    <a href="<?php echo RUTA  ?>admin/porhorarios">Por Horarios</a>
                                </li>
                                <li>
                                    <a href="<?php echo RUTA  ?>admin/porcursos">Por Categorias</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
          </div>
            <!-- /.navbar-static-side -->
      </nav>
</div>


<!----cuerpo-- -->
<!----/cuerpo-- -->
  
<!----footer-- -->
<!----/footer-- -->
 




  
      
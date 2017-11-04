


<!--
Author: W3layouts 
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php require 'config/config.php' ?>
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

<link rel="stylesheet" href="<?php echo RUTA ?>public/js/dataTables.bootstrap.css" />
<!-- Graph CSS -->
<link href="<?php echo RUTA ?>public/css/lines.css" rel='stylesheet' type='text/css' />
<link href="<?php echo RUTA ?>public/css/font-awesome.css" rel="stylesheet">

<!-- jQuery -->
<script src="<?php echo RUTA ?>public/js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="<?php echo RUTA ?>public/css/custom.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo RUTA ?>public/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo RUTA ?>public/css/buttons.dataTables.min.css">
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo RUTA ?>public/js/metisMenu.min.js"></script>
<!-- Graph JavaScript -->
<script src="<?php echo RUTA ?>public/js/acordeon.js"></script>
<style>
  .nav li.open .link{
    color: #123588;
  }
</style>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;border-bottom: 0">
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
            <ul class="nav navbar-nav navbar-right">
				
	        		<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope" style="color: #EEC21E ;font-size: 24px;"></i><span class="badge" style="left: 27px;width: 20px;" ><?php echo $cantidad_mensaje[0] ?></span></a></li>


                <li class="dropdown">

              <a href="#"  class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i  class="fa fa-bell" style="color: #EEC21E;font-size: 24px;"></i><span class="badge" style="width: 20px">10</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
							<strong>10 Notificaciones</strong>
							<div class="progress thin">
							  <div class="progress-bar progress-bar-success" >
							    <!-- <span class="sr-only">40% Complete (success)</span> -->
							  </div>
							</div>
						</li>
						<li class="avatar">
							<a href="#">
						
								<div>°Se venció contrato del docente 
                Alfonso Tobar Gomez</div>
								
							
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								
								<div>°Actualizar contrato del docente Juan Perez Garcia</div>
					
							</a>
						</li>
						
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="<?php echo RUTA ?>public/images/DIRECTOR.png"><span class="user-info">
                  <small><?php echo $_SESSION['nombre']." ".$_SESSION['apellido'] ?></small>
                                </span></a>
	        		<ul class="dropdown-menu">
					
						<li class="m_2"><a href="#"><i class="fa fa-cog" style="color: #000"></i>Configuracion</a></li>
						<li class="m_2"><a href="<?php echo RUTA ?>cerrar.php"><i class="fa fa-sign-out" style="color:#000"></i>Salir</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<form class="navbar-form navbar-right">
              
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse" style="margin-top: 0">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo RUTA ?>admin"><i class="fa fa-home nav_icon"></i>Inicio</a>
                        </li>
                         <li>
                            <a href="#" class="link"><i class="fa fa-cog nav_icon"></i>Administración<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level submenu">
                                <li class="principal">
                                    <a href="">Usuarios</a>
                                </li>
                                <li>
                                    <a href="">Perfiles</a>
                                </li>
                                <li>
                                    <a href="">Restriciones</a>
                                </li>
                                <li>
                                    <a href="">Categorias</a>
                                </li>
                                <li>
                                    <a href="">Tipos Personal</a>
                                </li>
                                <li>
                                    <a href="">Especialidades</a>
                                </li>
                                  
                                <li>
                                    <a href="">Niveles de Estudio</a>
                                </li>
                                  <li>
                                    <a href="">Grados</a>
                                </li>
                                  <li>
                                    <a href="">Secciones</a>
                                </li>
                                  <li>
                                    <a href="">Turnos</a>
                                </li>
                                  <li>
                                    <a href="">Tipos Aula</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#" class="link"><i class="fa fa-desktop nav_icon"></i>Aperturar Año Académico<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level submenu">
                                <li class="principal">
                                    <a href="">Año Académico</a>
                                </li> 
                                <li>
                                    <a href="">Personales</a>
                                </li>
                                <li>
                                    <a href="">Vigencias</a>
                                </li>
                                <li>
                                    <a href="">Aulas</a>
                                </li>
                                <li>
                                    <a href="">Cursos</a>
                                </li>
                               
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#" class="link"><i class="fa fa-calendar nav_icon"></i>Gestionar Horarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level submenu">
                                <li class="principal">
                                    <a href="">Cursos Segun Grado</a>
                                </li>
                                <li>
                                    <a href="">Cargas Académica</a>
                                </li>
                                <li>
                                    <a href="">Horarios</a>
                                </li>
                                                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class="li-ultimo">
                            <a href="#" class="link"><i class="fa fa-file nav_icon" aria-hidden="true"></i>Reportes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level submenu">
                                <li class="principal">
                                    <a href="">Por personales</a>
                                </li>
                                <li>
                                    <a href="">Por Horarios</a>
                                </li>
                                <li>
                                    <a href="">Por Categorias</a>
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

        <div id="page-wrapper" style="border-left: 0;padding-bottom: 190px">

          <div class="mensaje">

            <p>Mensajería</p>
            



          </div>
          <table class="table table-hover">
 
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Veinte docentes nuevos registrados </td>
    
     
   
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ocho cursos nuevos registrados </td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
    <td>Dos aulas recientemente fueron eliminas</td>
    
    </tr>
    <tr>
      <th scope="row">4</th>
        <td>Cuatro docentes recientemente fueron eliminados</td>
 
    </tr>

     <tr>
      <th scope="row">5</th>
       
      <td>Once aulas nuevas registradas</td>

    </tr>

    <tr>
      <th scope="row">6</th>
       
    
      <td>Diez especialidades nuevas registradas</td>
     
    </tr>








  </tbody>
</table>
            
          </div>
       </div>
  </div>
    <script src="<?php echo RUTA ?>public/js/bootstrap.min.js"></script>
</body>
</html>
      
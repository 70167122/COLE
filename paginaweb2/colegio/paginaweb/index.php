<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TUPAC | INICIO</title>
  <link rel="stylesheet" href="bootstrap/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="font/css/font-awesome.css">
  <link rel="stylesheet" href="css/header.css">
</head>
<body>
  <header>
    <section class="navegacion">

      <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header insignia">
            <button type="button" id="botoncito" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand" style="display: block;width: 100%;margin-left: 50px;padding-bottom: 2px"><img src="../public/images/logo.png"></a>
            <span style="margin-left: 20px;margin-bottom: 5px">I.E Nº 0004 Túpac Amaru</span>
            
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul id="lista" class="nav navbar-nav">
                <li class="pagina"><a href="index.php">Inicio</a></li>
                <li class="pagina"><a href="conocenos.php">Conócenos</a></li>
                <li class="pagina"><a href="contactenos.php">Contáctenos</a></li> 
            </ul>
            
              <a href="https://www.facebook.com/ieta0004.tarapoto/" target="_blank"><img src="imagenes/face.png" id="face" alt=""></a>
            
            <ul class="nav navbar-nav navbar-right" id="session">

                <li id="iniciar"><a href="../ingresar.php" class="btn" id="boton">Iniciar Sesión</a></li>
            </ul>
        </div>
      </nav>

    </section>
   
<div class="container" id="galeria">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" id="inner">
        <div class="item active">
          <img src="imagenes/bebes.jpg" class="im" id="foto1" alt="Los Angeles">
        </div>

        <div class="item">
          <img src="imagenes/fencyt.jpg" class="im" id="foto2" alt="Chicago">
        </div>
      
        <div class="item">
          <img src="imagenes/brigadier.jpg" class="im" id="foto3" alt="New york">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
  </header>
    
    <div class="contenido" >
        <div class="row" id="content-cuadros">
            <div class="col-md-3 col-sm-6 pro">
                <div class="cuadros">
                    <h3> Visión </h3>
                    
                    <p class="vision">La Institución Educativa N° 0004 “Túpac Amaru”; al año 2021, aspira ser una Institución Educativa
                        líder en formación humanista en mente sana en cuerpo sano, en la Provincia de San Martín. </p>
                    
                    
            </div>
            </div>
            
            <div class="col-md-3 col-sm-6 pro">
            <div class="cuadros">
                   <h3> Misión </h3>
               <p class="mision">Somos una Institución Educativa integrada (inicial, primaria, secundaria) que brinda servicio educativo integral 
                   y de calidad, que permita a los estudiantes desarrollar sus potencialidades, con una actitud emprendedora, para 
                   hacerlos capaces de mejorar su entorno familiar y social.</p>  
            </div>
            </div>
            
            <div class="col-md-3 col-sm-6 pro">
            <div class="cuadros">
               <h3> Valores </h3>
               <ul class="contenido-valores">
                <li>Solidaridad</li>
                <li>Respeto</li>
                <li>Honradez</li>
                <li>Perseverancia</li>
                        <li>Identidad</li>
                        <li>Responsabilidad</li>
              </ul>
            </div>
            </div>
            
            <div class="col-md-3 col-sm-6 pro">
            <div class="cuadros">
               <h3> Apertura de Año Académico </h3>
               <p class="apertura">El inicio de clases iniciará el 06 de marzo de y terminará el 15 
                  de diciembre.</p> 
            </div>
         </div>
        </div>
    
    </div>
    <script src="../public/js/jquery.min.js"></script>
    <script src="bootstrap/bootstrap/dist/js/bootstrap.js"></script>

    <script>
      $("#botoncito").click(function(){
        $("#galeria").animate({
          'marginTop' : "+=190px"
        });


      });
    </script>
</body>
</html>
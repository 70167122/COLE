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
            <div class="col-md-3" >
                <div class="cuadros">
                    <h3> Ubicación </h3>
                    
                    <span>Jr: America Cuadra 3</span>
                    
                    <div class="mapa">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1401.3456128635428!2d-76.37591242197898!3d-6.491288431662484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ba0be9590d2645%3A0x76af04078385875e!2sJr.+Am%C3%A9rica%2C+Tarapoto!5e0!3m2!1ses!2spe!4v1509420354526" width="270" height="170" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    
                </div>
            </div>
            
            <div class="col-md-3">
              <div class="cuadros">
                     <h3> Teléfonos </h3>
                 <ul class="contenido-telefono">
                  <li><i class="fa fa-mobile" aria-hidden="true"></i> 943474676</li>
                  <li><i class="fa fa-phone" aria-hidden="true" style="font-size:40px"></i> 042 526550</li>
                </ul>  
              </div>
            </div>

                     
            <div class="col-md-5 formulario">
              <form id="form-mensaje" action="../admin/mensaje/guardar.php" method="post">

                  <div class="cuadros">
                    <div class="col-md-3 labeles">
                        <label>Nombre:</label>
                        <label>Correo:</label>
                        <label>Teléfono:</label>
                        <label>Nombre del Alumno:</label>
                        <label>Dirección:</label>
                    </div>
                    <div class="col-md-4 inputes">
                        <input class="msj-input" name="nombre" type="text">
                        <input class="msj-input" name="correo" type="text">
                        <input class="msj-input" name="telefono" type="text">
                        <input class="msj-input" name="alumno" type="text">
                        <input class="msj-input" name="direccion" type="text">
                    </div>
                    <div class="col-md-5">                      
                      <textarea rows="5" cols="20" class="textarea msj-input" name="mensaje" placeholder="escribir un mensaje"></textarea>
                      <div class="text-center" style="margin-top: 5%">
                         <button onclick="enviarmsj();" class="btn btn-success" type="button">ENVIAR</button>
                      </div>
                    </div>
                  </div>

              </form>

            </div>

            <div class="col-md-5 formulario-cell">
              <form id="form-mensaje" action="../admin/mensaje/guardar.php" method="post">

                  <div class="cuadros">
                    <label for="">Nombre</label>
                    <input type="text" class="msj-input" name="nombre">
                    <label for="">Correo</label>
                    <input type="text" class="msj-input" name="correo">
                    <label for="">Telefono</label>
                    <input type="text" class="msj-input" name="telefono">
                    <label for="">Alumno</label>
                    <input type="text" class="msj-input" name="alumno">
                    <label for="">Dirección</label>
                    <input type="text" class="msj-input" name="direccion">
                    <textarea rows="2" cols="31" class="textarea msj-input" name="mensaje" placeholder="escribir un mensaje"></textarea>
                      <div class="text-center" style="margin-top: 5%">
                         <button onclick="enviarmsj();" class="btn btn-success" type="button">ENVIAR</button>
                      </div>
                  </div>

              </form>
            </div>
            
            
        </div>
    
    </div>
    <script src="../public/js/jquery.min.js"></script>
    <script src="bootstrap/bootstrap/dist/js/bootstrap.js"></script>
    <script src="js/carrusel.js"></script>
</body>
</html>
<script type="text/javascript">
  function  enviarmsj(){
      val=true;

      $( ".msj-input" ).each(function( index ) {
        if($( this ).val()==''){
          $( this ).css( "background", "#F5DEB3" );
          val=false;
        }else{
          $( this ).css( "background", "" );
        }
      });

      if(val){
        frm=$('#form-mensaje');
        $.ajax({
          url:frm.attr('action'),
          type:'POST',
          data: frm.serialize(),
          success: function () {
            $( ".msj-input" ).each(function( index ) {
              $( this ).val('');
            });
            alert('ENVIADO');
          }
        });
      }

    }
  
</script>

<script>
      $("#botoncito").click(function(){
        $("#galeria").animate({
          'marginTop' : "+=190px"
        });


      });
    </script>


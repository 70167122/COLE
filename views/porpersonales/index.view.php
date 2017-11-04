
<div id="page-wrapper" style="border-left: 0; min-height: 700px;padding: 82px 0px 10px 0px"> 
      <div class="col-md-12 graphs">
      <div class="xs" style="text-align: center;">
         <h2>Reportes de Personales</h2>

        <div class="bs-example4" data-example-id="contextual-table">
          
        <div class="panel-body no-padding" style="display: block;">

  <div class="row">
      <div class="col-md-6" > 
        <span>Buscar por fecha: </span>
        <input type="date" name="fecha" id="fecha">
      </div>
      <div class="col-md-6" > 
        <a href="javascript:imprSelec('principal')" class="btn btn-primary" style="position: absolute;right: 20px">IMPRIMIR</a>
      </div>

  </div> 
  
  
  <br>  

  
 <div id="principal">
    <h2 style="text-align: center;color: white" id="repo">REPORTE POR PERSONAL</h2>
    <table class="table table-bordered table-striped" id="example">  

    <thead class="thead-inverse" style="background-color: #548F81"> 
      <tr>
          <th>N°</th>
          <th>Nombre</th>
          <th>Telefono</th>
          <th>correo</th>
          <th>Fecha Registro</th>
      </tr>
    </thead>

                      
    <tbody>
       <?php foreach ($personales as $key => $value): ?>

        <tr>
          <td><?php echo $key + 1 ?></td>
          <td><?php echo $value['nombre']." ".$value['apellido'] ?></td>
          <td><?php echo $value['telefono'] ?></td>
          <td><?php echo $value['correo_electronico'] ?></td>
          <td><?php echo $value['created_at'] ?></td>
        </tr>


       <?php endforeach; ?>
                                  

    </tbody>

  </table>
   
 </div>

 <div id="ajax-table">
   
 </div>



          </div>
          </div>
  <!-- /.table-responsive -->
      </div>
      </div>
</div>

<!-- Metis Menu Plugin JavaScript -->


<footer>

    <script src="<?php echo RUTA ?>public/js/main.js"></script> 
    <script src="<?php echo RUTA ?>public/js/jquery.dataTables.js"></script>


</footer>


<script>
  $("#fecha").change(function(){
    $("#principal").hide();
    fecha = {fecha : $("#fecha").val()};
    ruta = "<?php echo RUTA ?>ajax/personales.php";
    $.ajax({
      data : fecha,
      url : ruta,
      type : 'post',
      success : function(response){
        $("#ajax-table").html(response);
      }
    });
  });
</script>

<script>
  function imprSelec(nombre) {
        var ficha = document.getElementById(nombre);
        var ventimp = window.open(' ', 'popimpr');
        ventimp.document.write( ficha.innerHTML );
        ventimp.document.close();
        ventimp.print( );
        ventimp.close();
    }
</script>


</body>

</html>


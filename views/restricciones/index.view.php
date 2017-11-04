<div id="page-wrapper" style="border-left: 0; min-height: 700px;padding: 82px 0px 10px 0px"> 
      <div class="col-md-12 graphs">
      <div class="xs" style="text-align: center;">
         <h1>Asignar Restricciones</h1>

        <div class="bs-example4" data-example-id="contextual-table">
          
        <div class="panel-body no-padding" style="display: block;">

  
      <div class="container">
        <?php foreach ($perfiles as $key => $value): ?>
          <div class="col-md-4">
            <label class="radio-inline">
              <input type="radio" class="per" id="<?php echo $value['id'] ?>" name="optradio"><?php echo $value['descripcionp'] ?>
            </label>
          </div>
        <?php endforeach; ?>
      </div>
      

  <br>  

  
 <div id="permisos-perfil">
   
 </div>
<!--
  <div style="float: left">
    <?php 
      $pagination->pages("btnpag");
    ?>
  </div>-->


          </div>
          </div>
  <!-- /.table-responsive -->
      </div>
      </div>
</div>

<!-- Metis Menu Plugin JavaScript -->


<footer>


    <script>
      $(document).ready(function() {
    
        $('#guardar_nuevo').on( "click", function() {
          $('#Modal-registrar').modal('hide');
          $('#Modal-Confirmar').find(".modal-body").html('AGREGADO CORRECTAMENTE');
          $('#Modal-Confirmar').modal('show');

          setTimeout(function(){
            $('#form-nuevo').submit();
            }, 1700);
        }); 

        $('.aceptar_eliminacion').on( "click", function() {
          $('.modal-eliminar').modal('hide');
          $('#Modal-Confirmar').find(".modal-body").html('ELIMINADO CORRECTAMENTE');
          $('#Modal-Confirmar').modal('show');
          var item =$(this).attr('item');
          setTimeout(function(){
            $('#form-eliminar'+item).submit();
            }, 1700);
        });

        setTimeout(function(){
          var padre="Seguridad";
          var hijo="restricciones";
          $('#'+padre).addClass('active');
          $('#'+padre).find('ul').css( "display", "block" );
          $('#'+hijo).addClass('principal');
            }, 100);

        //para ver los permisos de cada perfil
        $(".per").click(function(){
          id = $(this).attr('id');
          datos = {id : id};
          ruta = '<?php echo RUTA ?>ajax/module_perfil.php';
          $.ajax({
            data : datos,
            url : ruta,
            type : 'post',
            success : function(response){
              $("#permisos-perfil").html(response);
            }
          });
        });
  

      });
    </script>
    <script src="<?php echo RUTA ?>public/js/main.js"></script> 
    <script src="<?php echo RUTA ?>public/js/jquery.dataTables.js"></script>

    <div id="Modal-registrar" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrar Restricción</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form id="form-nuevo" action="<?php echo RUTA ?>admin/restricciones/guardar.php" method="post">

              <div class="form-group">
                <label >Descripción</label>
                <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" name="descripcion" ng-model="model.name" onkeypress="return soloLetras(event)">
              </div>
                 
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button id="guardar_nuevo" type="button" class="btn btn-primary">Guardar</button>
              </div>

            </form>
          </div>

        </div>
      </div>
    </div>

    <div id="Modal-Confirmar" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 75%;top: 130px;left: 27%;border-radius: 0px !important">


          <div class="modal-body" style=" margin-top: 35%;padding: 10% 20%;">
              ---
          </div>

        </div>
      </div>
    </div>

</footer>


</body>

</html>


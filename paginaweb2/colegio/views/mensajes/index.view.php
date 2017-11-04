<div id="page-wrapper" style="border-left: 0; min-height: 700px;padding: 82px 0px 10px 0px"> 
      <div class="col-md-12 graphs">
      <div class="xs" style="text-align: center;">
         <h2>Mensajes</h2>

        <div class="bs-example4" data-example-id="contextual-table">
          
        <div class="panel-body no-padding" style="display: block;">

<?php $i=1; ?>

    <?php foreach ($mensaje as $key => $value){?>
      <div class=" col-md-1" style="margin-bottom: 1%">
        <!--h2>0</h2-->
        <div class="col-md-offset-4" style="border: 1px solid #000;margin-bottom: 5%" > 0<?php echo $i++ ?></div>
        <div class="col-md-offset-4" style="margin-bottom: 1%" >
          <a onclick="msj_visto('<?php echo $value['id'] ?>')" class="btn btn-info btn-xs" aria-expanded="false"><i class="fa fa-eye" style="font-size: 20px;"></i></a>

         </div>

      </div>
      <div class=" col-md-5" style="border: 1px solid #000;margin-bottom: 1%">
        <form id="<?php echo 'msj-'.$value['id']; ?>" class="form-horizontal" action="<?php echo RUTA ?>admin/mensaje/eliminar.php" method="post" >
            <br>
            <div class="form-group">
              <label class="control-label col-md-2" for="email">Nombre:</label>
              <div class="col-md-10">
                <input type="hidden" name="idmsj" value="<?php echo $value['id'] ?>">
                <input type="text" class="form-control" readonly="" value="<?php echo $value['nombre'] ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Correo:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" readonly="" value="<?php echo $value['correo'] ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Teléfono:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" readonly="" value="<?php echo $value['telefono'] ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Alumno:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" readonly="" value="<?php echo $value['alumno'] ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Dirección:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" readonly="" value="<?php echo $value['direccion'] ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Mensaje:</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="4" readonly="" > <?php echo $value['mensaje'] ?></textarea>
              </div>
            </div>            
            
        </form>
          
        
      </div>   

    <?php } ?>  

  <br>  



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

        $('.aceptar_eliminacion').on( "click", function() {
          $('.modal-eliminar').modal('hide');
          $('#Modal-Confirmar').find(".modal-body").html('ELIMINADO CORRECTAMENTE');
          $('#Modal-Confirmar').modal('show');
          var item =$(this).attr('item');
          setTimeout(function(){
            $('#msj-'+item).submit();
            console.log('#msj-'+item);
            }, 700);
        });
      });

      function msj_visto(id){
        $('.aceptar_eliminacion').attr('item',id);
        $('.modal-eliminar').modal('show');
      }


 
    </script>

    <script src="<?php echo RUTA ?>public/js/main.js"></script> 
    
    <div id="Modal-Confirmar" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 75%;top: 130px;left: 27%;border-radius: 0px !important">


          <div class="modal-body" style=" margin-top: 35%;padding: 10% 20%;">
              ---
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade modal-eliminar" id="eliminar-<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar Mensaje</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
             <div class="modal-body">
                   ¿Desea eliminar el mensaje??
              
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  <button type="button" item="<?php echo $value['id'] ?>" class="btn btn-primary aceptar_eliminacion">Si</button>
                </div>
            </div>
        </div>
      </div>
    </div> 

</footer>


</body>

</html>


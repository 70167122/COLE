
<div id="page-wrapper" style="border-left: 0; min-height: 700px;padding: 82px 0px 10px 0px"> 
      <div class="col-md-12 graphs">
      <div class="xs" style="text-align: center;">
         <h2>Perfiles</h2>

        <div class="bs-example4" data-example-id="contextual-table">
          
        <div class="panel-body no-padding" style="display: block;">

  <div class="row">
      <div class="col-md-2" > 
        <a id="nuevo" class="btn btn-info" data-toggle="modal" data-target="#Modal-registrar" style="display: block;width: 100px ; background-color: #0B7E72; border-color: #0B7E72; padding-top: 12px;    height: 45.5px; color:white;"> NUEVO</a>
      </div>

      
    
  </div>     

  <br>  
    <input type="text" name="buscar" id="bus" style="margin-left: 770px;margin-bottom: 40px">

  
 <table class="table table-bordered table-striped" id="example">  

    <thead class="thead-inverse" style="background-color: #548F81"> 
      <tr>
          <th>Id</th>
          <th>Descripción</th>
          <th>Tipo Personal</th>
            <th>Acciones</th>
      </tr>
    </thead>

                      
    <tbody>
       <?php foreach ($perfil as $key => $value):?>
      <tr>
          <td><?php echo $value['id'] ?></td>
          <td><?php echo $value['descripcionp'] ?></td>
          <td><?php echo $value['descripciont'] ?></td>
         
              
          <td>

           <a href="#" class="btn" data-toggle="modal" data-target="#editar-<?php echo $value['id'] ?>"  style="background-color: #0B7E72; color:white;">Editar</a>
           <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminar-<?php echo $value['id'] ?>" >Eliminar</a>
          
            <div class="modal fade modal-editar" id="editar-<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="<?php echo 'form-editar'.$value['id'] ?>" action="<?php echo RUTA ?>admin/perfiles/editar.php" method="post">
                     <div class="modal-body">
                   <input type="hidden" name="id" value="<?php echo $value['id'] ?>">


                        <div class="form-group">
                            <label >Descripción</label>
                            <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" name="Descripcion" ng-model="model.name" value="<?php echo $value['descripcionp'] ?>">
                          </div>


                            <div class="form-group ">
                               <label >Tipo personal</label>
                              <select class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" name="Tipopersonal" required="">
                                     <?php foreach ($tipo as $key => $values): ?>
                                       <?php if ($values['id']==$value['tipopersonal_id']){   ?>
                                          <option selected value="<?php echo $values['id'] ?>"><?php echo $values['descripciont'] ?></option>
                                      <?php }else { ?>
                                          <option value="<?php echo $values['id'] ?>"><?php echo $values['descripciont'] ?></option>
      
                                      <?php } ?>
                                    <?php endforeach; ?>
                                    </select>
                                  </div>


                                  
                          
                           
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="button" item="<?php echo $value['id'] ?>" class="btn btn-primary aceptar_edicion">Guardar</button>
                        </div>
                  </form>
                </div>
              </div>
            </div> 



            <!--Modal de eliminar-->


            <div class="modal fade modal-eliminar" id="eliminar-<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Perfil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="<?php echo 'form-eliminar'.$value['id'] ?>"" action="<?php echo RUTA ?>admin/perfiles/eliminar.php" method="post">
                     <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                           ¿Desea eliminar Perfil?
                      
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                          <button type="button" item="<?php echo $value['id'] ?>" class="btn btn-primary aceptar_eliminacion">Si</button>
                        </div>
                        </div>
                  </form>
                </div>
              </div>
            </div> 

          </td>
          
      </tr>

    <?php endforeach; ?>
                                  

    </tbody>

  </table>

 


          </div>
          </div>
  <!-- /.table-responsive -->
      </div>
      </div>
</div>

<!-- Metis Menu Plugin JavaScript -->


<footer>
   <div id="Modal-registrar" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrar Perfil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form id="form-nuevo" action="<?php echo RUTA ?>admin/perfiles/guardar.php" method="post">

            
          <div class="form-group">
                <label >Descripción</label>
                <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" name="Descripcion" ng-model="model.name" onkeypress="return soloLetras(event)">
              </div>











               <div class="form-group ">
               <label>Tipo personal</label>
               <select class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" name="Tipopersonal" required=""><option></option>
               <?php foreach ($tipo as $key => $values): ?>
               <option value="<?php echo $values['id'] ?>"><?php echo $values['descripciont'] ?>
                 
               </option>
              <?php endforeach; ?>
                                    
                </select>
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



    <script>
      $(document).ready(function() {
       $('#example').DataTable({
          "paging": true,
          "searching": false,
          "info":     false,
          "ordering": false,
          "lengthChange": false,

          "language" : {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
          }

        });


        $('#nuevo').on( "click", function() {
           $('#Modal-registrar').find('input').val('');
        });

        $('#btn-buscar').on( "click", function() {
           $('#form-buscar').submit();
        });

        $('#guardar_nuevo').on( "click", function() {
          $('#Modal-registrar').modal('hide');
          $('#Modal-Confirmar').find(".modal-body").html('AGREGADO CORRECTAMENTE');
          $('#Modal-Confirmar').modal('show');

          setTimeout(function(){
            $('#form-nuevo').submit();
            }, 1700);
        }); 




          $('.aceptar_edicion').on( "click", function() {
          $('.modal-editar').modal('hide');
          $('#Modal-Confirmar').find(".modal-body").html('ACTUALIZADO CORRECTAMENTE');
          $('#Modal-Confirmar').modal('show');
          var item =$(this).attr('item');
          setTimeout(function(){
            $('#form-editar'+item).submit();
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
          var hijo="perfiles";
          $('#'+padre).addClass('active');
          $('#'+padre).find('ul').css( "display", "block" );
          $('#'+hijo).addClass('principal');
            }, 100); 
  

      });
    </script>
     <script>
      $("#bus").keyup(function(){
        ler = $("#bus").val();
        dato = {palabra : ler};
        ruta = "<?php echo RUTA ?>ajax/buscarper.php";
        $.ajax({
          data : dato,
          url : ruta,
          type : 'post',
          success : function(response){
            $("#example").html(response);
          }
        });
      });
    </script>
    <script src="<?php echo RUTA ?>public/js/main.js"></script> 
    <script src="<?php echo RUTA ?>public/js/jquery.dataTables.js"></script>

   

</body>

</html>


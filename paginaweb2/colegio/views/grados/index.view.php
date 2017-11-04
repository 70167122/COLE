
<div id="page-wrapper" style="border-left: 0; min-height: 700px;padding: 82px 0px 10px 0px"> 
      <div class="col-md-12 graphs">
      <div class="xs" style="text-align: center;">
         <h2>Grados</h2>

        <div class="bs-example4" data-example-id="contextual-table">
          
        <div class="panel-body no-padding" style="display: block;">

  <div class="row">
      <div class="col-md-2" > 
        <a id="nuevo" class="btn btn-info" data-toggle="modal" data-target="#Modal-registrar" style="display: block;width: 100px ; background-color: #0B7E72; border-color: #0B7E72; padding-top: 12px;    height: 45.5px; color:white;"> NUEVO</a>
      </div>

      <form id="form-buscar" action="<?php echo RUTA ?>admin/grados/index.php" method="post">
          <div class="col-md-1 col-md-offset-2" >
            <input type="button" id="btn-buscar" value="Buscar"> 
          </div >
          <div class="col-md-7">
              <input  id="buscador" name="search" type="text" class="form-control search" placeholder="Buscar">
          </div>
      </form>
    
  </div>     

  <br>  

  
 <table class="table table-bordered table-striped" id="example">  

    <thead class="thead-inverse" style="background-color: #548F81"> 
      <tr>
          <th>Id</th>
          <th>Descripcion</th>
          <th>Nivel de Estudio</th>
            <th>Acciones</th>
      </tr>
    </thead>

                      
    <tbody>
       <?php foreach ($grado as $key => $value):?>
      <tr>
          <td><?php echo $value['id'] ?></td>
          <td><?php echo $value['descripciong'] ?></td>
          <td><?php echo $value['descripcion'] ?></td>

              
          <td>

           <a href="#" class="btn" data-toggle="modal" data-target="#editar-<?php echo $value['id'] ?>"  style="background-color: #0B7E72; color:white;">Editar</a>
           <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminar-<?php echo $value['id'] ?>" >Eliminar</a>
          
            <div class="modal fade modal-editar" id="editar-<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Curso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="<?php echo 'form-editar'.$value['id'] ?>" action="<?php echo RUTA ?>admin/grados/editar.php" method="post">
                     <div class="modal-body">
                   <input type="hidden" name="id" value="<?php echo $value['id'] ?>">

                          <div class="form-group">
                            <label >Descripción</label>
                            <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" name="Descripcion" ng-model="model.name" value="<?php echo $value['descripciong'] ?>">
                          </div>


                            <div class="form-group ">
                               <label >Nivel de Estudio</label>
                              <select class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" name="Nivel" required="">
                                    <?php foreach ($nivel as $k => $val): ?>
                                      <?php if ($val['id']==$value['nivelestudio_id']){   ?>
                                          <option selected value="<?php echo $val['id'] ?>"><?php echo $val['descripcion'] ?></option>
                                      <?php }else { ?>
                                          <option value="<?php echo $val['id'] ?>"><?php echo $val['descripcion'] ?></option>
      
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
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Grado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="<?php echo 'form-eliminar'.$value['id'] ?>"" action="<?php echo RUTA ?>admin/grados/eliminar.php" method="post">
                     <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                           ¿Desea eliminar Grado?
                      
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

  <div style="float: left">
    <?php 
      $pagination->pages("btnpag");
    ?>
  </div>


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
        //$('#example').DataTable();

        $('#buscador').keyup(function(){
          buscar = $(this).val();

            if(buscar.trim()!=''){
              $('#example tbody tr').hide();
              $("#example tbody tr:contains('" + buscar + "')").show();          
            }else{
              $('#example tbody tr').show();
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
          var padre="administracion";
          var hijo="grados";
          $('#'+padre).addClass('active');
          $('#'+padre).find('ul').css( "display", "block" );
          $('#'+hijo).addClass('principal');
            }, 100); 
  

      });
    </script>
    <script src="<?php echo RUTA ?>public/js/main.js"></script> 
    <script src="<?php echo RUTA ?>public/js/jquery.dataTables.js"></script>

    <div id="Modal-registrar" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrar Grado</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form id="form-nuevo" action="<?php echo RUTA ?>admin/grados/guardar.php" method="post">

            
                <div class="form-group">
                <label >Descripción</label>
                <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" name="Descripcion" ng-model="model.name" onkeypress="return soloLetras(event)">
              </div>





               <div class="form-group ">
               <label>Nivel de Estudio</label>
               <select class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" name="Nivel" required=""><option></option>
               <?php foreach ($nivel as $key => $values): ?>
               <option value="<?php echo $values['id'] ?>"><?php echo $values['descripcion'] ?>
                 
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


</body>

</html>


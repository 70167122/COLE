<?php 

	require '../config/conexion.php';
	require '../config/config.php';
	$conexion = conectar();
	$don = $_POST['palabra'];
     
     $consulta=$conexion->prepare("SELECT * FROM anios_academico WHERE anios_academico.descripcion LIKE '%$don%' OR anios_academico.lectivo LIKE '%$don%' OR anios_academico.fecha_inicio LIKE '%$don%' OR anios_academico.fecha_final LIKE '%$don%'  ");
     $consulta->execute();
     $anios_academico=$consulta->fetchAll();


 ?>
 <table class="table table-bordered table-striped" id="example">  

    <thead class="thead-inverse" style="background-color: #548F81"> 
      <tr>
          <th>Nº</th>
          <th>Descripción</th>
          <th>Lectivo</th>
          <th>Fecha Inicial</th>
          <th>Fecha Final</th>
          <th>Acciones</th>
      </tr>
    </thead>

                      
    <tbody>
       <?php foreach ($anios_academico as $key => $value):?>
      <tr>
          <td><?php echo $key+1;?></td>
          <td><?php echo $value['descripcion'] ?></td>
          <td><?php echo $value['lectivo'] ?></td>
          <td><?php echo $value['fecha_inicio'] ?></td>
          <td><?php echo $value['fecha_final'] ?></td>
              
          <td>

           <a href="#" class="btn" data-toggle="modal" data-target="#editar-<?php echo $value['id'] ?>"  style="background-color: #0B7E72; color:white;">Editar</a>
           <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminar-<?php echo $value['id'] ?>" >Eliminar</a>
          
            <div class="modal fade modal-editar" id="editar-<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Año Académico</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="<?php echo 'form-editar'.$value['id'] ?>"  action="<?php echo RUTA ?>admin/anios_academico/editar.php" method="post">
                     <div class="modal-body">
                   <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                           <div class="form-group">
                            <label >Descripcion</label>
                            <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" name="descripcion" ng-model="model.name" value="<?php echo $value['descripcion'] ?>">
                          </div>
                           <div class="form-group">
                            <label >Lectivo</label>
                            <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" name="lectivo" ng-model="model.name" value="<?php echo $value['lectivo'] ?>">
                          </div>
                           <div class="form-group">
                            <label >Fecha Inicial</label>
                            <input type="date" class="form-control1 ng-invalid ng-invalid-required ng-touched" name="fecha_inicio" ng-model="model.name" value="<?php echo $value['fecha_inicio'] ?>">
                          </div>
                          <div class="form-group">
                            <label >Fecha Final</label>
                            <input type="date" class="form-control1 ng-invalid ng-invalid-required ng-touched" name="fecha_final" ng-model="model.name" value="<?php echo $value['fecha_final'] ?>">
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
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Año académico</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="<?php echo 'form-eliminar'.$value['id'] ?>"" action="<?php echo RUTA ?>admin/anios_academico/eliminar.php" method="post">
                     <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                           ¿Desea eliminar Año Académico?
                      
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
  <script>
 	$(document).ready(function() {
 	$('.aceptar_edicion').on( "click", function() {
          $('.modal-editar').modal('hide');
          $('#Modal-Confirmar').find(".modal-body").html('ACTUALIZADO CORRECTAMENTE');
          $('#Modal-Confirmar').modal('show');
          var item =$(this).attr('item');
          setTimeout(function(){
            $('#form-editar'+item).submit();
            }, 1700);
        });
 	});
 </script>
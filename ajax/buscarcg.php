<?php 


	require '../config/conexion.php';
	require '../config/config.php';
	$conexion = conectar();
	$don = $_POST['palabra'];
$consulta5=$conexion->prepare("SELECT cursos_grados.id,cursos.descripcion,grados.descripciong,cursos_grados.curso_id,cursos_grados.grado_id FROM cursos_grados INNER JOIN cursos on cursos_grados.curso_id=cursos.id INNER JOIN grados on cursos_grados.grado_id=grados.id WHERE cursos.descripcion LIKE '%$don%' OR grados.descripciong LIKE '%$don%'");
$consulta5->execute();
$cursos_grado=$consulta5->fetchAll();
$consulta=$conexion->prepare("SELECT * FROM cursos");
$consulta->execute();
$cursos=$consulta->fetchAll();


$consulta=$conexion->prepare("SELECT * FROM grados");
$consulta->execute();
$grados=$consulta->fetchAll();





	 ?>
	  <table class="table table-bordered table-striped" id="example">  

    <thead class="thead-inverse" style="background-color: #548F81"> 
      <tr>
          <th>N°</th>
          <th>Curso</th>
          <th>Grado</th>
            <th>Acciones</th>
      </tr>
    </thead>

                      
    <tbody>
       <?php foreach ($cursos_grado as $key => $value):?>
      <tr>
          <td><?php echo $key+1 ?></td>
          <td><?php echo $value['descripcion'] ?></td>
          <td><?php echo $value['descripciong'] ?></td>

              
          <td>

           <a href="#" class="btn" data-toggle="modal" data-target="#editar-<?php echo $value['id'] ?>"  style="background-color: #0B7E72; color:white;">Editar</a>
           <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminar-<?php echo $value['id'] ?>" >Eliminar</a>
          
            <div class="modal fade modal-editar" id="editar-<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Curso Segun Grado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="<?php echo 'form-editar'.$value['id'] ?>" action="<?php echo RUTA ?>admin/cursos_grado/editar.php" method="post">
                     <div class="modal-body">
                   <input type="hidden" name="id" value="<?php echo $value['id'] ?>">

                           <div class="form-group ">
                               <label >Curso</label>
                              <select class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" name="Curso" required="">
                                    <?php foreach ($cursos as $key => $values): ?>
                                       <?php if ($values['id']==$value['curso_id']){   ?>
                                          <option selected value="<?php echo $values['id'] ?>"><?php echo $values['descripcion'] ?></option>
                                      <?php }else { ?>
                                          <option value="<?php echo $values['id'] ?>"><?php echo $values['descripcion'] ?></option>
      
                                      <?php } ?>
                                    <?php endforeach; ?>
                                    </select>
                                  </div>


                            <div class="form-group ">
                               <label >Grado</label>
                              <select class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" name="Grado" required="">
                                    <?php foreach ($grados as $key => $values): ?>
                                      <?php if ($values['id']==$value['grado_id']){   ?>
                                          <option selected value="<?php echo $values['id'] ?>"><?php echo $values['descripciong'] ?></option>
                                      <?php }else { ?>
                                          <option value="<?php echo $values['id'] ?>"><?php echo $values['descripciong'] ?></option>
      
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
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Curso Según Grado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="<?php echo 'form-eliminar'.$value['id'] ?>" action="<?php echo RUTA ?>admin/cursos_grado/eliminar.php" method="post">
                     <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                           ¿Desea eliminar Curso Según Grado?
                      
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
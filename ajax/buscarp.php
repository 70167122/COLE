<?php 
	require '../config/conexion.php';
	require '../config/config.php';
	$conexion = conectar();
	$don = $_POST['palabra'];

	$consulta5=$conexion->prepare("SELECT personales.id,personales.nombre,personales.apellido,personales.telefono,personales.correo_electronico,especialidades.descripcione,personales.tiempo_servicio,personales.nivel,tipos_personal.descripciont,categorias.descripcion,personales.especialidad_id,personales.tipopersonal_id,personales.categoria_id FROM personales INNER JOIN especialidades on personales.especialidad_id=especialidades.id INNER JOIN categorias on personales.categoria_id=categorias.id INNER JOIN tipos_personal on personales.tipopersonal_id=tipos_personal.id WHERE personales.nombre LIKE '%$don%' or personales.apellido LIKE '%$don%' or personales.telefono LIKE '%$don%' or personales.correo_electronico LIKE '%$don%' or especialidades.descripcione LIKE '%$don%' or personales.tiempo_servicio LIKE '%$don%' or personales.nivel LIKE '%$don%' or tipos_personal.descripciont LIKE '%$don%' or categorias.descripcion ");
$consulta5->execute();
$personal=$consulta5->fetchAll();


$consulta=$conexion->prepare("SELECT * FROM especialidades");
$consulta->execute();
$especialidad=$consulta->fetchAll();


$consulta=$conexion->prepare("SELECT * FROM tipos_personal");
$consulta->execute();
$tipo=$consulta->fetchAll();



$consulta=$conexion->prepare("SELECT * FROM categorias");
$consulta->execute();
$categoria=$consulta->fetchAll();







 ?>



  <table class="table table-bordered table-striped" id="example">  

    <thead class="thead-inverse" style="background-color: #548F81"> 
      <tr>
          <th>N°</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Telefono</th>
          <th>Correo</th>
          <th>Esoecialidad</th>
          <th>Tiempo Servicio</th>
          <th>Nivel</th>
          <th>Tipo Personal</th>
           <th>Categoria</th>
            <th>Acciones</th>
      </tr>
    </thead>

                      
    <tbody>
       <?php foreach ($personal as $key => $value):?>
      <tr>
          <td><?php echo $key+1;?></td>
          <td><?php echo $value['nombre'] ?></td>
           <td><?php echo $value['apellido'] ?></td>
            <td><?php echo $value['telefono'] ?></td>
             <td><?php echo $value['correo_electronico'] ?></td>
              <td><?php echo $value['descripcione'] ?></td>
               <td><?php echo $value['tiempo_servicio'] ?></td>
                <td><?php echo $value['nivel'] ?></td>
                 <td><?php echo $value['descripciont'] ?></td>
                  <td><?php echo $value['descripcion'] ?></td>

              
          <td>

           <a href="#" class="btn" data-toggle="modal" data-target="#editar-<?php echo $value['id'] ?>"  style="background-color: #0B7E72; color:white;">Editar</a>
           <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminar-<?php echo $value['id'] ?>" >Eliminar</a>
          
            <div class="modal fade modal-editar" id="editar-<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Personal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="<?php echo 'form-editar'.$value['id'] ?>"  action="<?php echo RUTA ?>admin/personales/editar.php" method="post">
                     <div class="modal-body">
                   <input type="hidden" name="id" value="<?php echo $value['id'] ?>">

                          <div class="form-group">
                            <label >Nombre</label>
                            <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" name="Nombre" ng-model="model.name" value="<?php echo $value['nombre'] ?>">
                          </div>

                            <div class="form-group">
                            <label >Apellido</label>
                            <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" name="Apellido" ng-model="model.name" value="<?php echo $value['apellido'] ?>">
                          </div>



                         <div class="form-group">
                            <label >Telefono</label>
                            <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" name="Telefono" ng-model="model.name" value="<?php echo $value['telefono'] ?>">
                          </div>


                          <div class="form-group">
                            <label >Correo</label>
                            <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" name="Correo" ng-model="model.name" value="<?php echo $value['correo_electronico'] ?>">
                          </div>
                         



                          <div class="form-group ">
                               <label >Especialidad</label>
                              <select class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" name="Especialidad" required="">
                                    <?php foreach ($especialidad as $key => $values): ?>
                                       <?php if ($values['id']==$value['especialidad_id']){   ?>
                                          <option selected value="<?php echo $values['id'] ?>"><?php echo $values['descripcione'] ?></option>
                                      <?php }else { ?>
                                          <option value="<?php echo $values['id'] ?>"><?php echo $values['descripcione'] ?></option>
      
                                      <?php } ?>
                                    <?php endforeach; ?>
                                    </select>
                                  </div>

                       <div class="form-group">
                            <label >Tiempo Servicio</label>
                            <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" name="Tiempo" ng-model="model.name" value="<?php echo $value['tiempo_servicio'] ?>">
                          </div>


                          <div class="form-group">
                            <label >Nivel</label>
                            <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" name="Nivel" ng-model="model.name" value="<?php echo $value['nivel'] ?>">
                          </div>


                             <div class="form-group ">
                               <label >Tipo Personal</label>
                              <select class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" name="Tipo" required="">
                                    <?php foreach ($tipo as $key => $values): ?>
                                       <?php if ($values['id']==$value['tipopersonal_id']){   ?>
                                          <option selected value="<?php echo $values['id'] ?>"><?php echo $values['descripciont'] ?></option>
                                      <?php }else { ?>
                                          <option value="<?php echo $values['id'] ?>"><?php echo $values['descripciont'] ?></option>
      
                                      <?php } ?>
                                    <?php endforeach; ?>
                                    </select>
                                  </div>


                                     <div class="form-group ">
                               <label >Categoria</label>
                              <select class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" name="Categoria" required="">
                                    <?php foreach ($categoria as $key => $values): ?>
                                       <?php if ($values['id']==$value['categoria_id']){   ?>
                                          <option selected value="<?php echo $values['id'] ?>"><?php echo $values['descripcion'] ?></option>
                                      <?php }else { ?>
                                          <option value="<?php echo $values['id'] ?>"><?php echo $values['descripcion'] ?></option>
      
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
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Personal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="<?php echo 'form-eliminar'.$value['id'] ?>"" action="<?php echo RUTA ?>admin/personales/eliminar.php" method="post">
                     <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                           ¿Desea eliminar Personal?
                      
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
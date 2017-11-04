<?php 

	session_start();
	require '../config/conexion.php';
	require '../config/config.php';
			
	$fecha = $_POST['fecha'];

	$conexion = conectar();

	$consulta = $conexion -> prepare("SELECT * FROM personales WHERE DATE(created_at) = '$fecha'");
	$consulta -> execute();

	$personales = $consulta -> fetchAll();

 ?>


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
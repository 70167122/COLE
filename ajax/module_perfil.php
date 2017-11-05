<?php 
	require '../config/conexion.php';
	require '../config/config.php';

	$id = $_POST['id'];

	$conexion = conectar();

	$sql = $conexion -> prepare("SELECT * FROM modulos WHERE idpadre = 0");
	$sql -> execute();
	$mod_padre = $sql -> fetchAll();

	function ver_hijos($conexion,$idmodulo){
		$consulta = $conexion -> prepare("SELECT * FROM modulos WHERE idpadre = $idmodulo");
		$consulta -> execute();

		return $resultado = $consulta -> fetchAll();
	}

 ?>
<div class="panel-group" id="accordion">
	<?php foreach ($mod_padre as $key => $value): ?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $key + 1 ?>">
          <?php echo utf8_encode($value['descripcion']) ?>
        </a>
      </h4>
    </div>
    <?php $hijos = ver_hijos($conexion,$value['id']) ?>
    
    <div id="collapse<?php echo $key + 1 ?>" class="panel-collapse collapse in">
      <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">
        	<?php foreach ($hijos as $count => $valor): ?>
            <li class="lista" style="text-align: left;padding-left: 10%;padding-top: 10px;padding-bottom: 10px;background: #28d6ae"><?php echo utf8_encode($valor['descripcion']) ?> <input type="checkbox" style="position: absolute;right: 70%" class="chequeado" item="<?php echo $value['id'] ?>" id="<?php echo $valor['id'] ?>"></li>
            <?php endforeach; ?>
        </ul>
                    
      </div>
    </div>
	
  </div>
  <?php endforeach; ?>
</div>

<div id="hp">
	
</div>


<script>
	$(".chequeado").click(function(){
		if ($(this).is(':checked')) {
			padre = $(this).attr("item");
			hijo = $(this).attr("id");
			datos = {padre : padre, hijo : hijo};
			ruta = "<?php echo RUTA ?>ajax/insert-permiso.php";
			$.ajax({
				data : datos,
				url : ruta,
				type : 'post',
				beforeSend : function(){
					$("#hp").html("hola");
				},
				success : function(response){
					$("#hp").html(response);
				}
			});
		}else{
			padre = $(this).attr("item");
			hijo = $(this).attr("id");
			datos = {padre : padre, hijo : hijo};
			ruta = "<?php echo RUTA ?>ajax/actualizar-permiso.php";
			$.ajax({
				data : datos,
				url : ruta,
				type : 'post',
				beforeSend : function(){
					$("#hp").html("hola");
				},
				success : function(response){
					$("#hp").html(response);
				}
			});
		}
	});
</script>
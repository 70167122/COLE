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

	$per = $conexion-> prepare("SELECT * FROM restricciones");
	$per -> execute();
	$res = $per ->fetchAll();

 ?>
<div class="panel-group" id="accordion">
	<input type="hidden" id="idperfil" value="<?php echo $id ?>">
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
            <li class="lista" style="text-align: left;padding-left: 10%;padding-top: 10px;padding-bottom: 10px;background: #28d6ae"><?php echo utf8_encode($valor['descripcion']) ?> <input type="checkbox" style="margin-right: 50px" class="chequeado" item="<?php echo $value['id'] ?>" id="<?php echo $valor['id'] ?>">
            	<?php foreach ($res as $cant => $valu): ?>
            		<div class="ver<?php echo $valor['id']?>" style="display: inline;">
            			<?php if ($cant == 0): ?>
            				<div class="primer<?php echo $valor['id']?>" style="display: inline;">
            					<?php echo $valu['descripcion'] ?><input type="checkbox" item="<?php echo $valu['id'] ?>" disabled>
            				</div>
            				
            			<?php else: ?>
            				<?php echo $valu['descripcion'] ?><input type="checkbox" items="<?php echo $valor['id'] ?>" item="<?php echo $valu['id'] ?>" class="hora" disabled>
            			<?php endif; ?>
            		</div>
					            		
            	<?php endforeach; ?>

            </li>
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


	$(".hora").click(function(){
		if ($(this).is(':checked')) {
			num = $(this).attr('item');
			modulo = $(this).attr('items');
			perfil = $("#idperfil").val();

			datos = {num : num, modulo : modulo, perfil : perfil};
			ruta = "<?php echo RUTA ?>ajax/insertper.php";
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
			num = $(this).attr('item');
			modulo = $(this).attr('items');
			perfil = $("#idperfil").val();

			datos = {num : num, modulo : modulo, perfil : perfil};
			ruta = "<?php echo RUTA ?>ajax/deleteper.php";
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
	
	$(".chequeado").click(function(){
		if ($(this).is(':checked')) {
			
			padre = $(this).attr("item");
			hijo = $(this).attr("id");
			perfil = $("#idperfil").val();

			$(".ver"+hijo+" input:checkbox").prop('checked',false).removeAttr("disabled");
			$(".ver"+hijo+" .primer"+hijo+" input:checkbox").prop('checked',true).attr("disabled",true);


			datos = {padre : padre, hijo : hijo,perfil : perfil};
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
			perfil = $("#idperfil").val();

			$(".ver"+hijo+" input:checkbox").prop('checked',false).attr("disabled",true);

			datos = {padre : padre, hijo : hijo, perfil : perfil};
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
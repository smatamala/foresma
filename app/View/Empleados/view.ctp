<h2>Detalle del Empleado <?php echo $empleado['Empleado']['nombre']; ?></h2>

<p><strong>Rut: </strong><?php echo $empleado['Empleado']['rut']; ?></p>
<p><strong>Rol: </strong><?php echo $empleado['Empleado']['role']; ?></p>
<p><strong>teléfono: </strong><?php echo $empleado['Empleado']['tel']; ?></p>
<p><strong>Faena: </strong>

<?php foreach($faenas as $fa):
   				 if($fa['Faena']['id'] == $empleado['Empleado']['faena_id']){
       					echo $fa['Faena']['nombre'];}?></td>
			
				<?php endforeach;?></p>


<?php
	echo $this->Html->link('Volver a lista de producciones', array('controller' => 'produccions', 'action'=> 'index'));
?>

<?php debug($faenas)?>
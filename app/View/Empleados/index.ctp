<div class="index">
	<h2>Empleados</h2>
	<?php echo $this->Html->link('Agregar Empleado',array('action'=>'add'));?>
	<a href="/foresma/" role="button"> Volver al menu principal</a>

	<table>
		<tr>
			<th><?php echo $this->Paginator->sort('id')?></th>
			<th><?php echo $this->Paginator->sort('Rut')?></th>
			<th><?php echo $this->Paginator->sort('Nombre')?></th>
			<th><?php echo $this->Paginator->sort('Role')?></th>
			<th><?php echo $this->Paginator->sort('Telefono')?></th>
			<th><?php echo $this->Paginator->sort('created')?></th>
			<th><?php echo $this->Paginator->sort('modified')?></th>
			<th><?php echo $this->Paginator->sort('Faena')?></th>
		
		</tr>
		<?php foreach($empleados as $k=>$empleado):?>
			<tr>
				<td><?php echo h($empleado['Empleado']['id']);?></td>
				<td><?php echo h($empleado['Empleado']['rut']);?></td>
				<td><?php echo h($empleado['Empleado']['nombre']);?></td>
				<td><?php echo h($empleado['Empleado']['role']);?></td>
				<td><?php echo h($empleado['Empleado']['tel']);?></td>
				<td><?php echo h($empleado['Empleado']['created']);?></td>
				<td><?php echo h($empleado['Empleado']['modified']);?></td>
				<td><?php foreach($faenas as $fa):
   				 if($fa['Faena']['id'] == $empleado['Empleado']['faena_id']){
       					echo $fa['Faena']['nombre'];}?>
			
				<?php endforeach;?></td>
			</tr>
			<?php endforeach;?>
	</table>
</div>







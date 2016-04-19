<div class="col-md-12">
	<h2>Empleados</h2>
	<h3>
		<ul>
			<?php echo $this->Html->link(__('Agregar Empleado'), array('action' => 'add')); ?>
		</ul> 
	</h3>
	<table>
		<tr>
			<th><?php echo $this->Paginator->sort('Rut')?></th>
			<th><?php echo $this->Paginator->sort('Nombre')?></th>
			<th><?php echo $this->Paginator->sort('Telefono')?></th>
			<th><?php echo $this->Paginator->sort('created')?></th>
			<th><?php echo $this->Paginator->sort('modified')?></th>
			<th><?php echo $this->Paginator->sort('Faena')?></th>
		
		</tr>
		<?php foreach($empleados as $k=>$empleado):?>
			<tr>
				<td><?php echo h($empleado['Empleado']['rut']);?></td>
				<td><?php echo h($empleado['Empleado']['nombre']);?></td>
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
	<div class="paging">
		<?php echo $this->Paginator->prev('< anterior',array(),null,array('class'=>'prev disabled'));?>
		<?php echo $this->Paginator->numbers(array('separator'=>''));?>
		<?php echo $this->Paginator->next('siguiente >',array(),null,array('class'=>'next disabled'));?>

		</div> 
<pre>
	<?php print_R($empleados);?>
</pre>
</div>








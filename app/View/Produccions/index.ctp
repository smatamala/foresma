<div class="col-md-20">
	<h2>Produccion</h2>
	<h3>
		<ul>
			<?php echo $this->Html->link(__('Agregar Produccion'), array('action' => 'add')); ?>
		</ul> 
	</h3>
	<table>
	<tr>
			<th><?php echo $this->Paginator->sort('Dia')?></th>	
			<th><?php echo $this->Paginator->sort('Empleado')?></th>
			<th><?php echo $this->Paginator->sort('Maquina')?></th>
			<th><?php echo $this->Paginator->sort('Faena')?></th>
			<th><?php echo $this->Paginator->sort('Horometraje inicial')?></th>
			<th><?php echo $this->Paginator->sort('Horometraje final')?></th>
			<th><?php echo $this->Paginator->sort('Produccion')?></th>
			<th><?php echo $this->Paginator->sort('Consumo')?></th>
			<th><?php echo $this->Paginator->sort('Horas Trabajadas')?></th>
			<th><?php echo $this->Paginator->sort('Horas Perdidas')?></th>
			<th><?php echo $this->Paginator->sort('Observaciones')?></th>
			
			<th><?php echo $this->Paginator->sort('Creado')?></th>
			<th><?php echo $this->Paginator->sort('Modificado')?></th>
	</tr>

	<?php foreach ($produccions as $key => $produccion):?>
		<tr>
			<td><?php echo $produccion['Produccion']['dia'];?></td>
			<td><?php echo $this->Html->link($produccion['Empleado']['nombre'],array('controller' =>'empleados',
											'action'=> 'view',
										 	$produccion['Empleado']['id']));?></td>
			<td><?php echo $this->Html->link($produccion['Maquina']['nombre'],array('controller' =>'maquinas',
											'action'=> 'view',
										 	$produccion['Maquina']['id']));?></td>
			<td><?php echo $this->Html->link($produccion['Faena']['nombre'],array('controller' =>'faenas',
											'action'=> 'view',
										 	$produccion['Faena']['id']));?></td>
			<td><?php echo $produccion['Produccion']['horai'];?></td>
			<td><?php echo $produccion['Produccion']['horaf'];?></td>
			<td><?php echo $produccion['Produccion']['produccion'];?></td>
			<td><?php echo $produccion['Produccion']['consumo'];?></td>
			<td><?php echo $produccion['Produccion']['horast'];?></td>
			<td><?php echo $produccion['Produccion']['horasp'];?></td>
			<td><?php echo $produccion['Produccion']['observaciones'];?></td>
			
			<td><?php echo $produccion['Produccion']['created'];?></td>
			<td><?php echo $produccion['Produccion']['modified'];?></td>

		</tr>
	<?php endforeach;?>
	</table>
</div>
<div class="input select">
   <label for="ModelField">Field</label>
   <input name="data[Model][field]" value="" id="ModelField" type="hidden">
   <div class="checkbox">
      <input name="data[Model][field][]" value="Value 1"
        id="ModelField1" type="checkbox">
      <label for="ModelField1">Label 1</label>
   </div>
   <div class="checkbox">
      <input name="data[Model][field][]" value="Value 2"
        id="ModelField2" type="checkbox">
      <label for="ModelField2">Label 2</label>
   </div>
   <div class="paging">
		<?php echo $this->Paginator->prev('< anterior',array(),null,array('class'=>'prev disabled'));?>
		<?php echo $this->Paginator->numbers(array('separator'=>''));?>
		<?php echo $this->Paginator->next('siguiente >',array(),null,array('class'=>'next disabled'));?>

		</div> 
</div>

<pre>
	<?php print_R($produccions);?>
</pre>
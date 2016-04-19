<div class="col-md-12">
	<h2>Maquinas</h2>
	<h3>
		<ul>
			<?php echo $this->Html->link(__('Agregar Maquina'), array('action' => 'add')); ?>
		</ul> 
	</h3>
	<table>
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('producciont'); ?></th>
			<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($maquinas as $maquina): ?>
	<tr>
		<td><?php echo h($maquina['Maquina']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($maquina['Maquina']['producciont']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $maquina['Maquina']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $maquina['Maquina']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $maquina['Maquina']['id']), array(), __('Are you sure you want to delete # %s?', $maquina['Maquina']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
		<?php echo $this->Paginator->prev('< anterior',array(),null,array('class'=>'prev disabled'));?>
		<?php echo $this->Paginator->numbers(array('separator'=>''));?>
		<?php echo $this->Paginator->next('siguiente >',array(),null,array('class'=>'next disabled'));?>

		</div> 
</div>

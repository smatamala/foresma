<div class="maquinas form">
<?php echo $this->Form->create('Maquina'); ?>
	<fieldset>
		<legend><?php echo __('Add Maquina'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('producciont');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Maquinas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Produccions'), array('controller' => 'produccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produccion'), array('controller' => 'produccions', 'action' => 'add')); ?> </li>
	</ul>
</div>

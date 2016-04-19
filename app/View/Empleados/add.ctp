<div class="add">
	<?php echo $this->Form->create('Empleado');?>


	<fieldset>
		<legend>Agregar Empleado</legend>
		<?php echo $this->Html->link('Volver',array('action'=>'index'));?>
		
		<?php echo $this->Form->input('rut',array('label'=>'Rut'));?>
		<?php echo $this->Form->input('nombre',array('label'=>'Nombre'));?>
		<?php echo $this->Form->input('role',array('label'=>'Permisos'));?>
		<?php echo $this->Form->input('tel',array('label'=>'Telefono'));?>
		<?php echo $this->Form->input('faena_id');?>


		

	

	</fieldset>
	<?php echo $this->Form->end('Guardar Empleado');?>
</div>



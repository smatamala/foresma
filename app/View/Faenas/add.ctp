<div class="add">
	<?php echo $this->Form->create('Faena');?>
	<fieldset>
		<legend>Agregar Faena</legend>
		<?php echo $this->Form->input('nombre',array('label'=>'Nombre de Faena'));?>
		<?php echo $this->Form->input('jefe',array('label'=>'Jefe de Faena'));?>
		<?php echo $this->Form->input('pass',array('label'=>'contraseña'));?>
		<?php echo $this->Form->input('role',array('label'=>'permisos'));?>
	</fieldset>
	<?php echo $this->Form->end('Guardar Faena');?>
</div>
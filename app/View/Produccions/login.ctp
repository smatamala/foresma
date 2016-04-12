<h1>login</h1>
<?php
	echo $this->Form->create('Admin');
	echo $this->Form->input('nombre',array('label'=>'Usuario'));
	echo $this->Form->input('pass',array('label'=>'Contaseña'));
	echo $this->Form->input('acceso',array('label'=>'Permiso'));
	echo $this->Form->end('Nuevo usuario guardado');

?>
<h1>Editar usuario</h1>
<?php
	echo $this->Form->create('Admin',array('action'=>'edit'));
	echo $this->Form->input('nombre');
	echo $this->Form->input('pass');
	echo $this->Form->input('acceso');
	echo $this->Form->input('id',array('type'=>'hidden'));
	echo $this->Form->end('editar');

	?>

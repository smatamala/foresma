<h2>Detalle de la Faena: <?php echo $faena['Faena']['nombre']; ?></h2>

<p><strong>Jefe: </strong><?php echo $faena['Faena']['jefe']; ?></p>
<p><strong>Rol: </strong><?php echo $faena['Faena']['role']; ?></p>



<?php
	echo $this->Html->link('Volver a lista de producciones', array('controller' => 'produccions', 'action'=> 'index'));
?>


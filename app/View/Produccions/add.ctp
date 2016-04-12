<div class="add">
	<?php echo $this->Form->create('Produccion');?>


	<fieldset>
		<legend>Agregar Produccion</legend>
		<?php echo $this->Html->link('Volver',array('action'=>'index'));
		
				$meses = array(
				'01' =>'Enero',
				'02' => 'Febrero',
				'03' => 'Marzo',
				'04' => 'Abril',
				'05' => 'Mayo',
				'06' => 'Junio',
				'07' => 'Julio',
				'08' => 'Agosto',
				'09' => 'Septiembre',
				'10' => 'Octubre',
				'11' => 'Noviembre',
				'12' => 'Diciembre');
				echo $this->Form->input('dia', array('label' => 'Fecha', 'dateFormat' => 'DMY', 'monthNames' => $meses,  'minYear' => date('Y') - 70));

				echo $this->Form->input('empleado_id');
			    echo $this->Form->input('maquina_id');
			    echo $this->Form->input('faena_id');
				echo $this->Form->input('horai',array('label'=>'Horometraje inicial'));
				echo $this->Form->input('horaf',array('label'=>'Horometraje final'));
				
			    echo $this->Form->input('consumo',array('label'=>'Consumo'));
			    echo $this->Form->input('horast',array('label'=>'Horas trabajadas'));
			    echo $this->Form->input('horasp',array('label'=>'Horas perdidas'));
			    echo $this->Form->input('observaciones');
			    
			    ?>

	</fieldset>
	<?php echo $this->Form->end('Agregar produccion');?>
</div>
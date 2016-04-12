<?php
class Maquina extends AppModel{
	public $displayField='nombre';
	

	public $hasMany= array(
			'Produccion'=> array(
				'className'=>'Produccion',
				'foreignKey'=>'maquina_id')
		);

}
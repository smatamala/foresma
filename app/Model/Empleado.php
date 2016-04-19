<?php
class Empleado extends AppModel{
	public $displayField='nombre';

	public $hasMany= array(
			'Produccion'=> array(
				'className'=>'Produccion',
				'foreignKey'=>'empleado_id')
		);

	public $hasAndBelongsToMany= array(
		'Faena'=>array(
			'className'=>'Faena',
			'joinTable'=>'empleados_faenas',
			'foreignKey'=>'empleado_id',
			'associationForeignKey'=> 'faena_id')
		);

	public $validate=array(
		'nombre' => array('rule' => 'notEmpty', 
				         'message' =>'Debe ingresar un nombre'
				         ),	
		'rut' => array(
					'notEmpty' => array(
							'rule' => 'notEmpty'
						),
					'unique' => array(
							'rule' => 'isUnique',
							'message' => 'El RUT ya se encuentra en nuestra base de datos'
						)
				),
		
		'role'=> array(
			'Numeric'=>array(
				'rule'=>'Numeric',
				'required' => true,
                'message' => 'Sólo números'
			),
			'tamaño'=>array(
				'rule' => array('between', 1, 2),
            	'message' => 'Entre 1 y 2 caracteres'
			)
		),
		'tel' => array(
			'Numeric'=>array(
				'rule'=>'Numeric',
				'required' => true,
                'message' => 'Sólo números'
			)

		)
);
}
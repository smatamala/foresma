<?php
App::uses('BlowfishPasswordHasher','Controller/Component/Auth');
class Faena extends AppModel{
	public $displayField='nombre';
	public $hasAndBelongsToMany= array(
		'Empleado'=>array(
			'classname'=>'Empleado',
			'joinTable'=>'empleados_faenas',
			'foreignKey'=>'faena_id',
			'associationForeignKey'=>'empleado_id')
		);
	public $hasMany= array(
			'Produccion'=> array(
				'className'=>'Produccion',
				'foreignKey'=>'faena_id')
		);
	public $validate=array(
		'nombre'=>array(
            'alphaNumeric' => array(//valida alfanumerico
                'rule' => 'alphaNumeric',
                'required' => true,
                'message' => 'Sólo letras y números'
                ),
            'between' => array(//tamaño
                'rule' => array('between', 5, 15),
                'message' => 'Entre 5 y 15 caracteres'
            )),
		'pass'=>array(
            'rule' => array('minLength', '6'),
            'message' => 'Largo mínimo de 6 caracteres'),
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
		)

		);

	public function beforeSave($options=array()){
		if(isset($this->data[$this->alias]['pass'])):
			$passwordHasher=new BlowfishPasswordHasher();
			$this->data[$this->alias]['pass']=$passwordHasher->hash($this->data[$this->alias]['pass']);
		endif;
		return true;
	}
}
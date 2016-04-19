<?php
App::uses('BlowfishPasswordHasher','Controller/Component/Auth');
class Produccion extends AppModel{
	public $displayField='nombre';
/*	public $validate=array(
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
		'acceso'=> array(
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

		);*/
	public function beforeSave($options=array()){
		if(isset($this->data[$this->alias]['pass'])):
			$passwordHasher=new BlowfishPasswordHasher();
			$this->data[$this->alias]['pass']=$passwordHasher->hash($this->data[$this->alias]['pass']);
		endif;
		return true;
	}

	public $belongsTo= array(
			'Empleado'=> array(
				'className'=>'Empleado',
				'foreignKey'=>'empleado_id'),

			'Maquina'=> array(
				'className'=>'Maquina',
				'foreignKey'=>'maquina_id'),

			'Faena'=> array(
				'className'=>'Faena',
				'foreignKey'=>'faena_id')
		);
}

<?php
class EmpleadosController extends AppController{
	public $paginate = array(
		'limit'=> 10,
		'order' => array('Empleado.id'=>'asc')
		);
	public function index(){
		$this->Empleado->recursive=0;
		$this->set('empleados',$this->paginate());

		$faenas=$this->Empleado->Faena->find('all');
		
		$this->set(compact('faenas'));

	}
	public function add(){


		if($this->request->is('post')):
			if($this->Empleado->save($this->request->data)):
				$this->Session->setFlash('Empleados guardado');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
		$this->loadModel('Faenas');
		$faenas=$this->Empleado->Faena->find('list');
		$this->set(compact('faenas'));
		/*debug($this->request->data);
*/


	}
	
		
	public function view($id = null)
	{
		if (!$id)
		{
			throw new NotFoundException('Datos Invalidos');
		}
		$empleado = $this->Empleado->findById($id);

		if (!$empleado)
		{
			throw new NotFoundException('El empleado no existe');
		}

		$this->set('empleado', $empleado);

		$faenas=$this->Empleado->Faena->find('all');
		$this->set(compact('faenas'));
	}
	
}
?>
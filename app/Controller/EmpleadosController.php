<?php
class EmpleadosController extends AppController{
	public $paginate = array(
		'limit'=> 10,
		'order' => array('Empleado.id'=>'asc')
		);

	public function isAuthorized($user){
		if($user['role']=='user'){
			if(in_array($this->action,array('add','index','view'))){
				return true;
			}
			else{
				if($this->Auth->user('id')){
					$this->Session->$this->Session->setFlash('No puede acceder', 'default', array('class'=>'alert alert-danger'));
					$this->redirect($this->Auth->redirect());
				}
			}
		}
		return parent::isAuthorized($user);
	}

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
		$this->loadModel('Faenas','Users');
		$faenas=$this->Empleado->Faena->find('list');
		$users=$this->Empleado->User->find('list');
		$this->set(compact('faenas','users'));
		
		

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
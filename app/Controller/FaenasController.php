<?php
class FaenasController extends AppController{
	public $paginate = array(
		'limit'=> 10,
		'order' => array('Faena.id'=>'asc')
		);
	public function index(){
		$this->Faena->recursive=0;
		$this->set('faenas',$this->paginate());

	}
	public function add(){
		if($this->request->is('post')):
			if($this->Faena->save($this->request->data)):
				$this->Session->setFlash('Faena guardado');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
	}

	public function view($id = null){
		if (!$id)
		{
			throw new NotFoundException('Datos Invalidos');
		}
		$faena = $this->Faena->findById($id);

		if (!$faena)
		{
			throw new NotFoundException('La faena no existe');
		}

		$this->set('faena', $faena);
	}
	

}
?>
<?php
App::uses('AppController', 'Controller');
/**
 * Maquinas Controller
 *
 * @property Maquina $Maquina
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MaquinasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Maquina->recursive = 0;
		$this->set('maquinas', $this->Paginator->paginate());
	}
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

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Maquina->exists($id)) {
			throw new NotFoundException(__('Invalid maquina'));
		}
		$options = array('conditions' => array('Maquina.' . $this->Maquina->primaryKey => $id));
		$this->set('maquina', $this->Maquina->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Maquina->create();
			if ($this->Maquina->save($this->request->data)) {
				$this->Session->setFlash(__('The maquina has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The maquina could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Maquina->exists($id)) {
			throw new NotFoundException(__('Invalid maquina'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Maquina->save($this->request->data)) {
				$this->Session->setFlash(__('The maquina has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The maquina could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Maquina.' . $this->Maquina->primaryKey => $id));
			$this->request->data = $this->Maquina->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Maquina->id = $id;
		if (!$this->Maquina->exists()) {
			throw new NotFoundException(__('Invalid maquina'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Maquina->delete()) {
			$this->Session->setFlash(__('The maquina has been deleted.'));
		} else {
			$this->Session->setFlash(__('The maquina could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

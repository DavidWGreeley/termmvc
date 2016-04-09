<?php
App::uses('AppController', 'Controller');
/**
 * Formats Controller
 *
 * @property Format $Format
 * @property PaginatorComponent $Paginator
 */
class FormatsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Format->recursive = 0;
		$this->set('formats', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Format->exists($id)) {
			throw new NotFoundException(__('Invalid format'));
		}
		$options = array('conditions' => array('Format.' . $this->Format->primaryKey => $id));
		$this->set('format', $this->Format->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Format->create();
			if ($this->Format->save($this->request->data)) {
				$this->Flash->success(__('The format has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The format could not be saved. Please, try again.'));
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
		if (!$this->Format->exists($id)) {
			throw new NotFoundException(__('Invalid format'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Format->save($this->request->data)) {
				$this->Flash->success(__('The format has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The format could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Format.' . $this->Format->primaryKey => $id));
			$this->request->data = $this->Format->find('first', $options);
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
		$this->Format->id = $id;
		if (!$this->Format->exists()) {
			throw new NotFoundException(__('Invalid format'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Format->delete()) {
			$this->Flash->success(__('The format has been deleted.'));
		} else {
			$this->Flash->error(__('The format could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

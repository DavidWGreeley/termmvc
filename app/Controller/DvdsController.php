<?php
App::uses('AppController', 'Controller');
/**
 * Dvds Controller
 *
 * @property Dvd $Dvd
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class DvdsController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'view');
    }
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Dvd->recursive = 0;
		$this->set('dvds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dvd->exists($id)) {
			throw new NotFoundException(__('Invalid dvd'));
		}
		$options = array('conditions' => array('Dvd.' . $this->Dvd->primaryKey => $id));
		$this->set('dvd', $this->Dvd->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dvd->create();
			if ($this->Dvd->save($this->request->data)) {
				$this->Flash->success(__('The dvd has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dvd could not be saved. Please, try again.'));
			}
		}
		$formats = $this->Dvd->Format->find('list');
		$types = $this->Dvd->Type->find('list');
		$locations = $this->Dvd->Location->find('list');
		$ratings = $this->Dvd->Rating->find('list');
		$genres = $this->Dvd->Genre->find('list');
		$this->set(compact('formats', 'types', 'locations', 'ratings', 'genres'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Dvd->exists($id)) {
			throw new NotFoundException(__('Invalid dvd'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dvd->save($this->request->data)) {
				$this->Flash->success(__('The dvd has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dvd could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dvd.' . $this->Dvd->primaryKey => $id));
			$this->request->data = $this->Dvd->find('first', $options);
		}
		$formats = $this->Dvd->Format->find('list');
		$types = $this->Dvd->Type->find('list');
		$locations = $this->Dvd->Location->find('list');
		$ratings = $this->Dvd->Rating->find('list');
		$genres = $this->Dvd->Genre->find('list');
		$this->set(compact('formats', 'types', 'locations', 'ratings', 'genres'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Dvd->id = $id;
		if (!$this->Dvd->exists()) {
			throw new NotFoundException(__('Invalid dvd'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Dvd->delete()) {
			$this->Flash->success(__('The dvd has been deleted.'));
		} else {
			$this->Flash->error(__('The dvd could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Dvd->recursive = 0;
		$this->set('dvds', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Dvd->exists($id)) {
			throw new NotFoundException(__('Invalid dvd'));
		}
		$options = array('conditions' => array('Dvd.' . $this->Dvd->primaryKey => $id));
		$this->set('dvd', $this->Dvd->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Dvd->create();
			if ($this->Dvd->save($this->request->data)) {
				$this->Flash->success(__('The dvd has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dvd could not be saved. Please, try again.'));
			}
		}
		$formats = $this->Dvd->Format->find('list');
		$types = $this->Dvd->Type->find('list');
		$locations = $this->Dvd->Location->find('list');
		$ratings = $this->Dvd->Rating->find('list');
		$genres = $this->Dvd->Genre->find('list');
		$this->set(compact('formats', 'types', 'locations', 'ratings', 'genres'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Dvd->exists($id)) {
			throw new NotFoundException(__('Invalid dvd'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dvd->save($this->request->data)) {
				$this->Flash->success(__('The dvd has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dvd could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dvd.' . $this->Dvd->primaryKey => $id));
			$this->request->data = $this->Dvd->find('first', $options);
		}
		$formats = $this->Dvd->Format->find('list');
		$types = $this->Dvd->Type->find('list');
		$locations = $this->Dvd->Location->find('list');
		$ratings = $this->Dvd->Rating->find('list');
		$genres = $this->Dvd->Genre->find('list');
		$this->set(compact('formats', 'types', 'locations', 'ratings', 'genres'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Dvd->id = $id;
		if (!$this->Dvd->exists()) {
			throw new NotFoundException(__('Invalid dvd'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Dvd->delete()) {
			$this->Flash->success(__('The dvd has been deleted.'));
		} else {
			$this->Flash->error(__('The dvd could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

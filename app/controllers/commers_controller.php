<?php
class CommersController extends AppController {

	var $name = 'Commers';

	function index() {
		$this->Commer->recursive = 0;
		$this->set('commers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Cliente invalido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('commer', $this->Commer->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Commer->create();
			
			if ($this->Commer->save($this->data)) {
				$this->Session->setFlash(__('Cliente guadado!!', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El cliente no ha sido salvado. Intente de nuevo', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Cliente invalido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Commer->save($this->data)) {
				$this->Session->setFlash(__('Cliente guadado!!', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El cliente no ha sido salvado. Intente de nuevo', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Commer->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id del cliente invalido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Commer->delete($id)) {
			$this->Session->setFlash(__('Cliente eliminado', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Cliente no ha sido eliminado', true));
		$this->redirect(array('action' => 'index'));
	}
}

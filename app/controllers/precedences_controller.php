<?php
class PrecedencesController extends AppController {

	var $name = 'Precedences';

	function index() {
		$this->Precedence->recursive = 0;
		$this->set('precedences', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid precedence', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('precedence', $this->Precedence->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Precedence->create();
			if ($this->Precedence->save($this->data)) {
				$this->Session->setFlash(__('The precedence has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The precedence could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid precedence', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Precedence->save($this->data)) {
				$this->Session->setFlash(__('The precedence has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The precedence could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Precedence->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for precedence', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Precedence->delete($id)) {
			$this->Session->setFlash(__('Precedence deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Precedence was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

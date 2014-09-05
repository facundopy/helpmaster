<?php
class RealizationsController extends AppController {

	var $name = 'Realizations';

	function index() {
		$this->Realization->recursive = 0;
		$this->set('realizations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid realization', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('realization', $this->Realization->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Realization->create();
			if ($this->Realization->save($this->data)) {
				$this->Session->setFlash(__('The realization has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The realization could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid realization', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Realization->save($this->data)) {
				$this->Session->setFlash(__('The realization has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The realization could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Realization->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for realization', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Realization->delete($id)) {
			$this->Session->setFlash(__('Realization deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Realization was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

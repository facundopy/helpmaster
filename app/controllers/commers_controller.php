<?php
class CommersController extends AppController {

	var $name = 'Commers';

	function index() {
		$this->Commer->recursive = 0;
		$this->set('commers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid commer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('commer', $this->Commer->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Commer->create();
			
			if ($this->Commer->save($this->data)) {
				$this->Session->setFlash(__('The commer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The commer could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid commer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Commer->save($this->data)) {
				$this->Session->setFlash(__('The commer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The commer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Commer->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for commer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Commer->delete($id)) {
			$this->Session->setFlash(__('Commer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Commer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

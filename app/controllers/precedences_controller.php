<?php
class PrecedencesController extends AppController {

	var $name = 'Precedences';

	function index() {
		$this->Precedence->recursive = 0;
		$this->set('precedences', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Impacto invalido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('precedence', $this->Precedence->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Precedence->create();
			if ($this->Precedence->save($this->data)) {
				$this->Session->setFlash(__('El impacto ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El impacto no ha sido guardado. Intento de nuevo', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Impacto invalido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Precedence->save($this->data)) {
				$this->Session->setFlash(__('El impacto ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El impacto no ha sido guardado. Intento de nuevo', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Precedence->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalido Id del impacto.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Precedence->delete($id)) {
			$this->Session->setFlash(__('Impacto eliminado', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Impacto no ha sido eliminado', true));
		$this->redirect(array('action' => 'index'));
	}
}

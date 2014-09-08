<?php
class DetailsController extends AppController {

	var $name = 'Details';

	function index() {
		$this->Detail->recursive = 0;
		$this->set('details', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalido detalle', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('detail', $this->Detail->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Detail->create();
			if ($this->Detail->save($this->data)) {
				$this->Session->setFlash(__('El detalle ha sido salvado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El detalle no ha sido guardado. Favor, intentelo de nuevo ', true));
			}
		}
		$tickets = $this->Detail->Ticket->find('list');
		$this->set(compact('tickets'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalido detalle', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Detail->save($this->data)) {
				$this->Session->setFlash(__('El detalle ha sido salvado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El detalle no ha sido guardado. Favor, intentelo de nuevo ', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Detail->read(null, $id);
		}
		$tickets = $this->Detail->Ticket->find('list');
		$this->set(compact('tickets'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalido id de detalle', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Detail->delete($id)) {
			$this->Session->setFlash(__('Detalle eliminado', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Detalle no ha sido eliminado', true));
		$this->redirect(array('action' => 'index'));
}
	}

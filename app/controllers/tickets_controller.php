<?php
class TicketsController extends AppController {

	var $name = 'Tickets';

	function index() {
		$this->Ticket->recursive = 0;
		$this->set('tickets', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ticket invalido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ticket', $this->Ticket->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Ticket->create();
			if ($this->Ticket->save($this->data)) {
				$this->Session->setFlash(__('El ticket ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El ticket no ha sido guadado. Favor intente de nuevo', true));
			}
		}
		$commers = $this->Ticket->Commer->find('list');
		$realizations = $this->Ticket->Realization->find('list');
		$precedences = $this->Ticket->Precedence->find('list');
		$employees = $this->Ticket->Employee->find('list');
		$this->set(compact('commers', 'realizations', 'precedences', 'employees'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Ticket invalido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ticket->save($this->data)) {
				$this->Session->setFlash(__('El ticket ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El ticket no ha sido guadado. Favor intente de nuevo', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ticket->read(null, $id);
		}
		$commers = $this->Ticket->Commer->find('list');
		$realizations = $this->Ticket->Realization->find('list');
		$precedences = $this->Ticket->Precedence->find('list');
		$employees = $this->Ticket->Employee->find('list');
		$this->set(compact('commers', 'realizations', 'precedences', 'employees'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ticket invalido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ticket->delete($id)) {
			$this->Session->setFlash(__('Ticket eliminado', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ticket no ha sido eliminado', true));
		$this->redirect(array('action' => 'index'));
	}
}

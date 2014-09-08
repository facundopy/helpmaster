<?php
class EmployeesController extends AppController {

	var $name = 'Employees';

	function index() {
		$this->Employee->recursive = 0;
		$this->set('employees', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalido empleado', true));
			$this->redirect(array('action' => 'index'));
			
		}
		$this->set('employee', $this->Employee->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Employee->create();
			if ($this->Employee->save($this->data)) {
				$this->Session->setFlash(__('El empleado ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El empleado no ha sigo guardado. Intento de nuevo.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalido empleado', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Employee->save($this->data)) {
				$this->Session->setFlash(__('El empleado ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El empleado no ha sigo guardado. Intento de nuevo.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Employee->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalido ID del empleado.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Employee->delete($id)) {
			$this->Session->setFlash(__('Empleado eliminado.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Empleado no eliminado.', true));
		$this->redirect(array('action' => 'index'));
	}
}

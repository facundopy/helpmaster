<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Ticket', true), array('controller' => 'tickets','action' =>'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Cliente', true), array('controller' => 'commers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Cliente', true), array('controller' => 'commers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar estados', true), array('controller' => 'realizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo estado', true), array('controller' => 'realizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado de impacto', true), array('controller' => 'precedences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Precedence', true), array('controller' => 'precedences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado empleado', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo empleado', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado detalles', true), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo detalle', true), array('controller' => 'details', 'action' => 'add')); ?> </li>
	</ul>
</div>
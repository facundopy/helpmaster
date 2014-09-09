<div class="tickets form">
<?php echo $this->Form->create('Ticket');?>
	<fieldset>
		<legend><?php __('Editar el ticket'); ?></legend>
	<?php
		echo $this->Form->input('employee_id');
		echo $this->Form->input('commer_id');
		echo $this->Form->input('realization_id');
		echo $this->Form->input('precedence_id');
		echo $this->Form->input('date');
		echo $this->Form->input('Descripcion');
		echo $this->Form->input('id');
	
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Ticket.id')), null, sprintf(__('Esta seguro de eliminar el tickets # %s?', true), $this->Form->value('Ticket.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Tickets', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Clientes', true), array('controller' => 'commers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente', true), array('controller' => 'commers', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('Listar Estado', true), array('controller' => 'realizations', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('Nuevo Estado', true), array('controller' => 'realizations', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('Listar Impacto', true), array('controller' => 'precedences', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('Nuevo Impacto', true), array('controller' => 'precedences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Empleados', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Empleados', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Detalles', true), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Detalle', true), array('controller' => 'details', 'action' => 'add')); ?> </li>
	</ul>
</div>
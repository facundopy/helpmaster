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
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Ticket.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Ticket.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tickets', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Commers', true), array('controller' => 'commers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commer', true), array('controller' => 'commers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Realizations', true), array('controller' => 'realizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Realization', true), array('controller' => 'realizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Precedences', true), array('controller' => 'precedences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Precedence', true), array('controller' => 'precedences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Details', true), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail', true), array('controller' => 'details', 'action' => 'add')); ?> </li>
	</ul>
</div>
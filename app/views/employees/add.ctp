<div class="employees form">
<?php echo $this->Form->create('Employee');?>
	<fieldset>
		<legend><?php __('Agregar un empleado'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('telefono');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar empleado', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Tickets', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Ticket', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="tickets form">
<?php echo $this->Form->create('Ticket');?>
	<fieldset>
		<legend><?php __('Agregar un nuevo ticket'); ?></legend>
	<?php
		echo $this->Form->input('employee_id');
		echo $this->Form->input('commer_id');
		echo $this->Form->input('realization_id');
		echo $this->Form->input('precedence_id');
		echo $this->Form->input('date');
		echo $this->Form->input('Descripcion');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Tickets', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Cliente', true), array('controller' => 'commers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Cliente', true), array('controller' => 'commers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Estado', true), array('controller' => 'realizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Estado', true), array('controller' => 'realizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Impacto', true), array('controller' => 'precedences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Impacto', true), array('controller' => 'precedences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleado', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Empleado', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Detalle', true), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo detalle', true), array('controller' => 'details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="details form">
<?php echo $this->Form->create('Detalles');?>
	<fieldset>
		<legend><?php __('Nuevo detalles'); ?></legend>
	<?php
		echo $this->Form->input('ticket_id');
		echo $this->Form->input('detalle');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar detalles', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar tickets', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo tickets', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
	</ul>
</div>
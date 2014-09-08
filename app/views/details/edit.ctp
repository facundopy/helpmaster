<div class="details form">
<?php echo $this->Form->create('Detail');?>
	<fieldset>
		<legend><?php __('Editar detalles'); ?></legend>
	<?php
		echo $this->Form->input('ticket_id');
		echo $this->Form->input('detalle');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Detail.id')), null, sprintf(__('Esta seguro de eliminar este registro # %s?', true), $this->Form->value('Detail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Detalles', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Tickets', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Ticket', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
	</ul>
</div>
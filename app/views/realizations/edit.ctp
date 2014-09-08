<div class="realizations form">
<?php echo $this->Form->create('Realization');?>
	<fieldset>
		<legend><?php __('Editar impacto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Realization.id')), null, sprintf(__('Esta seguro de elimar el registro # %s?', true), $this->Form->value('Realization.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Estado', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Tickets', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Ticket', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
	</ul>
</div>
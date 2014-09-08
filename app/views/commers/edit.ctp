<div class="commers form">
<?php echo $this->Form->create('Commer');?>
	<fieldset>
		<legend><?php __('Editar cliente'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('lastName');
		echo $this->Form->input('company');
		echo $this->Form->input('phone');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Commer.id')), null, sprintf(__('Esta seguro de eliminar # %s?', true), $this->Form->value('Commer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar clientes', true), array('action' => 'index'));?></li>
	</ul>
</div>
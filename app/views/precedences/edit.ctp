<div class="precedences form">
<?php echo $this->Form->create('Precedence');?>
	<fieldset>
		<legend><?php __('Editar impacto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Precedence.id')), null, sprintf(__('Esta seguro de Eliminar el registro # %s?', true), $this->Form->value('Precedence.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar impacto', true), array('action' => 'index'));?></li>
	</ul>
</div>
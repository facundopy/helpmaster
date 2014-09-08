<div class="precedences form">
<?php echo $this->Form->create('Precedence');?>
	<fieldset>
		<legend><?php __('Nuevo Impacto'); ?></legend>
	<?php
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar impacto', true), array('action' => 'index'));?></li>
	</ul>
</div>
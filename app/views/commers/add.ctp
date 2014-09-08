<div class="commers form">
<?php echo $this->Form->create('Commer');?>
	<fieldset>
		<legend><?php __('Agregar un cliente'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('lastName');
		echo $this->Form->input('company');
		echo $this->Form->input('phone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar clientes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tickets', true), array('action' => 'index'));?></li>
	</ul>
</div>
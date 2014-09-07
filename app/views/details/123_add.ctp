<div class="details form">
<?php echo $this->Form->create('Detail');?>
	<fieldset>
		<legend><?php __('123 Add Detail'); ?></legend>
	<?php
		echo $this->Form->input('ticket_id');
		echo $this->Form->input('detalle');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Details', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tickets', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
	</ul>
</div>
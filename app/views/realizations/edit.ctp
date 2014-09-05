<div class="realizations form">
<?php echo $this->Form->create('Realization');?>
	<fieldset>
		<legend><?php __('Edit Realization'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Realization.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Realization.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Realizations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tickets', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
	</ul>
</div>
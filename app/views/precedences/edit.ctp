<div class="precedences form">
<?php echo $this->Form->create('Precedence');?>
	<fieldset>
		<legend><?php __('Edit Precedence'); ?></legend>
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Precedence.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Precedence.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Precedences', true), array('action' => 'index'));?></li>
	</ul>
</div>
<div class="precedences form">
<?php echo $this->Form->create('Precedence');?>
	<fieldset>
		<legend><?php __('Add Precedence'); ?></legend>
	<?php
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Precedences', true), array('action' => 'index'));?></li>
	</ul>
</div>
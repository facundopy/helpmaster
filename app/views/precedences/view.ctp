<div class="precedences view">
<h2><?php  __('Precedence');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $precedence['Precedence']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $precedence['Precedence']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Precedence', true), array('action' => 'edit', $precedence['Precedence']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Precedence', true), array('action' => 'delete', $precedence['Precedence']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $precedence['Precedence']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Precedences', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Precedence', true), array('action' => 'add')); ?> </li>
	</ul>
</div>

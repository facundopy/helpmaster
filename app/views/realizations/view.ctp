	<div class="realizations view">
<h2><?php  __('Estados');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $realization['Realization']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $realization['Realization']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar estados', true), array('action' => 'edit', $realization['Realization']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Estado', true), array('action' => 'delete', $realization['Realization']['id']), null, sprintf(__('Esta seguro de eliminar el registro # %s?', true), $realization['Realization']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar estado', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo estado', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tickets', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Ticket', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Tickets');?></h3>
	<?php if (!empty($realization['Ticket'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Commers Id'); ?></th>
		<th><?php __('Realization Id'); ?></th>
		<th><?php __('Date'); ?></th>
		<th><?php __('Precedencia Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($realization['Ticket'] as $ticket):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ticket['id'];?></td>
			<td><?php echo $ticket['commer_id'];?></td>
			<td><?php echo $ticket['realization_id'];?></td>
			<td><?php echo $ticket['date'];?></td>
			
			<td><?php echo $this->Html->link($ticket['Precedence']['description'] )?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'tickets', 'action' => 'view', $ticket['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'tickets', 'action' => 'edit', $ticket['id'])); ?>
				<?php echo $this->Html->link(__('Eliminar', true), array('controller' => 'tickets', 'action' => 'delete', $ticket['id']), null, sprintf(__('Esta seguro de eliminar el registro # %s?', true), $ticket['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


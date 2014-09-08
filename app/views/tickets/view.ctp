<div class="tickets view">
<h2><?php  __('Ticket');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cliente'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($ticket['Commer']['name'], array('controller' => 'commers', 'action' => 'view', $ticket['Commer']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($ticket['Realization']['description'], array('controller' => 'realizations', 'action' => 'view', $ticket['Realization']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prioridad'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($ticket['Precedence']['description'], array('controller' => 'precedences', 'action' => 'view', $ticket['Precedence']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Apertura'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticket['Ticket']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticket['Ticket']['Descripcion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticket['Ticket']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Asignado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($ticket['Employee']['nombre'], array('controller' => 'employees', 'action' => 'view', $ticket['Employee']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Ticket', true), array('action' => 'edit', $ticket['Ticket']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Ticket', true), array('action' => 'delete', $ticket['Ticket']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ticket['Ticket']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Tickets', true), array('action' => 'index')); ?> </li>
		<!--
		<li><?php echo $this->Html->link(__('New Ticket', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commers', true), array('controller' => 'commers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commer', true), array('controller' => 'commers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Realizations', true), array('controller' => 'realizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Realization', true), array('controller' => 'realizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Precedences', true), array('controller' => 'precedences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Precedence', true), array('controller' => 'precedences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Details', true), array('controller' => 'details', 'action' => 'index')); ?> </li>
		-->
		<li><?php echo $this->Html->link(__('Nuevo detalle', true), array('controller' => 'details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Detalles del ticket');?></h3>
	<?php if (!empty($ticket['Detail'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Identificacion'); ?></th>
		<th><?php __('Detalles'); ?></th>
		<!--<th><?php __('Id'); ?></th>-->
		<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ticket['Detail'] as $detail):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $detail['ticket_id'];?></td>
			<td><?php echo $detail['detalle'];?></td>
			<!--<td><?php echo $detail['id'];?></td>-->
			<td class="actions">
				
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'details', 'action' => 'edit', $detail['id'])); ?>
				<?php echo $this->Html->link(__('Eliminar', true), array('controller' => 'details', 'action' => 'delete', $detail['id']), null, sprintf(__('Seguro que queres eliminar este registro # %s?', true), $detail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo detalle', true), array('controller' => 'details', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

<div class="employees view">
<h2><?php  __('Datos del empleado');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Apellido'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['apellido']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Telefono'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['telefono']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar datos del empleado', true), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Delete Employee', true), array('action' => 'delete', $employee['Employee']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employee['Employee']['id'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listado de empleados', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo empleado', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado de ticket', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo ticket', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Ticket atendidos');?></h3>
	<?php if (!empty($employee['Ticket'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php __('Commers Id'); ?></th>
		<th><?php __('Realization Id'); ?></th>
		<th><?php __('Precedences Id'); ?></th>-->
		<th><?php __('Date'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<!--<th><?php __('Id'); ?></th>
		<th><?php __('Employee Id'); ?></th>-->
		<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['Ticket'] as $ticket):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!--<td><?php echo $ticket['commers_id'];?></td>
			<td><?php echo $ticket['realization_id'];?></td>
			<td><?php echo $ticket['precedences_id'];?></td>-->
			<td><?php echo $ticket['date'];?></td>
			<td><?php echo $ticket['Descripcion'];?></td>
			<!--<td><?php echo $ticket['id'];?></td>
			<td><?php echo $ticket['employee_id'];?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'tickets', 'action' => 'view', $ticket['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'tickets', 'action' => 'edit', $ticket['id'])); ?>
				<?php echo $this->Html->link(__('Eliminar', true), array('controller' => 'tickets', 'action' => 'delete', $ticket['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ticket['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>

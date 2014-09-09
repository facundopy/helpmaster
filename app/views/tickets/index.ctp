<div class="tickets index">
	<h2><?php __('Tickets');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('employee_id');?></th>
			<th><?php echo $this->Paginator->sort('commer_id');?></th>
			<th><?php echo $this->Paginator->sort('Estado');?></th>
			<th><?php echo $this->Paginator->sort('Impacto');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('Descripcion');?></th>
			
			
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tickets as $ticket):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ticket['Ticket']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ticket['Commer']['name'], array('controller' => 'commers', 'action' => 'view', $ticket['Commer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ticket['Employee']['nombre'], array('controller' => 'employees', 'action' => 'view', $ticket['Employee']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ticket['Realization']['description'], array('controller' => 'realizations', 'action' => 'view', $ticket['Realization']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ticket['Precedence']['description'], array('controller' => 'precedences', 'action' => 'view', $ticket['Precedence']['id'])); ?>
		</td>
		<td><?php echo $ticket['Ticket']['date']; ?>&nbsp;</td>
		<td><?php echo $ticket['Ticket']['Descripcion']; ?>&nbsp;</td>
		
		
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $ticket['Ticket']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $ticket['Ticket']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $ticket['Ticket']['id']), null, sprintf(__('Desea eliminar el ticket? # %s?', true), $ticket['Ticket']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actiones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Ticket', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Cliente', true), array('controller' => 'commers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Cliente', true), array('controller' => 'commers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar estados', true), array('controller' => 'realizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo estado', true), array('controller' => 'realizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado de impacto', true), array('controller' => 'precedences', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Precedence', true), array('controller' => 'precedences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado empleado', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo empleado', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('Listado detalles', true), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('Nuevo detalle', true), array('controller' => 'details', 'action' => 'add')); ?> </li>
	</ul>
</div>
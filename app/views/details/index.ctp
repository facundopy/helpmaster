<div class="details index">
	<h2><?php __('Detailles del tickets');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ticket_id');?></th>
			<th><?php echo $this->Paginator->sort('detalle');?></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($details as $detail):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($detail['Ticket']['id'], array('controller' => 'tickets', 'action' => 'view', $detail['Ticket']['id'])); ?>
		</td>
		<td><?php echo $detail['Detail']['detalle']; ?>&nbsp;</td>
		<td><?php echo $detail['Detail']['id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $detail['Detail']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $detail['Detail']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $detail['Detail']['id']), null, sprintf(__('Esta seguro de eliminar el registro # %s?', true), $detail['Detail']['id'])); ?>
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
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo detalles', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Tickets', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Ticket', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
	</ul>
</div>
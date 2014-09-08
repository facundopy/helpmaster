<div class="precedences index">
	<h2><?php __('Impacto');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($precedences as $precedence):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $precedence['Precedence']['id']; ?>&nbsp;</td>
		<td><?php echo $precedence['Precedence']['description']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $precedence['Precedence']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $precedence['Precedence']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $precedence['Precedence']['id']), null, sprintf(__('Esta seguro de elimiar el registro # %s?', true), $precedence['Precedence']['id'])); ?>
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
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo impacto', true), array('action' => 'add')); ?></li>
	</ul>
</div>
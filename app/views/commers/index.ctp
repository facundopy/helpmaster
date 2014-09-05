<div class="commers index">
	<h2><?php __('Clientes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('lastName');?></th>
			<th><?php echo $this->Paginator->sort('company');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($commers as $commer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $commer['Commer']['name']; ?>&nbsp;</td>
		<td><?php echo $commer['Commer']['lastName']; ?>&nbsp;</td>
		<td><?php echo $commer['Commer']['company']; ?>&nbsp;</td>
		<td><?php echo $commer['Commer']['phone']; ?>&nbsp;</td>
		<td><?php echo $commer['Commer']['id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $commer['Commer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $commer['Commer']['id'])); ?>
			<!--<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $commer['Commer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $commer['Commer']['id'])); ?>-->
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina %page% de %pages%, mostrado %current%,  %count% registros guardados en total, Empezando en %start%, finalizaPagina 1 de 1, mostrado 2 guardados out of 2 total, starting on record 1, ending on 2 on %end%', true)
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
		<li><?php echo $this->Html->link(__('Nuevo cliente', true), array('action' => 'add')); ?></li>
	</ul>
</div>
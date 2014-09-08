<div class="details view">
<h2><?php  __('Detail');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ticket'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($detail['Ticket']['id'], array('controller' => 'tickets', 'action' => 'view', $detail['Ticket']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Detalle'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $detail['Detail']['detalle']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $detail['Detail']['id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar detalles', true), array('action' => 'edit', $detail['Detail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar detalles', true), array('action' => 'delete', $detail['Detail']['id']), null, sprintf(__('Esta seguro de elimintar el rigistro # %s?', true), $detail['Detail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de detalles', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo detalle', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Tickets', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Ticket', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
	</ul>
</div>

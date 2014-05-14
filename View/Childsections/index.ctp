<div class="childsections index">
	<h2><?php echo __('Childsections'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('order'); ?></th>
			<th><?php echo $this->Paginator->sort('fathersection_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($childsections as $childsection): ?>
	<tr>
		<td><?php echo h($childsection['Childsection']['id']); ?>&nbsp;</td>
		<td><?php echo h($childsection['Childsection']['name']); ?>&nbsp;</td>
		<td><?php echo h($childsection['Childsection']['description']); ?>&nbsp;</td>
		<td><?php echo h($childsection['Childsection']['status']); ?>&nbsp;</td>
		<td><?php echo h($childsection['Childsection']['order']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($childsection['Fathersection']['name'], array('controller' => 'fathersections', 'action' => 'view', $childsection['Fathersection']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $childsection['Childsection']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $childsection['Childsection']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $childsection['Childsection']['id']), null, __('Are you sure you want to delete # %s?', $childsection['Childsection']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Childsection'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Fathersections'), array('controller' => 'fathersections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fathersection'), array('controller' => 'fathersections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Freaturedproducts'), array('controller' => 'freaturedproducts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Freaturedproduct'), array('controller' => 'freaturedproducts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mastersections'), array('controller' => 'mastersections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mastersection'), array('controller' => 'mastersections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>

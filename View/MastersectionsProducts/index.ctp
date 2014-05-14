<div class="mastersectionsProducts index">
	<h2><?php echo __('Mastersections Products'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('mastersections_id'); ?></th>
			<th><?php echo $this->Paginator->sort('products_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mastersectionsProducts as $mastersectionsProduct): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($mastersectionsProduct['Mastersections']['name'], array('controller' => 'mastersections', 'action' => 'view', $mastersectionsProduct['Mastersections']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($mastersectionsProduct['Products']['name'], array('controller' => 'products', 'action' => 'view', $mastersectionsProduct['Products']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mastersectionsProduct['MastersectionsProduct']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mastersectionsProduct['MastersectionsProduct']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mastersectionsProduct['MastersectionsProduct']['id']), null, __('Are you sure you want to delete # %s?', $mastersectionsProduct['MastersectionsProduct']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mastersections Product'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mastersections'), array('controller' => 'mastersections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mastersections'), array('controller' => 'mastersections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>

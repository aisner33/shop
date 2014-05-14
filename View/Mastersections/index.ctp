<div class="mastersections index">
	<h2><?php echo __('Mastersections'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('order'); ?></th>
			<th><?php echo $this->Paginator->sort('section_id'); ?></th>
			<th><?php echo $this->Paginator->sort('childsection_id'); ?></th>
			<th><?php echo $this->Paginator->sort('startValidity'); ?></th>
			<th><?php echo $this->Paginator->sort('endValidity'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('otherText'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mastersections as $mastersection): ?>
	<tr>
		<td><?php echo h($mastersection['Mastersection']['id']); ?>&nbsp;</td>
		<td><?php echo h($mastersection['Mastersection']['name']); ?>&nbsp;</td>
		<td><?php echo h($mastersection['Mastersection']['description']); ?>&nbsp;</td>
		<td><?php echo h($mastersection['Mastersection']['status']); ?>&nbsp;</td>
		<td><?php echo h($mastersection['Mastersection']['order']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mastersection['Section']['name'], array('controller' => 'sections', 'action' => 'view', $mastersection['Section']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($mastersection['Childsection']['name'], array('controller' => 'childsections', 'action' => 'view', $mastersection['Childsection']['id'])); ?>
		</td>
		<td><?php echo h($mastersection['Mastersection']['startValidity']); ?>&nbsp;</td>
		<td><?php echo h($mastersection['Mastersection']['endValidity']); ?>&nbsp;</td>
		<td><?php echo h($mastersection['Mastersection']['image']); ?>&nbsp;</td>
		<td><?php echo h($mastersection['Mastersection']['otherText']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mastersection['Mastersection']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mastersection['Mastersection']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mastersection['Mastersection']['id']), null, __('Are you sure you want to delete # %s?', $mastersection['Mastersection']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mastersection'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Childsections'), array('controller' => 'childsections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Childsection'), array('controller' => 'childsections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Freaturedproducts'), array('controller' => 'freaturedproducts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Freaturedproduct'), array('controller' => 'freaturedproducts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>

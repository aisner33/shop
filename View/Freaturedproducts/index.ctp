<div class="freaturedproducts index">
	<h2><?php echo __('Freaturedproducts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('order'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('childsection_id'); ?></th>
			<th><?php echo $this->Paginator->sort('section_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fathersection_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mastersection_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($freaturedproducts as $freaturedproduct): ?>
	<tr>
		<td><?php echo h($freaturedproduct['Freaturedproduct']['id']); ?>&nbsp;</td>
		<td><?php echo h($freaturedproduct['Freaturedproduct']['order']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($freaturedproduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $freaturedproduct['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($freaturedproduct['Childsection']['name'], array('controller' => 'childsections', 'action' => 'view', $freaturedproduct['Childsection']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($freaturedproduct['Section']['name'], array('controller' => 'sections', 'action' => 'view', $freaturedproduct['Section']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($freaturedproduct['Fathersection']['name'], array('controller' => 'fathersections', 'action' => 'view', $freaturedproduct['Fathersection']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($freaturedproduct['Mastersection']['name'], array('controller' => 'mastersections', 'action' => 'view', $freaturedproduct['Mastersection']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $freaturedproduct['Freaturedproduct']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $freaturedproduct['Freaturedproduct']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $freaturedproduct['Freaturedproduct']['id']), null, __('Are you sure you want to delete # %s?', $freaturedproduct['Freaturedproduct']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Freaturedproduct'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Childsections'), array('controller' => 'childsections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Childsection'), array('controller' => 'childsections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fathersections'), array('controller' => 'fathersections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fathersection'), array('controller' => 'fathersections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mastersections'), array('controller' => 'mastersections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mastersection'), array('controller' => 'mastersections', 'action' => 'add')); ?> </li>
	</ul>
</div>

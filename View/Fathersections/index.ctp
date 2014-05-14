<div class="fathersections index">
	<h2><?php echo __('Fathersections'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('order'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fathersections as $fathersection): ?>
	<tr>
		<td><?php echo h($fathersection['Fathersection']['id']); ?>&nbsp;</td>
		<td><?php echo h($fathersection['Fathersection']['name']); ?>&nbsp;</td>
		<td><?php echo h($fathersection['Fathersection']['description']); ?>&nbsp;</td>
		<td><?php echo h($fathersection['Fathersection']['status']); ?>&nbsp;</td>
		<td><?php echo h($fathersection['Fathersection']['order']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fathersection['Fathersection']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fathersection['Fathersection']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fathersection['Fathersection']['id']), null, __('Are you sure you want to delete # %s?', $fathersection['Fathersection']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Fathersection'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Childsections'), array('controller' => 'childsections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Childsection'), array('controller' => 'childsections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Father Sections Products'), array('controller' => 'father_sections_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Father Sections Product'), array('controller' => 'father_sections_products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Freaturedproducts'), array('controller' => 'freaturedproducts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Freaturedproduct'), array('controller' => 'freaturedproducts', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="seasons index">
	<h2><?php echo __('Seasons'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('startValidity'); ?></th>
			<th><?php echo $this->Paginator->sort('endValidity'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($seasons as $season): ?>
	<tr>
		<td><?php echo h($season['Season']['id']); ?>&nbsp;</td>
		<td><?php echo h($season['Season']['name']); ?>&nbsp;</td>
		<td><?php echo h($season['Season']['startValidity']); ?>&nbsp;</td>
		<td><?php echo h($season['Season']['endValidity']); ?>&nbsp;</td>
		<td><?php echo h($season['Season']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $season['Season']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $season['Season']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $season['Season']['id']), null, __('Are you sure you want to delete # %s?', $season['Season']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Season'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>

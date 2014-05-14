<div class="devolutions index">
	<h2><?php echo __('Devolutions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('devolutionDate'); ?></th>
			<th><?php echo $this->Paginator->sort('acceptanceDate'); ?></th>
			<th><?php echo $this->Paginator->sort('devolutionsreason_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($devolutions as $devolution): ?>
	<tr>
		<td><?php echo h($devolution['Devolution']['id']); ?>&nbsp;</td>
		<td><?php echo h($devolution['Devolution']['devolutionDate']); ?>&nbsp;</td>
		<td><?php echo h($devolution['Devolution']['acceptanceDate']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($devolution['Devolutionsreason']['id'], array('controller' => 'devolutionsreasons', 'action' => 'view', $devolution['Devolutionsreason']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $devolution['Devolution']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $devolution['Devolution']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $devolution['Devolution']['id']), null, __('Are you sure you want to delete # %s?', $devolution['Devolution']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Devolution'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Devolutionsreasons'), array('controller' => 'devolutionsreasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Devolutionsreason'), array('controller' => 'devolutionsreasons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

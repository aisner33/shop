<div class="deliverysStatusdeliveries index">
	<h2><?php echo __('Deliverys Statusdeliveries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('modification'); ?></th>
			<th><?php echo $this->Paginator->sort('delivery_id'); ?></th>
			<th><?php echo $this->Paginator->sort('statusdelivery_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($deliverysStatusdeliveries as $deliverysStatusdelivery): ?>
	<tr>
		<td><?php echo h($deliverysStatusdelivery['DeliverysStatusdelivery']['modification']); ?>&nbsp;</td>
		<td><?php echo h($deliverysStatusdelivery['DeliverysStatusdelivery']['delivery_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($deliverysStatusdelivery['Statusdelivery']['id'], array('controller' => 'statusdeliveries', 'action' => 'view', $deliverysStatusdelivery['Statusdelivery']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $deliverysStatusdelivery['DeliverysStatusdelivery']['delivery_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $deliverysStatusdelivery['DeliverysStatusdelivery']['delivery_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $deliverysStatusdelivery['DeliverysStatusdelivery']['delivery_id']), null, __('Are you sure you want to delete # %s?', $deliverysStatusdelivery['DeliverysStatusdelivery']['delivery_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Deliverys Statusdelivery'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Statusdeliveries'), array('controller' => 'statusdeliveries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Statusdelivery'), array('controller' => 'statusdeliveries', 'action' => 'add')); ?> </li>
	</ul>
</div>

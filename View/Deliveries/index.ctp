<div class="deliveries index">
	<h2><?php echo __('Deliveries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('recibeDay'); ?></th>
			<th><?php echo $this->Paginator->sort('sendDay'); ?></th>
			<th><?php echo $this->Paginator->sort('service'); ?></th>
			<th><?php echo $this->Paginator->sort('codeGuide'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($deliveries as $delivery): ?>
	<tr>
		<td><?php echo h($delivery['Delivery']['id']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['recibeDay']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['sendDay']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['service']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['codeGuide']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($delivery['User']['id'], array('controller' => 'users', 'action' => 'view', $delivery['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $delivery['Delivery']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $delivery['Delivery']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $delivery['Delivery']['id']), null, __('Are you sure you want to delete # %s?', $delivery['Delivery']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Delivery'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="stores index">
	<h2><?php echo __('Stores'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('smallDescription'); ?></th>
			<th><?php echo $this->Paginator->sort('largeDescription'); ?></th>
			<th><?php echo $this->Paginator->sort('phone1'); ?></th>
			<th><?php echo $this->Paginator->sort('phone2'); ?></th>
			<th><?php echo $this->Paginator->sort('email1'); ?></th>
			<th><?php echo $this->Paginator->sort('email2'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('cp'); ?></th>
			<th><?php echo $this->Paginator->sort('suburb'); ?></th>
			<th><?php echo $this->Paginator->sort('street'); ?></th>
			<th><?php echo $this->Paginator->sort('internalNumber'); ?></th>
			<th><?php echo $this->Paginator->sort('externalNumber'); ?></th>
			<th><?php echo $this->Paginator->sort('gallerie_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('categorystore_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($stores as $store): ?>
	<tr>
		<td><?php echo h($store['Store']['id']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['name']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['smallDescription']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['largeDescription']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['phone1']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['phone2']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['email1']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['email2']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['city']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['cp']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['suburb']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['street']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['internalNumber']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['externalNumber']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($store['Gallerie']['id'], array('controller' => 'galleries', 'action' => 'view', $store['Gallerie']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($store['State']['name'], array('controller' => 'states', 'action' => 'view', $store['State']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($store['Categorystore']['id'], array('controller' => 'categorystores', 'action' => 'view', $store['Categorystore']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $store['Store']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $store['Store']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $store['Store']['id']), null, __('Are you sure you want to delete # %s?', $store['Store']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Store'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Galleries'), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallerie'), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorystores'), array('controller' => 'categorystores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorystore'), array('controller' => 'categorystores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="offers index">
	<h2><?php echo __('Offers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('terms'); ?></th>
			<th><?php echo $this->Paginator->sort('startValidity'); ?></th>
			<th><?php echo $this->Paginator->sort('endValidity'); ?></th>
			<th><?php echo $this->Paginator->sort('dealType'); ?></th>
			<th><?php echo $this->Paginator->sort('discount'); ?></th>
			<th><?php echo $this->Paginator->sort('dealsType_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($offers as $offer): ?>
	<tr>
		<td><?php echo h($offer['Offer']['id']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['description']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['terms']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['startValidity']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['endValidity']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['dealType']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['discount']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($offer['DealsType']['id'], array('controller' => 'deals_types', 'action' => 'view', $offer['DealsType']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $offer['Offer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $offer['Offer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $offer['Offer']['id']), null, __('Are you sure you want to delete # %s?', $offer['Offer']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Offer'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Deals Types'), array('controller' => 'deals_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deals Type'), array('controller' => 'deals_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="mailingadresses index">
	<h2><?php echo __('Mailingadresses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('suburb'); ?></th>
			<th><?php echo $this->Paginator->sort('street'); ?></th>
			<th><?php echo $this->Paginator->sort('exteriorNumber'); ?></th>
			<th><?php echo $this->Paginator->sort('interiorNumber'); ?></th>
			<th><?php echo $this->Paginator->sort('reference'); ?></th>
			<th><?php echo $this->Paginator->sort('cp'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mailingadresses as $mailingadress): ?>
	<tr>
		<td><?php echo h($mailingadress['Mailingadress']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mailingadress['Country']['name'], array('controller' => 'countries', 'action' => 'view', $mailingadress['Country']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($mailingadress['State']['name'], array('controller' => 'states', 'action' => 'view', $mailingadress['State']['id'])); ?>
		</td>
		<td><?php echo h($mailingadress['Mailingadress']['suburb']); ?>&nbsp;</td>
		<td><?php echo h($mailingadress['Mailingadress']['street']); ?>&nbsp;</td>
		<td><?php echo h($mailingadress['Mailingadress']['exteriorNumber']); ?>&nbsp;</td>
		<td><?php echo h($mailingadress['Mailingadress']['interiorNumber']); ?>&nbsp;</td>
		<td><?php echo h($mailingadress['Mailingadress']['reference']); ?>&nbsp;</td>
		<td><?php echo h($mailingadress['Mailingadress']['cp']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mailingadress['User']['id'], array('controller' => 'users', 'action' => 'view', $mailingadress['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mailingadress['Mailingadress']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mailingadress['Mailingadress']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mailingadress['Mailingadress']['id']), null, __('Are you sure you want to delete # %s?', $mailingadress['Mailingadress']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mailingadress'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

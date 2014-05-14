<div class="promotioncodes index">
	<h2><?php echo __('Promotioncodes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('validityStart'); ?></th>
			<th><?php echo $this->Paginator->sort('validityEnd'); ?></th>
			<th><?php echo $this->Paginator->sort('value'); ?></th>
			<th><?php echo $this->Paginator->sort('origin'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('codeType_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($promotioncodes as $promotioncode): ?>
	<tr>
		<td><?php echo h($promotioncode['Promotioncode']['id']); ?>&nbsp;</td>
		<td><?php echo h($promotioncode['Promotioncode']['code']); ?>&nbsp;</td>
		<td><?php echo h($promotioncode['Promotioncode']['validityStart']); ?>&nbsp;</td>
		<td><?php echo h($promotioncode['Promotioncode']['validityEnd']); ?>&nbsp;</td>
		<td><?php echo h($promotioncode['Promotioncode']['value']); ?>&nbsp;</td>
		<td><?php echo h($promotioncode['Promotioncode']['origin']); ?>&nbsp;</td>
		<td><?php echo h($promotioncode['Promotioncode']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($promotioncode['CodeType']['name'], array('controller' => 'code_types', 'action' => 'view', $promotioncode['CodeType']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $promotioncode['Promotioncode']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $promotioncode['Promotioncode']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $promotioncode['Promotioncode']['id']), null, __('Are you sure you want to delete # %s?', $promotioncode['Promotioncode']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Promotioncode'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Code Types'), array('controller' => 'code_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Code Type'), array('controller' => 'code_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
	</ul>
</div>

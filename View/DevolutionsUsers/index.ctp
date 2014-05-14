<div class="devolutionsUsers index">
	<h2><?php echo __('Devolutions Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('devolutions_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($devolutionsUsers as $devolutionsUser): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($devolutionsUser['Devolutions']['id'], array('controller' => 'devolutions', 'action' => 'view', $devolutionsUser['Devolutions']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $devolutionsUser['DevolutionsUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $devolutionsUser['DevolutionsUser']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $devolutionsUser['DevolutionsUser']['id']), null, __('Are you sure you want to delete # %s?', $devolutionsUser['DevolutionsUser']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Devolutions User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Devolutions'), array('controller' => 'devolutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Devolutions'), array('controller' => 'devolutions', 'action' => 'add')); ?> </li>
	</ul>
</div>

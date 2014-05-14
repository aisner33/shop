<div class="userprofiles index">
	<h2><?php echo __('Userprofiles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname'); ?></th>
			<th><?php echo $this->Paginator->sort('genre'); ?></th>
			<th><?php echo $this->Paginator->sort('birthday'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($userprofiles as $userprofile): ?>
	<tr>
		<td><?php echo h($userprofile['Userprofile']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userprofile['User']['id'], array('controller' => 'users', 'action' => 'view', $userprofile['User']['id'])); ?>
		</td>
		<td><?php echo h($userprofile['Userprofile']['name']); ?>&nbsp;</td>
		<td><?php echo h($userprofile['Userprofile']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($userprofile['Userprofile']['genre']); ?>&nbsp;</td>
		<td><?php echo h($userprofile['Userprofile']['birthday']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userprofile['Userprofile']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userprofile['Userprofile']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userprofile['Userprofile']['id']), null, __('Are you sure you want to delete # %s?', $userprofile['Userprofile']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Userprofile'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

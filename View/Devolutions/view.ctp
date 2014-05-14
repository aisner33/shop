<div class="devolutions view">
<h2><?php echo __('Devolution'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($devolution['Devolution']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DevolutionDate'); ?></dt>
		<dd>
			<?php echo h($devolution['Devolution']['devolutionDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AcceptanceDate'); ?></dt>
		<dd>
			<?php echo h($devolution['Devolution']['acceptanceDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Devolutionsreason'); ?></dt>
		<dd>
			<?php echo $this->Html->link($devolution['Devolutionsreason']['id'], array('controller' => 'devolutionsreasons', 'action' => 'view', $devolution['Devolutionsreason']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Devolution'), array('action' => 'edit', $devolution['Devolution']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Devolution'), array('action' => 'delete', $devolution['Devolution']['id']), null, __('Are you sure you want to delete # %s?', $devolution['Devolution']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Devolutions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Devolution'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devolutionsreasons'), array('controller' => 'devolutionsreasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Devolutionsreason'), array('controller' => 'devolutionsreasons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($devolution['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($devolution['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['role']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

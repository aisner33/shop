<div class="categorystores view">
<h2><?php echo __('Categorystore'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categorystore['Categorystore']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($categorystore['Categorystore']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($categorystore['Categorystore']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categorystore'), array('action' => 'edit', $categorystore['Categorystore']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categorystore'), array('action' => 'delete', $categorystore['Categorystore']['id']), null, __('Are you sure you want to delete # %s?', $categorystore['Categorystore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorystores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorystore'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Stores'); ?></h3>
	<?php if (!empty($categorystore['Store'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('SmallDescription'); ?></th>
		<th><?php echo __('LargeDescription'); ?></th>
		<th><?php echo __('Phone1'); ?></th>
		<th><?php echo __('Phone2'); ?></th>
		<th><?php echo __('Email1'); ?></th>
		<th><?php echo __('Email2'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Cp'); ?></th>
		<th><?php echo __('Suburb'); ?></th>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('InternalNumber'); ?></th>
		<th><?php echo __('ExternalNumber'); ?></th>
		<th><?php echo __('Gallerie Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Categorystore Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categorystore['Store'] as $store): ?>
		<tr>
			<td><?php echo $store['id']; ?></td>
			<td><?php echo $store['name']; ?></td>
			<td><?php echo $store['smallDescription']; ?></td>
			<td><?php echo $store['largeDescription']; ?></td>
			<td><?php echo $store['phone1']; ?></td>
			<td><?php echo $store['phone2']; ?></td>
			<td><?php echo $store['email1']; ?></td>
			<td><?php echo $store['email2']; ?></td>
			<td><?php echo $store['city']; ?></td>
			<td><?php echo $store['cp']; ?></td>
			<td><?php echo $store['suburb']; ?></td>
			<td><?php echo $store['street']; ?></td>
			<td><?php echo $store['internalNumber']; ?></td>
			<td><?php echo $store['externalNumber']; ?></td>
			<td><?php echo $store['gallerie_id']; ?></td>
			<td><?php echo $store['state_id']; ?></td>
			<td><?php echo $store['categorystore_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stores', 'action' => 'view', $store['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stores', 'action' => 'edit', $store['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stores', 'action' => 'delete', $store['id']), null, __('Are you sure you want to delete # %s?', $store['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

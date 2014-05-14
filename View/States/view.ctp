<div class="states view">
<h2><?php echo __('State'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($state['State']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($state['State']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alias'); ?></dt>
		<dd>
			<?php echo h($state['State']['alias']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit State'), array('action' => 'edit', $state['State']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete State'), array('action' => 'delete', $state['State']['id']), null, __('Are you sure you want to delete # %s?', $state['State']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mailingadresses'), array('controller' => 'mailingadresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mailingadress'), array('controller' => 'mailingadresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mailingadresses'); ?></h3>
	<?php if (!empty($state['Mailingadress'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Suburb'); ?></th>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('ExteriorNumber'); ?></th>
		<th><?php echo __('InteriorNumber'); ?></th>
		<th><?php echo __('Reference'); ?></th>
		<th><?php echo __('Cp'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($state['Mailingadress'] as $mailingadress): ?>
		<tr>
			<td><?php echo $mailingadress['id']; ?></td>
			<td><?php echo $mailingadress['country_id']; ?></td>
			<td><?php echo $mailingadress['state_id']; ?></td>
			<td><?php echo $mailingadress['suburb']; ?></td>
			<td><?php echo $mailingadress['street']; ?></td>
			<td><?php echo $mailingadress['exteriorNumber']; ?></td>
			<td><?php echo $mailingadress['interiorNumber']; ?></td>
			<td><?php echo $mailingadress['reference']; ?></td>
			<td><?php echo $mailingadress['cp']; ?></td>
			<td><?php echo $mailingadress['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mailingadresses', 'action' => 'view', $mailingadress['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mailingadresses', 'action' => 'edit', $mailingadress['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mailingadresses', 'action' => 'delete', $mailingadress['id']), null, __('Are you sure you want to delete # %s?', $mailingadress['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mailingadress'), array('controller' => 'mailingadresses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Stores'); ?></h3>
	<?php if (!empty($state['Store'])): ?>
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
	<?php foreach ($state['Store'] as $store): ?>
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

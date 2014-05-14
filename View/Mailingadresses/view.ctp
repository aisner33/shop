<div class="mailingadresses view">
<h2><?php echo __('Mailingadress'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mailingadress['Mailingadress']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mailingadress['Country']['name'], array('controller' => 'countries', 'action' => 'view', $mailingadress['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mailingadress['State']['name'], array('controller' => 'states', 'action' => 'view', $mailingadress['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suburb'); ?></dt>
		<dd>
			<?php echo h($mailingadress['Mailingadress']['suburb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($mailingadress['Mailingadress']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ExteriorNumber'); ?></dt>
		<dd>
			<?php echo h($mailingadress['Mailingadress']['exteriorNumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('InteriorNumber'); ?></dt>
		<dd>
			<?php echo h($mailingadress['Mailingadress']['interiorNumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reference'); ?></dt>
		<dd>
			<?php echo h($mailingadress['Mailingadress']['reference']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cp'); ?></dt>
		<dd>
			<?php echo h($mailingadress['Mailingadress']['cp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mailingadress['User']['id'], array('controller' => 'users', 'action' => 'view', $mailingadress['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mailingadress'), array('action' => 'edit', $mailingadress['Mailingadress']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mailingadress'), array('action' => 'delete', $mailingadress['Mailingadress']['id']), null, __('Are you sure you want to delete # %s?', $mailingadress['Mailingadress']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mailingadresses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mailingadress'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

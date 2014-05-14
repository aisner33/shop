<div class="userprofiles view">
<h2><?php echo __('Userprofile'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userprofile['Userprofile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userprofile['User']['id'], array('controller' => 'users', 'action' => 'view', $userprofile['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($userprofile['Userprofile']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($userprofile['Userprofile']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genre'); ?></dt>
		<dd>
			<?php echo h($userprofile['Userprofile']['genre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthday'); ?></dt>
		<dd>
			<?php echo h($userprofile['Userprofile']['birthday']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Userprofile'), array('action' => 'edit', $userprofile['Userprofile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Userprofile'), array('action' => 'delete', $userprofile['Userprofile']['id']), null, __('Are you sure you want to delete # %s?', $userprofile['Userprofile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Userprofiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Userprofile'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

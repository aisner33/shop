<div class="guestsUsers view">
<h2><?php echo __('Guests User'); ?></h2>
	<dl>
		<dt><?php echo __('Guest'); ?></dt>
		<dd>
			<?php echo $this->Html->link($guestsUser['Guest']['name'], array('controller' => 'guests', 'action' => 'view', $guestsUser['Guest']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($guestsUser['User']['id'], array('controller' => 'users', 'action' => 'view', $guestsUser['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Guests User'), array('action' => 'edit', $guestsUser['GuestsUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Guests User'), array('action' => 'delete', $guestsUser['GuestsUser']['id']), null, __('Are you sure you want to delete # %s?', $guestsUser['GuestsUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Guests Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guests User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guests'), array('controller' => 'guests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

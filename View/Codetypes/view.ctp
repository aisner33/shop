<div class="codetypes view">
<h2><?php echo __('Codetype'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($codetype['Codetype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($codetype['Codetype']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($codetype['Codetype']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Codetype'), array('action' => 'edit', $codetype['Codetype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Codetype'), array('action' => 'delete', $codetype['Codetype']['id']), null, __('Are you sure you want to delete # %s?', $codetype['Codetype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Codetypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Codetype'), array('action' => 'add')); ?> </li>
	</ul>
</div>

<div class="dealstypes view">
<h2><?php echo __('Dealstype'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dealstype['Dealstype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($dealstype['Dealstype']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($dealstype['Dealstype']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dealstype'), array('action' => 'edit', $dealstype['Dealstype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dealstype'), array('action' => 'delete', $dealstype['Dealstype']['id']), null, __('Are you sure you want to delete # %s?', $dealstype['Dealstype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dealstypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dealstype'), array('action' => 'add')); ?> </li>
	</ul>
</div>

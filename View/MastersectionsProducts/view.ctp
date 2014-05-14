<div class="mastersectionsProducts view">
<h2><?php echo __('Mastersections Product'); ?></h2>
	<dl>
		<dt><?php echo __('Mastersections'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mastersectionsProduct['Mastersections']['name'], array('controller' => 'mastersections', 'action' => 'view', $mastersectionsProduct['Mastersections']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Products'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mastersectionsProduct['Products']['name'], array('controller' => 'products', 'action' => 'view', $mastersectionsProduct['Products']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mastersections Product'), array('action' => 'edit', $mastersectionsProduct['MastersectionsProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mastersections Product'), array('action' => 'delete', $mastersectionsProduct['MastersectionsProduct']['id']), null, __('Are you sure you want to delete # %s?', $mastersectionsProduct['MastersectionsProduct']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mastersections Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mastersections Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mastersections'), array('controller' => 'mastersections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mastersections'), array('controller' => 'mastersections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="devolutionsUsers view">
<h2><?php echo __('Devolutions User'); ?></h2>
	<dl>
		<dt><?php echo __('Devolutions'); ?></dt>
		<dd>
			<?php echo $this->Html->link($devolutionsUser['Devolutions']['id'], array('controller' => 'devolutions', 'action' => 'view', $devolutionsUser['Devolutions']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Devolutions User'), array('action' => 'edit', $devolutionsUser['DevolutionsUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Devolutions User'), array('action' => 'delete', $devolutionsUser['DevolutionsUser']['id']), null, __('Are you sure you want to delete # %s?', $devolutionsUser['DevolutionsUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Devolutions Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Devolutions User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devolutions'), array('controller' => 'devolutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Devolutions'), array('controller' => 'devolutions', 'action' => 'add')); ?> </li>
	</ul>
</div>

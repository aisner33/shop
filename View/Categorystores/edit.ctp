<div class="categorystores form">
<?php echo $this->Form->create('Categorystore'); ?>
	<fieldset>
		<legend><?php echo __('Edit Categorystore'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Categorystore.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Categorystore.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categorystores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
	</ul>
</div>

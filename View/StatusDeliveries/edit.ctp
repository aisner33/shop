<div class="statusDeliveries form">
<?php echo $this->Form->create('StatusDelivery'); ?>
	<fieldset>
		<legend><?php echo __('Edit Status Delivery'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('status');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StatusDelivery.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('StatusDelivery.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Status Deliveries'), array('action' => 'index')); ?></li>
	</ul>
</div>

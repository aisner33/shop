<div class="statusDeliveries form">
<?php echo $this->Form->create('StatusDelivery'); ?>
	<fieldset>
		<legend><?php echo __('Add Status Delivery'); ?></legend>
	<?php
		echo $this->Form->input('status');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Status Deliveries'), array('action' => 'index')); ?></li>
	</ul>
</div>

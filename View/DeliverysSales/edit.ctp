<div class="deliverysSales form">
<?php echo $this->Form->create('DeliverysSale'); ?>
	<fieldset>
		<legend><?php echo __('Edit Deliverys Sale'); ?></legend>
	<?php
		echo $this->Form->input('sale_id');
		echo $this->Form->input('delivery_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DeliverysSale.sale_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DeliverysSale.sale_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Deliverys Sales'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Deliveries'), array('controller' => 'deliveries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delivery'), array('controller' => 'deliveries', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="deliverysStatusdeliveries form">
<?php echo $this->Form->create('DeliverysStatusdelivery'); ?>
	<fieldset>
		<legend><?php echo __('Add Deliverys Statusdelivery'); ?></legend>
	<?php
		echo $this->Form->input('modification');
		echo $this->Form->input('statusdelivery_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Deliverys Statusdeliveries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Statusdeliveries'), array('controller' => 'statusdeliveries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Statusdelivery'), array('controller' => 'statusdeliveries', 'action' => 'add')); ?> </li>
	</ul>
</div>

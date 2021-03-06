<div class="offers form">
<?php echo $this->Form->create('Offer'); ?>
	<fieldset>
		<legend><?php echo __('Add Offer'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('description');
		echo $this->Form->input('terms');
		echo $this->Form->input('startValidity');
		echo $this->Form->input('endValidity');
		echo $this->Form->input('dealType');
		echo $this->Form->input('discount');
		echo $this->Form->input('dealsType_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Offers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Deals Types'), array('controller' => 'deals_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deals Type'), array('controller' => 'deals_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
	</ul>
</div>

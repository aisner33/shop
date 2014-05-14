<div class="mastersectionsProducts form">
<?php echo $this->Form->create('MastersectionsProduct'); ?>
	<fieldset>
		<legend><?php echo __('Add Mastersections Product'); ?></legend>
	<?php
		echo $this->Form->input('mastersections_id');
		echo $this->Form->input('products_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mastersections Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mastersections'), array('controller' => 'mastersections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mastersections'), array('controller' => 'mastersections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>

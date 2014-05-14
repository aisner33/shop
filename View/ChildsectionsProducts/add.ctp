<div class="childsectionsProducts form">
<?php echo $this->Form->create('ChildsectionsProduct'); ?>
	<fieldset>
		<legend><?php echo __('Add Childsections Product'); ?></legend>
	<?php
		echo $this->Form->input('childSection_id');
		echo $this->Form->input('product_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Childsections Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Child Sections'), array('controller' => 'child_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Child Section'), array('controller' => 'child_sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>

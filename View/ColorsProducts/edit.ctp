<div class="colorsProducts form">
<?php echo $this->Form->create('ColorsProduct'); ?>
	<fieldset>
		<legend><?php echo __('Edit Colors Product'); ?></legend>
	<?php
		echo $this->Form->input('color_id');
		echo $this->Form->input('product_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ColorsProduct.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ColorsProduct.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Colors Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Colors'), array('controller' => 'colors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Color'), array('controller' => 'colors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>

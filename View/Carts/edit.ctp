<div class="carts form">
<?php echo $this->Form->create('Cart'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cart'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('added');
		echo $this->Form->input('quantity');
		echo $this->Form->input('color_id');
		echo $this->Form->input('size_id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cart.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Cart.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Carts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Colors'), array('controller' => 'colors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Color'), array('controller' => 'colors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sizes'), array('controller' => 'sizes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Size'), array('controller' => 'sizes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="productsWishlists form">
<?php echo $this->Form->create('ProductsWishlist'); ?>
	<fieldset>
		<legend><?php echo __('Add Products Wishlist'); ?></legend>
	<?php
		echo $this->Form->input('products_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Products Wishlists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>

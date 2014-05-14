<div class="productsWishlists form">
<?php echo $this->Form->create('ProductsWishlist'); ?>
	<fieldset>
		<legend><?php echo __('Edit Products Wishlist'); ?></legend>
	<?php
		echo $this->Form->input('wishlists_id');
		echo $this->Form->input('products_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProductsWishlist.wishlists_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProductsWishlist.wishlists_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Products Wishlists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>

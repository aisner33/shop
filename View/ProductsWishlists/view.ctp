<div class="productsWishlists view">
<h2><?php echo __('Products Wishlist'); ?></h2>
	<dl>
		<dt><?php echo __('Wishlists Id'); ?></dt>
		<dd>
			<?php echo h($productsWishlist['ProductsWishlist']['wishlists_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Products'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productsWishlist['Products']['name'], array('controller' => 'products', 'action' => 'view', $productsWishlist['Products']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Products Wishlist'), array('action' => 'edit', $productsWishlist['ProductsWishlist']['wishlists_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Products Wishlist'), array('action' => 'delete', $productsWishlist['ProductsWishlist']['wishlists_id']), null, __('Are you sure you want to delete # %s?', $productsWishlist['ProductsWishlist']['wishlists_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products Wishlists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products Wishlist'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>

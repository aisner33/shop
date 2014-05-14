<div class="productsWishlists index">
	<h2><?php echo __('Products Wishlists'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('wishlists_id'); ?></th>
			<th><?php echo $this->Paginator->sort('products_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productsWishlists as $productsWishlist): ?>
	<tr>
		<td><?php echo h($productsWishlist['ProductsWishlist']['wishlists_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productsWishlist['Products']['name'], array('controller' => 'products', 'action' => 'view', $productsWishlist['Products']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productsWishlist['ProductsWishlist']['wishlists_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productsWishlist['ProductsWishlist']['wishlists_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productsWishlist['ProductsWishlist']['wishlists_id']), null, __('Are you sure you want to delete # %s?', $productsWishlist['ProductsWishlist']['wishlists_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Products Wishlist'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>

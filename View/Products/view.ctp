<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SmallDescription'); ?></dt>
		<dd>
			<?php echo h($product['Product']['smallDescription']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LargeDescription'); ?></dt>
		<dd>
			<?php echo h($product['Product']['largeDescription']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OtherText'); ?></dt>
		<dd>
			<?php echo h($product['Product']['otherText']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreationDate'); ?></dt>
		<dd>
			<?php echo h($product['Product']['creationDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ModificationDate'); ?></dt>
		<dd>
			<?php echo h($product['Product']['modificationDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UserPrice'); ?></dt>
		<dd>
			<?php echo h($product['Product']['userPrice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StorePrice'); ?></dt>
		<dd>
			<?php echo h($product['Product']['storePrice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock'); ?></dt>
		<dd>
			<?php echo h($product['Product']['stock']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($product['Product']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BarCode'); ?></dt>
		<dd>
			<?php echo h($product['Product']['barCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Store'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Store']['name'], array('controller' => 'stores', 'action' => 'view', $product['Store']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $product['Brand']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Season'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Season']['name'], array('controller' => 'seasons', 'action' => 'view', $product['Season']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gallerie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Gallerie']['id'], array('controller' => 'galleries', 'action' => 'view', $product['Gallerie']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Offer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Offer']['id'], array('controller' => 'offers', 'action' => 'view', $product['Offer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Realsize'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Realsize']['id'], array('controller' => 'realsizes', 'action' => 'view', $product['Realsize']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vegano'); ?></dt>
		<dd>
			<?php echo h($product['Product']['vegano']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seasons'), array('controller' => 'seasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season'), array('controller' => 'seasons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Galleries'), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallerie'), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Offers'), array('controller' => 'offers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Offer'), array('controller' => 'offers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Realsizes'), array('controller' => 'realsizes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Realsize'), array('controller' => 'realsizes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Freaturedproducts'), array('controller' => 'freaturedproducts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Freaturedproduct'), array('controller' => 'freaturedproducts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Childsections'), array('controller' => 'childsections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Childsection'), array('controller' => 'childsections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Colors'), array('controller' => 'colors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Color'), array('controller' => 'colors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mastersections'), array('controller' => 'mastersections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mastersection'), array('controller' => 'mastersections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sizes'), array('controller' => 'sizes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Size'), array('controller' => 'sizes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Carts'); ?></h3>
	<?php if (!empty($product['Cart'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Added'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Color Id'); ?></th>
		<th><?php echo __('Size Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Cart'] as $cart): ?>
		<tr>
			<td><?php echo $cart['id']; ?></td>
			<td><?php echo $cart['added']; ?></td>
			<td><?php echo $cart['quantity']; ?></td>
			<td><?php echo $cart['color_id']; ?></td>
			<td><?php echo $cart['size_id']; ?></td>
			<td><?php echo $cart['product_id']; ?></td>
			<td><?php echo $cart['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'carts', 'action' => 'view', $cart['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'carts', 'action' => 'edit', $cart['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'carts', 'action' => 'delete', $cart['id']), null, __('Are you sure you want to delete # %s?', $cart['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Freaturedproducts'); ?></h3>
	<?php if (!empty($product['Freaturedproduct'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Childsection Id'); ?></th>
		<th><?php echo __('Section Id'); ?></th>
		<th><?php echo __('Fathersection Id'); ?></th>
		<th><?php echo __('Mastersection Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Freaturedproduct'] as $freaturedproduct): ?>
		<tr>
			<td><?php echo $freaturedproduct['id']; ?></td>
			<td><?php echo $freaturedproduct['order']; ?></td>
			<td><?php echo $freaturedproduct['product_id']; ?></td>
			<td><?php echo $freaturedproduct['childsection_id']; ?></td>
			<td><?php echo $freaturedproduct['section_id']; ?></td>
			<td><?php echo $freaturedproduct['fathersection_id']; ?></td>
			<td><?php echo $freaturedproduct['mastersection_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'freaturedproducts', 'action' => 'view', $freaturedproduct['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'freaturedproducts', 'action' => 'edit', $freaturedproduct['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'freaturedproducts', 'action' => 'delete', $freaturedproduct['id']), null, __('Are you sure you want to delete # %s?', $freaturedproduct['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Freaturedproduct'), array('controller' => 'freaturedproducts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reviews'); ?></h3>
	<?php if (!empty($product['Review'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Star'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Sponsored'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Review'] as $review): ?>
		<tr>
			<td><?php echo $review['id']; ?></td>
			<td><?php echo $review['comment']; ?></td>
			<td><?php echo $review['star']; ?></td>
			<td><?php echo $review['user_id']; ?></td>
			<td><?php echo $review['created']; ?></td>
			<td><?php echo $review['status']; ?></td>
			<td><?php echo $review['sponsored']; ?></td>
			<td><?php echo $review['product_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reviews', 'action' => 'view', $review['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reviews', 'action' => 'edit', $review['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reviews', 'action' => 'delete', $review['id']), null, __('Are you sure you want to delete # %s?', $review['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sales'); ?></h3>
	<?php if (!empty($product['Sale'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('SaleDate'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Color Id'); ?></th>
		<th><?php echo __('Size Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('TotalCost'); ?></th>
		<th><?php echo __('Promotioncode Id'); ?></th>
		<th><?php echo __('Offer Id'); ?></th>
		<th><?php echo __('SubTotal'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Sale'] as $sale): ?>
		<tr>
			<td><?php echo $sale['id']; ?></td>
			<td><?php echo $sale['saleDate']; ?></td>
			<td><?php echo $sale['quantity']; ?></td>
			<td><?php echo $sale['color_id']; ?></td>
			<td><?php echo $sale['size_id']; ?></td>
			<td><?php echo $sale['product_id']; ?></td>
			<td><?php echo $sale['user_id']; ?></td>
			<td><?php echo $sale['totalCost']; ?></td>
			<td><?php echo $sale['promotioncode_id']; ?></td>
			<td><?php echo $sale['offer_id']; ?></td>
			<td><?php echo $sale['subTotal']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sales', 'action' => 'view', $sale['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sales', 'action' => 'edit', $sale['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sales', 'action' => 'delete', $sale['id']), null, __('Are you sure you want to delete # %s?', $sale['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Childsections'); ?></h3>
	<?php if (!empty($product['Childsection'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th><?php echo __('Fathersection Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Childsection'] as $childsection): ?>
		<tr>
			<td><?php echo $childsection['id']; ?></td>
			<td><?php echo $childsection['name']; ?></td>
			<td><?php echo $childsection['description']; ?></td>
			<td><?php echo $childsection['status']; ?></td>
			<td><?php echo $childsection['order']; ?></td>
			<td><?php echo $childsection['fathersection_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'childsections', 'action' => 'view', $childsection['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'childsections', 'action' => 'edit', $childsection['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'childsections', 'action' => 'delete', $childsection['id']), null, __('Are you sure you want to delete # %s?', $childsection['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Childsection'), array('controller' => 'childsections', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Colors'); ?></h3>
	<?php if (!empty($product['Color'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('HexaCode'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Color'] as $color): ?>
		<tr>
			<td><?php echo $color['id']; ?></td>
			<td><?php echo $color['name']; ?></td>
			<td><?php echo $color['hexaCode']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'colors', 'action' => 'view', $color['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'colors', 'action' => 'edit', $color['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'colors', 'action' => 'delete', $color['id']), null, __('Are you sure you want to delete # %s?', $color['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Color'), array('controller' => 'colors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mastersections'); ?></h3>
	<?php if (!empty($product['Mastersection'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th><?php echo __('Section Id'); ?></th>
		<th><?php echo __('Childsection Id'); ?></th>
		<th><?php echo __('StartValidity'); ?></th>
		<th><?php echo __('EndValidity'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('OtherText'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Mastersection'] as $mastersection): ?>
		<tr>
			<td><?php echo $mastersection['id']; ?></td>
			<td><?php echo $mastersection['name']; ?></td>
			<td><?php echo $mastersection['description']; ?></td>
			<td><?php echo $mastersection['status']; ?></td>
			<td><?php echo $mastersection['order']; ?></td>
			<td><?php echo $mastersection['section_id']; ?></td>
			<td><?php echo $mastersection['childsection_id']; ?></td>
			<td><?php echo $mastersection['startValidity']; ?></td>
			<td><?php echo $mastersection['endValidity']; ?></td>
			<td><?php echo $mastersection['image']; ?></td>
			<td><?php echo $mastersection['otherText']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mastersections', 'action' => 'view', $mastersection['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mastersections', 'action' => 'edit', $mastersection['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mastersections', 'action' => 'delete', $mastersection['id']), null, __('Are you sure you want to delete # %s?', $mastersection['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mastersection'), array('controller' => 'mastersections', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sections'); ?></h3>
	<?php if (!empty($product['Section'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th><?php echo __('Childsection Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Section'] as $section): ?>
		<tr>
			<td><?php echo $section['id']; ?></td>
			<td><?php echo $section['name']; ?></td>
			<td><?php echo $section['description']; ?></td>
			<td><?php echo $section['status']; ?></td>
			<td><?php echo $section['order']; ?></td>
			<td><?php echo $section['childsection_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sections', 'action' => 'view', $section['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sections', 'action' => 'edit', $section['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sections', 'action' => 'delete', $section['id']), null, __('Are you sure you want to delete # %s?', $section['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sizes'); ?></h3>
	<?php if (!empty($product['Size'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Value'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('EquivalenceMX'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Size'] as $size): ?>
		<tr>
			<td><?php echo $size['id']; ?></td>
			<td><?php echo $size['value']; ?></td>
			<td><?php echo $size['country_id']; ?></td>
			<td><?php echo $size['equivalenceMX']; ?></td>
			<td><?php echo $size['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sizes', 'action' => 'view', $size['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sizes', 'action' => 'edit', $size['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sizes', 'action' => 'delete', $size['id']), null, __('Are you sure you want to delete # %s?', $size['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Size'), array('controller' => 'sizes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Wishlists'); ?></h3>
	<?php if (!empty($product['Wishlist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Visible'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Wishlist'] as $wishlist): ?>
		<tr>
			<td><?php echo $wishlist['id']; ?></td>
			<td><?php echo $wishlist['user_id']; ?></td>
			<td><?php echo $wishlist['created']; ?></td>
			<td><?php echo $wishlist['description']; ?></td>
			<td><?php echo $wishlist['visible']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'wishlists', 'action' => 'view', $wishlist['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'wishlists', 'action' => 'edit', $wishlist['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'wishlists', 'action' => 'delete', $wishlist['id']), null, __('Are you sure you want to delete # %s?', $wishlist['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="childsections view">
<h2><?php echo __('Childsection'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($childsection['Childsection']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($childsection['Childsection']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($childsection['Childsection']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($childsection['Childsection']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($childsection['Childsection']['order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fathersection'); ?></dt>
		<dd>
			<?php echo $this->Html->link($childsection['Fathersection']['name'], array('controller' => 'fathersections', 'action' => 'view', $childsection['Fathersection']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Childsection'), array('action' => 'edit', $childsection['Childsection']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Childsection'), array('action' => 'delete', $childsection['Childsection']['id']), null, __('Are you sure you want to delete # %s?', $childsection['Childsection']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Childsections'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Childsection'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fathersections'), array('controller' => 'fathersections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fathersection'), array('controller' => 'fathersections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Freaturedproducts'), array('controller' => 'freaturedproducts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Freaturedproduct'), array('controller' => 'freaturedproducts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mastersections'), array('controller' => 'mastersections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mastersection'), array('controller' => 'mastersections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Freaturedproducts'); ?></h3>
	<?php if (!empty($childsection['Freaturedproduct'])): ?>
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
	<?php foreach ($childsection['Freaturedproduct'] as $freaturedproduct): ?>
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
	<h3><?php echo __('Related Mastersections'); ?></h3>
	<?php if (!empty($childsection['Mastersection'])): ?>
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
	<?php foreach ($childsection['Mastersection'] as $mastersection): ?>
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
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($childsection['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('SmallDescription'); ?></th>
		<th><?php echo __('LargeDescription'); ?></th>
		<th><?php echo __('OtherText'); ?></th>
		<th><?php echo __('CreationDate'); ?></th>
		<th><?php echo __('ModificationDate'); ?></th>
		<th><?php echo __('UserPrice'); ?></th>
		<th><?php echo __('StorePrice'); ?></th>
		<th><?php echo __('Stock'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('BarCode'); ?></th>
		<th><?php echo __('Store Id'); ?></th>
		<th><?php echo __('Brand Id'); ?></th>
		<th><?php echo __('Season Id'); ?></th>
		<th><?php echo __('Gallerie Id'); ?></th>
		<th><?php echo __('Offer Id'); ?></th>
		<th><?php echo __('Realsize Id'); ?></th>
		<th><?php echo __('Vegano'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($childsection['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['smallDescription']; ?></td>
			<td><?php echo $product['largeDescription']; ?></td>
			<td><?php echo $product['otherText']; ?></td>
			<td><?php echo $product['creationDate']; ?></td>
			<td><?php echo $product['modificationDate']; ?></td>
			<td><?php echo $product['userPrice']; ?></td>
			<td><?php echo $product['storePrice']; ?></td>
			<td><?php echo $product['stock']; ?></td>
			<td><?php echo $product['status']; ?></td>
			<td><?php echo $product['barCode']; ?></td>
			<td><?php echo $product['store_id']; ?></td>
			<td><?php echo $product['brand_id']; ?></td>
			<td><?php echo $product['season_id']; ?></td>
			<td><?php echo $product['gallerie_id']; ?></td>
			<td><?php echo $product['offer_id']; ?></td>
			<td><?php echo $product['realsize_id']; ?></td>
			<td><?php echo $product['vegano']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), null, __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

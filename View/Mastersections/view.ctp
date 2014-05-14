<div class="mastersections view">
<h2><?php echo __('Mastersection'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mastersection['Mastersection']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($mastersection['Mastersection']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($mastersection['Mastersection']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($mastersection['Mastersection']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($mastersection['Mastersection']['order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mastersection['Section']['name'], array('controller' => 'sections', 'action' => 'view', $mastersection['Section']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Childsection'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mastersection['Childsection']['name'], array('controller' => 'childsections', 'action' => 'view', $mastersection['Childsection']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StartValidity'); ?></dt>
		<dd>
			<?php echo h($mastersection['Mastersection']['startValidity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EndValidity'); ?></dt>
		<dd>
			<?php echo h($mastersection['Mastersection']['endValidity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($mastersection['Mastersection']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OtherText'); ?></dt>
		<dd>
			<?php echo h($mastersection['Mastersection']['otherText']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mastersection'), array('action' => 'edit', $mastersection['Mastersection']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mastersection'), array('action' => 'delete', $mastersection['Mastersection']['id']), null, __('Are you sure you want to delete # %s?', $mastersection['Mastersection']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mastersections'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mastersection'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Childsections'), array('controller' => 'childsections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Childsection'), array('controller' => 'childsections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Freaturedproducts'), array('controller' => 'freaturedproducts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Freaturedproduct'), array('controller' => 'freaturedproducts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Freaturedproducts'); ?></h3>
	<?php if (!empty($mastersection['Freaturedproduct'])): ?>
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
	<?php foreach ($mastersection['Freaturedproduct'] as $freaturedproduct): ?>
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
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($mastersection['Product'])): ?>
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
	<?php foreach ($mastersection['Product'] as $product): ?>
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

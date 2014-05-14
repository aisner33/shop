<div class="realsizes view">
<h2><?php echo __('Realsize'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($realsize['Realsize']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Large'); ?></dt>
		<dd>
			<?php echo h($realsize['Realsize']['large']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Width'); ?></dt>
		<dd>
			<?php echo h($realsize['Realsize']['width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($realsize['Realsize']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MediumLarge'); ?></dt>
		<dd>
			<?php echo h($realsize['Realsize']['mediumLarge']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MediumWidth'); ?></dt>
		<dd>
			<?php echo h($realsize['Realsize']['mediumWidth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($realsize['Realsize']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($realsize['Realsize']['comment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Realsize'), array('action' => 'edit', $realsize['Realsize']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Realsize'), array('action' => 'delete', $realsize['Realsize']['id']), null, __('Are you sure you want to delete # %s?', $realsize['Realsize']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Realsizes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Realsize'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($realsize['Product'])): ?>
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
	<?php foreach ($realsize['Product'] as $product): ?>
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
